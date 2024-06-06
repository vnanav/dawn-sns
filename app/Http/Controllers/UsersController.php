<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //追記

class UsersController extends Controller
{
    //
    public function index()
    {
        return view('users.index');
    }
}
