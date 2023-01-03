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

    public function index()
    {
        $pageTitle = 'Bookings';
        $bookings = $this->service->getPaginated();

        return view('admin.bookings', compact('pageTitle', 'bookings'));
    }
}
