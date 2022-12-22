<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\CommonService;

class ProductController extends Controller
{
    private $service;

    public function __construct(CommonService $service)
    {
        $this->service = $service;
        $this->service->set_model(new Product());
    }

    public function singleCategory($id)
    {
        $categoryService = new CommonService();
        $categoryService->set_model(new Category());
        $category = $categoryService->get($id);

        if(!$category) return back()->withErrors(['category' => 'Category not found!']);

        $pageTitle = ucwords($category->name);

        $products = $this->service->getPaginated(15, 'id', 'DESC', [['category_id', '=', $id]]);

        return view('category', compact('category', 'pageTitle', 'products'));
    }

    public function product($id)
    {

    }
}
