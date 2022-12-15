<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CommonService;
use App\Models\Page;

class PageController extends Controller
{
    private $_service;
    private $_route;

    public function __construct(CommonService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Page());
        $this->_route = 'admin.pages';
    }

    public function index()
    {
        $pageTitle = 'Pages';
        $route = $this->_route;
        $pages = $this->_service->getPaginated();

        return view('admin.pages.index', compact('pageTitle', 'route', 'pages'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
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
