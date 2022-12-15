<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CommonService;
use App\Models\Banner;
use Illuminate\Validation\Rules\File;

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
            'url' => 'required',
            'image.*' => ['required', File::image()],
        ]);

        $image = collect($request->file('image'))->first();
        $path = $image->store('/images/banners', ['disk' => 'my_files']);

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

    public function edit($id)
    {
        $pageTitle = 'Edit banner';
        $banner = $this->_service->get($id);
        $route = $this->_route;

        if(!$banner) return back()->withErrors(['name' => 'Banner not found!']);

        $preloaded[] = (object) ['id' => $banner->id, 'src' => asset($banner->image)];

        $preloaded = json_encode($preloaded);

        return view('admin.banners.edit', compact('pageTitle', 'banner', 'preloaded', 'route'));
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'url' => 'required'
        ]);

        $banner = $this->_service->get($id);
        $path = $banner->image;

        if($request->hasFile('image'))
        {
            $image = collect($request->file('image'))->first();
            $path = $image->store('/images/banners', ['disk' => 'my_files']);
        }

        $data = [
            'name' => $validate['name'],
            'title' => $validate['title'],
            'description' => $validate['description'],
            'url' => $validate['url'],
            'image' => $path,
        ];

        if(!$this->_service->edit($data, $banner->id)) return back()->withErrors(['name' => 'An internal error occured']);

        return redirect()->route('admin.banners.index')->with('notify', ['Banner edited successfully']);
    }

    public function destroy($id)
    {
        $banner = $this->_service->get($id);

        if(!$banner) return back()->withErrors(['name' => 'Banner not found!']);

        // delete the image
        if(file_exists($banner->image)) unlink($banner->image);

        if(!$this->_service->delete($id)) return back()->withErrors(['name' => 'An uknown error occured']);

        return redirect()->route($this->_route . '.index')->with(['notify' => ['Banner was deleted']]);
    }
}
