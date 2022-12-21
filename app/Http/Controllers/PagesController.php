<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Services\CommonService;

class PagesController extends Controller
{
    private $service;
    public function __construct(CommonService $service)
    {
        $this->service = $service;
        $service->set_model(new Page());
    }

    public function page($url)
    {
        $page = $this->service->get($url, 'url');
        if(!$page) return back()->withErrors(['page' => 'Page not found']);

        $pageTitle = $page->name;

        return view('pages', compact('page', 'pageTitle'));
    }
}
