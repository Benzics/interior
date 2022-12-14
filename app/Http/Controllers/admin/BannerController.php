<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CommonService;
use App\Models\Banner;

class BannerController extends Controller
{
    private $_service;
    private $_route;

    public function __construct(CommonService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Banner());
        $this->_route = 'admin.banners';
    }

    public function index()
    {
        $pageTitle = 'Banners';
        $route = $this->_route;
        $banners = $this->_service->getPaginated();

        return view('admin.banners.index', compact('pageTitle', 'banners', 'route'));
    }

    public function create()
    {
        $pageTitle = 'Add Banner';
        $route = $this->_route;

        return view('admin.banners.create', compact('pageTitle', 'route'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);

        $image = collect($request->file('image'))->first();
        $path = $image->store('/images/slide', ['disk' => 'my_files']);

        $data = [
            'name' => $validate['name'],
            'title' => $validate['title'],
            'description' => $validate['description'],
            'url' => $validate['url'],
            'image' => $path,
        ];

        if(!$this->_service->save($data)) return back()->withErrors(['name' => 'An internal error occured']);

        return redirect()->route('admin.banners.index')->with('notify', ['Banner added successfully']);

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
