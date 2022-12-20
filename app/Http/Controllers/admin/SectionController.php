<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Services\CommonService;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    private $_service;
    private $_route;
    public function __construct(CommonService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Section());
        $this->_route = 'admin.sections';
    }

    public function index()
    {
        $pageTitle = 'Sections';
        $sections = $this->_service->getPaginated();
        $route = $this->_route;

        return view($route . '.index', compact('pageTitle', 'sections', 'route'));
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
        
    }
}