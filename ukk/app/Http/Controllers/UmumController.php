<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function index(){
        return view('umum/index');
    }
    public function login(){
        return view('umum/auth-login');
    }
}
