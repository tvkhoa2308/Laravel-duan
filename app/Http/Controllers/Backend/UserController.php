<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequets;

class UserController extends Controller
{
    public function __construct() {}

    public function index()
    {

        $template = 'backend.users.home.index';
        $users = User::paginate(10);
        return view('backend.users.layout', compact('template', 'users'));
    }

    public function create()
    {
        $template = 'backend.users.home.create';

        return view('backend.users.layout', compact('template'));
    }
   
}
