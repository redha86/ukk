<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function kasir(){
        return view('kasir/index');
    }

    // -------> Member
    public function kasirmember(){
        return view('kasir/member');
    }
    public function editmember(){
        return view('kasir/edit-member');
    }
    public function tambahmember(){
        return view('kasir/tambah-pelanggan');
    }

    // --------> Transaksi
    public function kasirtransaksi(){
        return view('kasir/transaksi');
    }
    public function edittransaksi(){
        return view('kasir/edit-transaksi');
    }
    public function detailtransaksi(){
        return view('kasir/detail-transaksi');
    }
    public function tambahtransaksi(){
        return view('kasir/tambah-transaksi');
    }

    // -------> generate laporan
    public function laporan(){
        return view('kasir/laporan');
    }
}
