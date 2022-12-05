<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LoginService;

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

        $credentials = [
            'email' => $validated['email'],
            'password' => $validated['password'],
        ];

        if(LoginService::logAdmin($credentials, $request))
        {
            return redirect()->route('admin.dashboard')->with(['success' => 'You\'ve been logged in successfully.']);
        }

        return back()->withErrors(['email' => 'Invalid email or password!']);

    }
}
