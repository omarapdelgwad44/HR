<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }
    public function validate(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

    }
    public function login(Request $request)
    {
        $this->validate($request);
        // dd($request->all());
        $admin = Admin::where('email', $request->input('email'))
                      ->orWhere('username', $request->input('email'))
                      ->first();
        if (!$admin) {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
        if (Hash::check($request->password, $admin->password)) {
            // Authenticate the admin
            auth()->guard('admin')->login($admin);
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->with('error', 'Invalid credentials');
    }
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
