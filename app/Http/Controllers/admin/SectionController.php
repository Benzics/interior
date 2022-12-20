<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\SectionImage;
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
        $pageTitle = 'Add Section';
        $route = $this->_route;

        return view($route . '.create', compact('pageTitle', 'route'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
        ]);

        $data = [
            'name' => $validate['name'],
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'url' => $request->url,
            'button_text' => $request->button_text,
        ];

        if(!$section = $this->_service->save($data)) return back()->withErrors(['name' => 'An internal error occured']);

        // upload section images
        $imageService = new CommonService();
        $imageService->set_model(new SectionImage());

        if($request->hasFile('images'))
        {
            foreach($request->file('images') as $image)
            {
                $imagePath = public_path('images/sections');
                $path = 'images/sections' . uploadImage($image, $imagePath, '800x500');
                $imageData = ['section_id' => $section->id, 'path' => $path];
                $imageService->save($imageData);
            }
        }

        return redirect()->route($this->_route . '.index')->with('notify', ['Section successfully added']);
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