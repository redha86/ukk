<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\UmumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// <------------------------------------------ADMIN-------------------------------------->
Route::get('admin', [AdminController::class, 'admin']);
// -----> Paket cucian
Route::get('paketcucian', [AdminController::class, 'paketcucian']);
Route::get('tambahpaket', [AdminController::class, 'tambahpaket']);
Route::get('editpaket', [AdminController::class, 'editpaket']);
// ------> Admin Kasir
Route::get('adminkasir', [AdminController::class, 'adminkasir']);
Route::get('tambahpengguna', [AdminController::class, 'tambahpengguna']);
Route::get('kasiredit', [AdminController::class, 'editkasir']);
// ------> Outlet
Route::get('adminoutlet', [AdminController::class, 'adminoutlet']);
Route::get('tambahoutlet', [AdminController::class, 'tambahoutlet']);
Route::post('prosesoutlet', [AdminController::class, 'prosesoutlet'])->name('prosesoutlet');
Route::get('/hapusoutlet/{id}', [AdminController::class, 'hapusoutlet'])->name('hapusoutlet');
Route::get('outletedit', [AdminController::class, 'editoutlet']);
// ------> Member
Route::get('adminmember', [AdminController::class, 'adminmember']);
Route::get('tambahmember', [AdminController::class, 'tambahmember']);
Route::get('memberedit', [AdminController::class, 'editmember']);
// ------> Owner
Route::get('adminowner', [AdminController::class, 'adminowner']);
Route::get('owneredit', [AdminController::class, 'editowner']);
// -------> Transaksi
Route::get('admintransaksi', [AdminController::class, 'admintransaksi']);
Route::get('tambahtransaksi', [AdminController::class, 'tambahtransaksi']);
Route::get('edittransaksi', [AdminController::class, 'edittransaksi']);
Route::get('detailtransaksi', [AdminController::class, 'detailtransaksi']);
// -------> Generate Laporan
Route::get('generatelaporan', [AdminController::class, 'laporan']);

// <-------------------------------------------------- KASIR ------------------------------------------>
Route::get('kasir', [KasirController::class, 'kasir']);
// --------> Member
Route::get('member', [KasirController::class, 'kasirmember']);
Route::get('editmember', [KasirController::class, 'editmember']);
Route::get('tambahmember', [KasirController::class, 'tambahmember']);
// -------> Transaksi
Route::get('kasirtransaksi', [KasirController::class, 'kasirtransaksi']);
Route::get('edittransaksi', [KasirController::class, 'edittransaksi']);
Route::get('detailtransaksi', [KasirController::class, 'detailtransaksi']);
Route::get('tambahtransaksi', [KasirController::class, 'tambahtransaksi']);
// --------> generate laporan
Route::get('laporankasir', [KasirController::class, 'laporan']);

// <------------------------------------------------ OWNER --------------------------------------------->
Route::get('owner', [OwnerController::class, 'owner']);
Route::get('laporan', [OwnerController::class, 'laporan']);

// <------------------------------------------------ UMUM ------------------------------------------------>
Route::get('LaundryAja', [UmumController::class, 'index']);
Route::get('login', [UmumController::class, 'login']);