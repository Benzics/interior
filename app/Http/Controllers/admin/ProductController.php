<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Services\CategoryService;
use App\Services\ImageService;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    private $_service;

    private $_route;

    public function __construct(ProductService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Product());
        $this->_route = 'admin.products';
    }

    public function index()
    {
        $pageTitle = 'Products';
        $route = $this->_route;

        $products = $this->_service->get_products();

        return view('admin.products.index', compact('pageTitle', 'products', 'route'));
    }

    public function create()
    {
        $pageTitle = 'Add New Product';
        $route = $this->_route;
        $category_service = new CategoryService();
        $category_service->set_model(new Category());
        $categories = $category_service->get_categories();

        return view('admin.products.create', compact('pageTitle', 'categories', 'route'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            'images.*' => ['required', File::image()],
        ]);

        // create a portrait from one of the uploaded images
        $portrait = collect($request->file('images'))->first();

        $path = public_path('product_images');

        $portrait = 'product_images/' . uploadImage($portrait, $path, '360x560');
        // save the product
        $product = $this->_service->add_product([
            'name' => $validate['name'],
            'description' => $validate['description'],
            'category_id' => $validate['category_id'],
            'user_id' => auth()->id(),
            'portrait' => $portrait,
        ]);

        // upload images
        $imageService = new ImageService();

        $path = public_path('product_images/');

        foreach($request->file('images') as $image)
        {
            $imagePath = 'product_images/' . uploadImage($image, $path, '800x500');

            $imageService->save_image($imagePath, $product->id);
        }
        

        return redirect()->route($this->_route . '.index')->with('notify', ['Product added successfully']);

    }

    public function show($id)
    {
        $pageTitle = 'View Product';
        $route = $this->_route;
        $product = $this->_service->get_product($id);

        $images = $product->images;

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        return view('admin.products.show', compact('pageTitle', 'product', 'images', 'route'));
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Product';
        $route = $this->_route;
        $product = $this->_service->get_product($id);

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        $category_service = new CategoryService();
        $category_service->set_model(new Category());
        $categories = $category_service->get_categories();

        $images = collect($product->images)->all();
        
        $imageGallery = [];

        foreach($images as $row)
        {
            $imageGallery[] = (object) ['id' => $row->id, 'src' => asset($row->name)];
        }

        $imageGallery = json_encode($imageGallery);

        return view('admin.products.edit', compact('pageTitle', 'product', 'categories', 'imageGallery', 'route'));
    }

    public function update(Request $request, $id)
    {
        $product = $this->_service->get_product($id);
        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        $images = collect($product->images);
        $imageService = new ImageService();

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            'images.*' => [File::image()],
        ]);

        $preloaded = $request->input('preloaded');

        $portrait = $product->portrait;

        // if length of preloaded images is not equal to the images this product has, we delete the removed images
        if(count($preloaded ?? []) !== $images->count())
        {
            $images->map(function($item, $key) use ($preloaded, $imageService) {

                if(collect($preloaded ?? [])->search($item->id) === false)
                {
                    // delete this image
                    $imageService->delete_image($item->id);
                }
            });
        }
        
        // if new images are included, upload them
        if($request->hasFile('images'))
        {
            $path = public_path('product_images');
            foreach($request->file('images') as $image)
            {
                $imagePath = 'product_images/' . uploadImage($image, $path, '800x500');

                $imageService->save_image($imagePath, $product->id);
            }

            // create a new portrait 
            $portrait = collect($request->file('images'))->first();
    
            $portrait = 'product_images/' . uploadImage($portrait, $path, '360x560');
        }

        // edit the product
        $product_data = [
            'name' => $validate['name'],
            'description' => $validate['description'],
            'category_id' => $validate['category_id'],
            'portrait' => $portrait,
        ];

        if(!$this->_service->edit_product($product_data, $product->id))
        {
            return back()->withErrors(['name' => 'An internal error occured']);
        }

        return redirect()->route($this->_route . '.index')->with('notify', ['Product edited successfully']);

    }

    public function destroy($id)
    {
        $product = $this->_service->get_product($id);

        if(!$product) return back()->withErrors(['name' => 'Product not found!']);

        if(!$this->_service->delete_product($id)) return back()->withErrors(['name' => 'An uknown error occured']);

        return redirect()->route($this->_route . '.index')->with(['notify' => ['product was deleted']]);
    }
}
