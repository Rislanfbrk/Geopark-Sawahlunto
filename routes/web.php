<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\contriController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\logoutController;
use App\Http\Controllers\registerController;
use App\Http\Middleware\contri;
use App\Models\berita;
use App\Models\event;
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

// Public
Route::get('/', [homeController::class, 'home'])->name('home');
Route::get('/dest', [homeController::class, 'destinasi'])->name('publicDestinasi');
Route::get('dest/detail/{id}', [homeController::class, 'detail'])->name('detailDestinasi');
Route::get('/dest/filter', [homeController::class, 'filter'])->name('filterDestinasi');
Route::get('/eventku', [homeController::class, 'berita'])->name('publicBerita');
Route::get('berita/detail/{id}', [homeController::class, 'detailBerita'])->name('detailBerita');
Route::get('/berita/filter', [homeController::class, 'filterBerita'])->name('filterBerita');
Route::get('/team', [homeController::class, 'team'])->name('team');


// Proses Registrasi
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::get('/register', [registerController::class, 'register'])->name('register');
Route::post('/register/proses', [registerController::class, 'prosesRegister'])->name('prosesRegister');

// Proses Login dengan admin atau contri
Route::post('/login/proses', [loginController::class, 'prosesLogin'])->name('prosesLogin');
route::get('logout', [logoutController::class, 'logout'])->name('logout');

// Admin 
Route::get('admin', [homeController::class, 'admin'])->name('admin')->middleware('auth', 'admin');
// Destinasi
Route::get('admin/destinasi', [adminController::class, 'index'])->name('destinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/tambah', [adminController::class, 'tambahDestinasi'])->name('tambahDestinasi')->middleware('auth', 'admin');
Route::post('admin/destinasi/store', [adminController::class, 'store'])->name('storeDestinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/delete/{id}', [adminController::class, 'delete'])->name('deleteDestinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/edit/{id}', [adminController::class, 'edit'])->name('editDestinasi')->middleware('auth', 'admin');
Route::post('admin/destinasi/update/{id}', [adminController::class, 'update'])->name('updateDestinasi')->middleware('auth', 'admin');
Route::delete('admin/destinasi/delete/{id}', [adminController::class, 'delete'])->name('deleteDestinasi')->middleware('auth', 'admin');
Route::get('admin/destinasi/search', [adminController::class, 'search'])->name('searchDestinasi');

// Berita
Route::get('admin/berita', [BeritaController::class, 'indexBerita'])->name('berita')->middleware('auth', 'admin');
Route::get('admin/berita/tambah', [BeritaController::class, 'tambahBerita'])->name('tambahBerita')->middleware('auth', 'admin');
Route::post('admin/berita/store', [BeritaController::class, 'storeBerita'])->name('storeBerita')->middleware('auth', 'admin');
Route::get('admin/berita/edit/{id}', [BeritaController::class, 'editBerita'])->name('editBerita')->middleware('auth', 'admin');
Route::get('admin/berita/delete/{id}', [BeritaController::class, 'deleteBerita'])->name('deleteBerita')->middleware('auth', 'admin');
Route::post('admin/berita/update/{id}', [BeritaController::class, 'updateBerita'])->name('updateBerita')->middleware('auth', 'admin');
Route::delete('admin/berita/delete/{id}', [BeritaController::class, 'deleteBerita'])->name('deleteBerita')->middleware('auth', 'admin');
Route::get('admin/berita/search', [BeritaController::class, 'searchBerita'])->name('searchBerita');

//Contri 
Route::get('contri', [homeController::class, 'contri'])->name('contri')->middleware('auth', 'contri');

//Destinasi 
Route::get('contri/destinasi', [contriController::class, 'index'])->name('destinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/tambah', [contriController::class, 'tambahDestinasi'])->name('tambahDestinasic')->middleware('auth', 'contri');
Route::post('contri/destinasi/store', [contriController::class, 'store'])->name('storeDestinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/delete/{id}', [contriController::class, 'delete'])->name('deleteDestinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/edit/{id}', [contriController::class, 'edit'])->name('editDestinasic')->middleware('auth', 'contri');
Route::post('contri/destinasi/update/{id}', [contriController::class, 'update'])->name('updateDestinasic')->middleware('auth', 'contri');
Route::delete('contri/destinasi/delete/{id}', [contriController::class, 'delete'])->name('deleteDestinasic')->middleware('auth', 'contri');
Route::get('contri/destinasi/search', [contriController::class, 'search'])->name('searchDestinasic');