<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {

    }


    public function index(){
        return view('backend.auth.login');
    }
    public function login(LoginRequest $request){

        $check = [
            'email' => $request->input('email'),
           'password' =>  $request->input('password')
        ];

        if (Auth::attempt( $check )) {


             return redirect()->route('dashboard')->with('success' , "Đăng nhập thành công!");
        }

        return redirect()->route('index')->with('error', "Sai tài khoản hoặc mật khẩu");
    }

}
