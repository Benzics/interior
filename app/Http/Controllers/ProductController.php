<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use App\Models\ApartmentCategory;
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

        $route = 'products';
        $products = $this->service->getPaginated(15, 'id', 'DESC', [['category_id', '=', $id]]);

        return view('category', compact('category', 'pageTitle', 'products', 'route'));
    }

    public function singleApartmentCategory($id)
    {
        $categoryService = new CommonService();
        $categoryService->set_model(new ApartmentCategory());

        $apartmentService = new CommonService();
        $apartmentService->set_model(new Apartment());

        $category = $categoryService->get($id);

        if(!$category) return back()->withErrors(['category' => 'Category not found!']);

        $pageTitle = ucwords($category->name);
        $route = 'apartments';

        $products = $apartmentService->getPaginated(15, 'id', 'DESC', [['apartment_category_id', '=', $id]]);

        return view('category', compact('category', 'pageTitle', 'products', 'route'));
    }

    public function product($id)
    {
        $product = $this->service->get($id);

        if(!$product) return back()->withErrors(['product' => 'Product not found']);

        $pageTitle = ucwords($product->name);
        $route = 'products';

        $related = $this->service->getAll([['category_id', '=', $product->category_id]], 8);

        return view('product', compact('product', 'pageTitle', 'related', 'route'));
    }

    public function apartment($id)
    {
        $apartmentService = new CommonService();
        $apartmentService->set_model(new Apartment());
        $product = $apartmentService->get($id);

        if(!$product) return back()->withErrors(['product' => 'Apartment not found']);

        $pageTitle = ucwords($product->name);
        $route = 'products';

        $related = $apartmentService->getAll([['apartment_category_id', '=', $product->apartment_category_id]], 8);

        return view('apartment', compact('product', 'pageTitle', 'related', 'route'));
    }
}
