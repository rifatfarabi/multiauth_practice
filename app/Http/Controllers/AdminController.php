<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function adminLogin(){
        return view('layouts.admin_login');
    }

}

