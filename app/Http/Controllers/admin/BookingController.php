<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CommonService;
use App\Models\Booking;

class BookingController extends Controller
{
    private $service;

    public function __construct(CommonService $service)
    {
        $this->service = $service;
        $this->service->set_model(new Booking());
    }

    public function index(Request $request)
    {
        $pageTitle = 'Bookings';
        $bookings = $this->service->getPaginated(15, 'id', 'DESC', [['product_id', '!=', '0']]);

        return view('admin.bookings', compact('pageTitle', 'bookings'));
    }

    public function apartment(Request $request)
    {
        $pageTitle = 'Apartment Bookings';
        $bookings = $this->service->getPaginated(15, 'id', 'DESC', [['apartment_id', '!=', '0']]);
        $apartment = true;

        return view('admin.apartment-bookings', compact('pageTitle', 'bookings', 'apartment'));
    }
}
