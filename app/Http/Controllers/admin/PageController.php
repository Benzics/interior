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
        $pageTitle = 'Add New Page';
        $route = $this->_route;

        return view('admin.pages.create', compact('pageTitle', 'route'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'content' => 'required',
            'url' => 'required|alpha',
        ]);

        $data = [
            'name' => $validate['name'],
            'content' => $validate['content'],
            'url' => $validate['url'],
        ];

        if(!$this->_service->save($data)) return back()->withErrors(['name' => 'An internal error occured']);

        return redirect()->route($this->_route . '.index')->with('notify', ['Page Added Successfully']);
    }

    public function edit($id)
    {
        $pageTitle = 'Edit Page';
        $route = $this->_route;
        $page = $this->_service->get($id);

        if(!$page) return back()->withErrors(['name' => 'Page Not Found!']);

        return view('admin.pages.edit', compact('pageTitle', 'route', 'page'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'content' => 'required',
            'url' => 'required|alpha',
        ]);

        $data = [
            'name' => $validate['name'],
            'content' => $validate['content'],
            'url' => $validate['url'],
        ];

        if(!$this->_service->edit($data, $id)) return back()->withErrors(['name' => 'An internal error occured']);

        return redirect()->route($this->_route . '.index')->with('notify', ['Page Edited Successfully']);
    }

    public function destroy($id)
    {
        $page = $this->_service->get($id);

        if(!$page) return back()->withErrors(['name' => 'Page not found!']);

        if(!$this->_service->delete($id)) return back()->withErrors(['name' => 'An uknown error occured']);

        return redirect()->route($this->_route . '.index')->with(['notify' => ['Page was deleted']]);
    }
}
