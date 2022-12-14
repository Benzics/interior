<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\CommonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function index()
    {
        $pageTitle = 'Change Password';
        $admin = auth()->user();

        return view('admin.password', compact('pageTitle', 'admin'));
    }

    public function store(Request $request)
    {
        $admin = auth()->user();

        $validate = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        // check if old password is correct

        if(!Hash::check($validate['password'], $admin->password)) return back()->withErrors(['old_password' => 'Old password is incorrect']);

        $password = Hash::make($validate['password']);

        $service = new CommonService();
        $service->set_model(new User());

        $service->edit(['password' => $password], $admin->id);

        return redirect()->route('admin.password')->with('notify', ['Password changed successfully']);

    }

    public function profile()
    {
        $pageTitle = 'Profile';
        $admin = auth()->user();

        return view('admin.profile', compact('pageTitle', 'admin'));
    }

    public function editProfile(Request $request)
    {
        $admin = auth()->user();

        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $service = new CommonService();
        $service->set_model(new User());

        if(!$service->edit(['name' => $validate['name'], 'email' => $validate['email']], $admin->id))
        {
            return back()->withErrors(['name' => 'An internal error occured']);
        }

        return redirect()->route('admin.profile')->with('notify', ['Profile updated successfully']);
    }
}
