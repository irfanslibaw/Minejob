<?php

use App\Http\Controllers\Adperusahaan;
use App\Http\Controllers\DlokerController;
use App\Http\Controllers\OpearatorController;
use App\Http\Controllers\PerusahaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\BarangController;
use App\Models\Perusahaan;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DataptController;
use App\Http\Controllers\InfolokerController;
use App\Http\Controllers\LoguserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogadminController;
use App\Http\Controllers\LogadminptController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\RegisterptController;
use App\Http\Controllers\RegisterwebController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\UploadimgController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/landingpage', function () {
    return view('landingpage');
});


/*--------------Route  Admin--------------*/
Route::get('/regisweb', [RegisterwebController::class, 'index'])->name('regisweb');
Route::post('/regisweb', [RegisterwebController::class, 'store'])->name('regisweb.store');

Route::get('/logadminweb', [LogadminController::class, 'index'])->name('logadminweb');
Route::post('/logadminweb', [LogadminController::class, 'authanticate']);
Route::get('/admin/logout', [LogadminController::class, 'adminweblogout'])->name('adminweb.logout');

Route::get('/dsbadmin', [LogadminController::class, 'dashboard'])->name('adminweb.dsb')->middleware('admin');
Route::resource('datapt', DataptController::class)->middleware('admin');
Route::get('/dloker', [LogadminController::class, 'dloker'])->name('dlokerweb')->middleware('admin');
Route::get('/dloker/{id}/info', [InfolokerController::class, 'isi'])->name('dloker.info')->middleware('admin');
/*--------------End Route  Admin--------------*/



/*--------------Route  Adminpt--------------*/
Route::get('/logadminpt', [LogadminptController::class, 'index'])->name('logadminpt');
Route::post('/logadminpt', [LogadminptController::class, 'authanticate']);
Route::get('/dsbpt', [LogadminptController::class, 'dashboard'])->name('adminpt.dsb')->middleware('adminpt');
Route::get('/adminpt/logout', [LogadminptController::class, 'adminptlogout'])->name('adminpt.logout');

Route::get('/registerpt', [RegisterptController::class, 'index'])->name('registerpt');
Route::post('/registerpt', [RegisterptController::class, 'store'])->name('registerpt.store');

Route::resource('/dloker_pt', DlokerController::class)->names(['index' => 'dloker_pt',])->middleware('adminpt');
Route::get('/dloker_pt/{id}/info', [InfolokerController::class, 'detail'])->name('dloker_pt.info')->middleware('adminpt');


Route::get('/dpelamar', [PelamarController::class, 'index'])->name('pelamar.index')->middleware('adminpt');
Route::get('/dpelamar/{id}/edit',  [PelamarController::class, 'edit'])->name('pelamar.edit')->middleware('adminpt');
Route::put('/dpelamar/{id}',  [PelamarController::class, 'update'])->name('pelamar.update')->middleware('adminpt');

Route::get('unduh-pdf/{id}', [PelamarController::class, 'downloadPdf'])->name('unduh-pdf')->middleware('adminpt');
/*--------------End Route Adminpt--------------*/



/*--------------Route  user--------------*/
Route::get('/loguser', [LoguserController::class, 'index'])->name('loguser');
Route::post('/loguser', [LoguserController::class, 'authanticate']);
Route::get('/', [LoguserController::class, 'dashboard1'])->name('userloker.dsb1');
Route::get('/dsb', [LoguserController::class, 'dashboard'])->name('userloker.dsb')->middleware('auth');
Route::get('/user/logout', [LoguserController::class, 'logoutuser'])->name('user.logout');

Route::get('/registrasi', [RegisterController::class, 'index'])->name('register');
Route::post('/registrasi', [RegisterController::class, 'store'])->name('register.store');


Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index')->middleware('auth');
Route::delete('/riwayat/{id}', [RiwayatController::class, 'hapus'])->name('riwayat.hapus')->middleware('auth');

Route::get('/datadiri/edit',  [UserController::class, 'index'])->name('user.edit')->middleware('auth');
Route::put('/datadiri',  [userController::class, 'update'])->name('user.update')->middleware('auth');

Route::get('/loker,', [InfolokerController::class, 'index1'])->name('lamaran');
Route::get('/loker', [InfolokerController::class, 'index'])->name('lamaran.index')->middleware('auth');
Route::get('/lamaran/{id}/create', [InfolokerController::class, 'create'])->name('lamaran.create')->middleware('auth');
Route::post('/lamaran',[InfolokerController::class, 'store'])->name('lamaran.store')->middleware('auth');

Route::get('/lamaran/{id}/info', [InfolokerController::class, 'info'])->name('lamaran.info')->middleware('auth');


/*--------------End Route  user--------------*/


















Route::resource('/perusahaan', PerusahaanController::class);







Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);



