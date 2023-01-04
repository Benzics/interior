<?php

namespace App\Http\Controllers\Api;

use App\Events\ProductBooked;
use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Product;
use App\Services\CommonService;

class BookingController extends Controller
{
    private $service;

    public function __construct(CommonService $service)
    {
        $this->service = $service;
        $this->service->set_model(new Booking());
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'name' => 'required',
        ]);

        $productId = $request->product_id ?? 0;
        $apartmentId = $request->apartment_id ?? 0;
        $data = [
            'email' => $validate['email'],
            'name' => $validate['name'],
            'product_id' => $productId,
            'apartment_id' => $apartmentId,
        ];

        $productService = new CommonService();
        $productService->set_model(new Product());

        $apartmentService = new CommonService();
        $apartmentService->set_model(new Apartment());

        $product = ($productId) ? $productService->get($productId) : $apartmentService->get($apartmentId);
        
        if(!$this->service->save($data)){
            return response()->json([
                'error' => true,
                'message' => 'An internal error occured',
            ]);
        }

        $mailData = [
            'email' => $validate['email'],
            'name' => $validate['name'],
            'product_name' => $product?->name,
        ];

        try {
            ProductBooked::dispatch($mailData);
        } catch (\Throwable $th) {
            report($th);
        }

        return response()->json([
            'success' => true,
            'message' =>'Booking successful.',
        ]);

    }

    public function markRead(Request $request)
    {
        $id = $request->id;
        if($this->service->edit(['status' => '1'], $id)){
            return response()->json([
                'success' => true,
                'message' => 'Successfully marked as read'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'An internal error occured',
        ]);
    }

    public function markUnread(Request $request)
    {
        $id = $request->id;
        if($this->service->edit(['status' => '0'], $id)){
            return response()->json([
                'success' => true,
                'message' => 'Successfully marked as unread'
            ]);
        }

        return response()->json([
            'error' => true,
            'message' => 'An internal error occured',
        ]);
    }
}
