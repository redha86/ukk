<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function admin(){
        return view('admin/index');
    }

    // --------> Paket Cucian
    public function paketcucian(){
        return view('admin/paket-cucian');
    }
    public function tambahpaket(){
        return view('admin/tambah-paket');
    }
    public function editpaket()
    {
        return view('admin/edit-paket');
    }

    // ---------> Kasir
    public function adminkasir(){
        return view('admin/kasir');
    }
    public function tambahpengguna(){
        return view('admin/tambah-kasir');
    }
    public function editkasir(){
        return view('admin/edit-kasir');
    }

    // -------- Outlet
    public function adminoutlet(){
        $data = DB::table('outlet')->get();
        return view('admin/outlet', compact('data'));
    }
    public function tambahoutlet(){
        return view('admin/tambah-outlet');
    }
    public function hapusoutlet($id){
        $data = DB::table('outlet')->where('id',$id)->delete();
        return redirect('adminoutlet');
    }
    public function prosesoutlet(Request $request){
        $data = DB::table('outlet')->insert([
            'nama_outlet' => $request->nama_outlet,
            'alamat' => $request->alamat,
            'tlp' => $request->tlp
        ]);
        return redirect('adminoutlet');
    }
    public function editoutlet(){
        return view('admin/edit-outlet');
    }

    // -------> member
    public function adminmember()
    {
        return view('admin/member');
    }
    public function tambahmember(){
        return view('admin/tambah-pelanggan');
    }
    public function editmember(){
        return view('admin/edit-member');
    }

    // -------> Owner
    public function adminowner(){
        return view('admin/owner');
    }
    public function editowner(){
        return view('admin/edit-owner');
    }
    
    // -------> Transaksi
    public function admintransaksi(){
        return view('admin/transaksi');
    }
    public function tambahtransaksi(){
        return view('admin/tambah-transaksi');
    }
    public function edittransaksi(){
        return view('admin/edit-transaksi');
    }
    public function detailtransaksi(){
        return view('admin/detail-transaksi');
    }

    // --------> Generate Laporan
    public function laporan(){
        return view('admin/laporan');
    }
}
