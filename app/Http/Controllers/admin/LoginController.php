<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\LoginService;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard')->with(['notify' => ['You\'ve been logged in successfully.']]);
        }

        return back()->withErrors(['email' => 'Invalid email or password!'])->onlyInput('email');

    }

    public function logout(Request $request)
    {

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('admin.login');
    }
}
