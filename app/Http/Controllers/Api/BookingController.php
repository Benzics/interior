<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
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

        $product_id = $request->product_id ?? 0;
        $apartment_id = $request->apartment_id ?? 0;
        $data = [
            'email' => $validate['email'],
            'name' => $validate['name'],
            'product_id' => $product_id,
            'apartment_id' => $apartment_id,
        ];

        if(!$this->service->save($data)){
            return response()->json([
                'error' => true,
                'message' => 'An internal error occured',
            ]);
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
