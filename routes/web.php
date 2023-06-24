<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\UsersController;
// use App\Http\Controllers\Admin\BannerController;


//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\BannerController;

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

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//route cicil
Route::get('/structure',[HomeController::class,'structure'])->name('structure');
Route::get('/informasisetiapsaat',[HomeController::class,'informasisetiapsaat'])->name('informasisetiapsaat');
Route::get('/layanan',[HomeController::class,'layanan'])->name('layanan');
Route::get('/informasiberkala',[HomeController::class,'informasiberkala'])->name('informasiberkala');
Route::get('/pageberita',[HomeController::class,'pageberita'])->name('pageberita');
Route::get('/pagehukum',[HomeController::class,'pagehukum'])->name('pagehukum');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/visimisi',[HomeController::class,'visimisi'])->name('visimisi');



Route::get('/agenda',[AgendaController::class, 'index'])->name('agenda');
Route::get('/agenda/{agenda:slug}',[AgendaController::class, 'show'])->name('agenda.show');
Route::get('banner', [BannerController::class, 'index'])->name('banner');
Route::get('informasi', [informasiController::class, 'index'])->name('informasi');

//Artikel
Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');
Route::get('/artikel/search',[ArtikelController::class,'search'])->name('artikel.search');

Route::get('/artikel/{artikel:slug}',[ArtikelController::class,'show'])->name('artikel.show');

//Pengumuman
Route::get('/pengumuman',[PengumumanController::class,'index'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:slug}',[PengumumanController::class,'show'])->name('pengumuman.show');

//Admin
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
	Route::name('admin.')->group(function(){

		Route::get('/',[AdminController::class,'index'])->name('index');
		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');

		//Resource Controller
		Route::resource('informasi', 'informasiController');
		Route::resource('users','UsersController');
		Route::resource('pengumuman','PengumumanController');
		Route::resource('agenda','AgendaController');
		Route::resource('artikel','ArtikelController');
		Route::resource('kategori-artikel','KategoriArtikelController');
		Route::resource('banner', 'BannerController');
	});
});