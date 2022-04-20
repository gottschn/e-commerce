<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users = user::all();

        //dd($users);

        return view('Admin/clientes/index')->with('users', $users);  
    }
}
