<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
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
        ]);

        // upload images
        foreach($request->file('images') as $image)
        {

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
