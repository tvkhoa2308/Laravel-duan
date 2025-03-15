<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {}


    public function index()
    {
        // dd(Auth::id());

        return view('backend.auth.login');
    }
    public function login(LoginRequest $request)
    {

        $check = [
            'email' => $request->input('email'),
            'password' =>  $request->input('password')
        ];

        if (Auth::attempt($check)) {


            return redirect()->route('dashboard')->with('success', "Đăng nhập thành công!");
        }

        return redirect()->route('index')->with('error', "Sai tài khoản hoặc mật khẩu");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('index');
    }
}
