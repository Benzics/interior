<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApartmentCategory;
use Illuminate\Http\Request;

use App\Models\Apartment;
use App\Services\CategoryService;
use App\Services\ImageService;
use App\Services\ProductService;
use Illuminate\Validation\Rules\File;

class ApartmentController extends Controller
{
    private $_service;

    private $_route;

    public function __construct(ProductService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Apartment());
        $this->_route = 'admin.apartments';
    }

    public function index()
    {
        $pageTitle = 'Apartments';
        $route = $this->_route;

        $products = $this->_service->get_products();

        return view('admin.products.index', compact('pageTitle', 'products', 'route'));
    }

    public function create()
    {
        $pageTitle = 'Add New Apartment';
        $route = $this->_route;
        $category_service = new CategoryService();
        $category_service->set_model(new ApartmentCategory());
        $categories = $category_service->get_categories();

        return view('admin.apartments.create', compact('pageTitle', 'categories', 'route'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            'price' => 'required|numeric',
            'images.*' => ['required', File::image()],
        ]);

        // create a portrait from one of the uploaded images
        $portrait = collect($request->file('images'))->first();

        $path = public_path('product_images');

        $portrait = 'product_images/' . uploadImage($portrait, $path, '360x420');

        // save the product
        $product = $this->_service->add_product([
            'name' => $validate['name'],
            'description' => $validate['description'],
            'apartment_category_id' => $validate['category_id'],
            'price' => $validate['price'],
            'user_id' => auth()->id(),
            'portrait' => $portrait,
        ]);

        // upload images
        $imageService = new ImageService();

        $path = public_path('product_images/');

        foreach($request->file('images') as $image)
        {
            $imagePath = 'product_images/' . uploadImage($image, $path, '800x500');

            $imageService->save_image($imagePath, $product->id, true);
        }

        return redirect()->route($this->_route . '.index')->with('notify', ['Product added successfully']);

    }

    public function show($id)
    {
        $pageTitle = 'View Apartment';
        $route = $this->_route;
        $product = $this->_service->get_product($id);

        $images = $product->images;

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        return view('admin.apartments.show', compact('pageTitle', 'product', 'images', 'route'));
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Apartment';
        $route = $this->_route;
        $product = $this->_service->get_product($id);

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        $category_service = new CategoryService();
        $category_service->set_model(new ApartmentCategory());
        $categories = $category_service->get_categories();

        $images = collect($product->images)->all();
        
        $imageGallery = [];

        foreach($images as $row)
        {
            $imageGallery[] = (object) ['id' => $row->id, 'src' => asset($row->name)];
        }

        $imageGallery = json_encode($imageGallery);

        return view('admin.apartments.edit', compact('pageTitle', 'product', 'categories', 'imageGallery', 'route'));
    }

    public function update(Request $request, $id)
    {
        $product = $this->_service->get_product($id);
        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        $images = collect($product->images);
        $image_service = new ImageService();

        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            'price' => 'required|numeric',
            'images.*' => [File::image()],
        ]);

        $preloaded = $request->input('preloaded');
        $portrait = $product->portrait;

        // if length of preloaded images is not equal to the images this product has, we delete the removed images
        if(count($request->input('preloaded') ?? []) !== $images->count())
        {
            $images->map(function($item, $key) use ($preloaded, $image_service) {

                if(collect($preloaded ?? [])->search($item->id) === false)
                {
                    // delete this image
                    $image_service->delete_image($item->id);
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

                $image_service->save_image($imagePath, $product->id, true);
            }

            // create a new portrait 
            $portrait = collect($request->file('images'))->first();
    
            $portrait = 'product_images/' . uploadImage($portrait, $path, '360x420');
        }

        // edit the product
        $product_data = [
            'name' => $validate['name'],
            'description' => $validate['description'],
            'apartment_category_id' => $validate['category_id'],
            'price' => $validate['price'],
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
