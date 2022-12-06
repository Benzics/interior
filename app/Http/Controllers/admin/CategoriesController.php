<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    private $_service;

    public function __construct(CategoryService $service)
    {
        $this->_service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = 'Product categories';

        $categories = $this->_service->all_categories();

        return view('admin.categories.index', compact('pageTitle', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pageTitle = 'Create category';

        return view('admin.categories.create', compact('pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required']);

        if(!$this->_service->create_category($validated['name']))
        {
            return back()->withErrors(['name' => 'An unexpected error occured']);
        }

        return redirect(route('admin.categories.index'))->with(['notify' => ['Category created successfully']]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pageTitle = 'Edit category';

        $category = $this->_service->get_category($id);

        if(!$category) return back()->withErrors(['name' => 'Category not found!']);

        return view('admin.categories.edit', compact('pageTitle', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

        return redirect(route('admin.categories.index'))->with(['notify' => ['Category edited successfully']]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
