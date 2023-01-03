<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Apartment;
use App\Models\Booking;

class DashboardController extends Controller
{
    public function index()
    {
        $pageTitle = 'Dashboard';
        $products = Product::count();
        $apartments = Apartment::count();
        $productBookings = Booking::where([['product_id', '!=', '0'], ['status', '=', '0']])->count();
        $apartmentBookings = Booking::where([['apartment_id', '!=', '0'], ['status', '=', '0']])->count();

        return view('admin.dashboard', compact('pageTitle', 'products', 'apartments', 'productBookings', 'apartmentBookings'));
    }
}
