<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\homeCtrl;
use App\Http\Controllers\MajorController;
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

route::get('/about',[homeCtrl::class,'about'])->name('about');
route::get('/services',[homeCtrl::class,'services'])->name('services');
route::get('/contactus',[homeCtrl::class,'contactus'])->name('contactus');
route::get('/team',[homeCtrl::class,'team'])->name('team');
route::get('/',[homeCtrl::class,'home'])->name('home');

// //untuk mengeluarkan list data
// route::get('/anggota',[AnggotaController::class,'index']);
// //untuk mengeluarkan form insert
// route::get('/anggota/create',[AnggotaController::class,'create']);
// //untuk mengeluarkan form update
// route::get('/anggota/{id}/edit',[AnggotaController::class,'index']);
// //untuk menyimpan
// route::post('/anggota',[AnggotaController::class,'index']);
// //untuk edit
// route::put('/anggota/{id}',[AnggotaController::class,'index']);
// //untuk delete
// route::delete('/anggota/{id}',[AnggotaController::class,'index']);

route::resource('student',AnggotaController::class);
route::resource('major',MajorController::class);
