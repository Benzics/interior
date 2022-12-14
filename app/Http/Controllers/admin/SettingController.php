<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Services\CommonService;

class SettingController extends Controller
{
    private $_service;

    public function __construct(CommonService $service)
    {
        $this->_service = $service;
        $this->_service->set_model(new Setting());
    }

    public function index()
    {
        $pageTitle = 'Site Settings';

        return view('admin.settings.index', compact('pageTitle'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'site-name' => 'required',
            'admin-mail' => 'required|email',
            'currency' => 'required',
            'currency-short' => 'required',
            'currency-symbol' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        foreach($validate as $key => $value)
        {
            if(!$this->_service->edit(['value' => $value], $key, 'name')) return back()->withErrors('setting', 'An internal error ocurred');
        }

        return redirect()->route('admin.settings')->with('notify', ['Savings set successfully']);

    }
}
