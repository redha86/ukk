<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function owner(){
        return view('owner/index');
    }
    public function laporan(){
        return view('owner/laporan');
    }
}
