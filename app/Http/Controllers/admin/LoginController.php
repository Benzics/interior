<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        $pageTitle = 'Login to dashboard';
        return view('admin.auth.login', compact('pageTitle'));
    }

    /**
     * Log admin into the system
     * @return 
     */
    public function authenticate(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        
    }
}
