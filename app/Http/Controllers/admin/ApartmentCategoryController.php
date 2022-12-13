<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ApartmentCategory as Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class ApartmentCategoryController extends Controller
{
    private $_service;

    private $_route;

    public function __construct(CategoryService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Category());

        $this->_route = 'admin.apartment-categories';
    }

    public function index()
    {
        $pageTitle = 'Apartment categories';
        $route = $this->_route;

        $categories = $this->_service->all_categories();

        return view('admin.categories.index', compact('pageTitle', 'categories', 'route'));
    }

  
    public function create()
    {
        $pageTitle = 'Create category';
        $route = $this->_route;

        return view('admin.categories.create', compact('pageTitle', 'route'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required']);

        if(!$this->_service->create_category($validated['name']))
        {
            return back()->withErrors(['name' => 'An unexpected error occured']);
        }

        return redirect(route('admin.apartment-categories.index'))->with(['notify' => ['Category created successfully']]);
    }


    public function edit($id)
    {
        $pageTitle = 'Edit category';
        $route = $this->_route;

        $category = $this->_service->get_category($id);

        if(!$category) return back()->withErrors(['name' => 'Category not found!']);

        return view('admin.categories.edit', compact('pageTitle', 'category', 'route'));
    }

    public function update(Request $request, $id)
    {
        $category = $this->_service->get_category($id);

        if(!$category) return back()->withErrors(['name' => 'Category not found!']);

        $validated = $request->validate([
            'name' => 'required',
        ]);

        if(!$this->_service->edit_category($validated['name'], $id))
        {
            return back()->withErrors(['name' => 'An unexpected error occured']);
        }

        return redirect(route('admin.apartment-categories.index'))->with(['notify' => ['Category edited successfully']]);
    }

    public function destroy($id)
    {
        $category = $this->_service->get_category($id);

        if(!$category) return back()->withErrors(['name' => 'Category not found!']);

        if(!$this->_service->delete_category($id)) return back()->withErrors(['name' => 'An uknown error occured']);

        return redirect()->route('admin.apartment-categories.index')->with(['notify' => ['Category was deleted']]);
    }
}
