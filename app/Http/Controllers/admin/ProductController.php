<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use App\Services\ImageService;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Validation\Rules\File;

class ProductController extends Controller
{
    private $_service;

    public function __construct(ProductService $service)
    {
        $this->_service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Products';

        $products = $this->_service->get_products();

        return view('admin.products.index', compact('pageTitle', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Add New Product';

        $category_service = new CategoryService();
        $categories = $category_service->get_categories();

        return view('admin.products.create', compact('pageTitle', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required|numeric',
            'images.*' => ['required', File::image()],
        ]);

        // save the product
        $product = $this->_service->add_product([
            'name' => $validate['name'],
            'description' => $validate['description'],
            'category_id' => $validate['category_id'],
            'user_id' => auth()->id(),
        ]);

        // upload images
        $image_service = new ImageService();

        foreach($request->file('images') as $image)
        {
            $path = $image->store('/product_images', ['disk' => 'my_files']);

            $image_service->save_image($path, $product->id);
        }

        return redirect()->route('admin.products.index')->with('notify', ['Product added successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pageTitle = 'View Product';
        $product = $this->_service->get_product($id);

        $images = $product->images;

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        return view('admin.products.show', compact('pageTitle', 'product', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Edit Product';
        $product = $this->_service->get_product($id);

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        $category_service = new CategoryService();
        $categories = $category_service->get_categories();

        $images = collect($product->images)->all();
        
        $imageGallery = [];

        foreach($images as $row)
        {
            $imageGallery[] = (object) ['id' => $row->id, 'src' => asset($row->name)];
        }

        $imageGallery = json_encode($imageGallery);

        return view('admin.products.edit', compact('pageTitle', 'product', 'categories', 'imageGallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
            'images.*' => [File::image()],
        ]);

        $preloaded = $request->input('preloaded');

        // if length of preloaded images is not equal to the images this product has, we delete the removed images
        if(count($request->input('preloaded') ?? []) !== $images->count())
        {
            $delete_images = $images->map(function($item, $key) use ($preloaded, $image_service) {

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
            foreach($request->file('images') as $image)
            {
                $path = $image->store('/product_images', ['disk' => 'my_files']);

                $image_service->save_image($path, $product->id);
            }
        }

        // edit the product
        $product_data = [
            'name' => $validate['name'],
            'description' => $validate['description'],
            'category_id' => $validate['category_id'],
        ];

        if(!$this->_service->edit_product($product_data, $product->id))
        {
            return back()->withErrors(['name' => 'An internal error occured']);
        }

        return redirect()->route('admin.products.index')->with('notify', ['Product edited successfully']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
