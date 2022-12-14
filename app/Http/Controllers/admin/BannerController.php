<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CommonService;
use App\Models\Banner;

class BannerController extends Controller
{
    private $_service;

    public function __construct(CommonService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Banner());
    }

    public function index()
    {
        $pageTitle = 'Banners';

        return view('admin.banners.index', compact('pageTitle'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
