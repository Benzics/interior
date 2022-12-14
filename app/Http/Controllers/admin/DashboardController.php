<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Apartment;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $products = Product::count();
        $apartments = Apartment::count();
        return view('admin.dashboard', compact('pageTitle', 'products', 'apartments'));
    }
}
