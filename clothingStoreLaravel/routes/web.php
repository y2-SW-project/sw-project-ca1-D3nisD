<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\ApparelController as UserApparelController;
use App\Http\Controllers\Admin\ApparelController as AdminApparelController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');

Route::get('/', [PageController::class,'welcome'])->name('welcome');
Route::get('/about', [PageController::class,'about'])->name('about');


Route::get('/user/apparels/',[UserApparelController::class,'index'])->name('user.apparels.index');
Route::get('/user/apparels/{id}',[UserApparelController::class,'show'])->name('user.apparels.show');

Route::get('/admin/apparels/', [AdminApparelController::class, 'index'])->name('admin.apparels.index');
Route::get('/admin/apparels/create', [AdminApparelController::class, 'create'])->name('admin.apparels.create');
Route::get('/admin/apparels/{id}', [AdminApparelController::class, 'show'])->name('admin.apparels.show');
Route::post('/admin/apparels/store', [AdminApparelController::class, 'store'])->name('admin.apparels.store');
Route::get('/admin/apparels/{id}/edit', [AdminApparelController::class, 'edit'])->name('admin.apparels.edit');
Route::put('/admin/apparels/{id}', [AdminApparelController::class, 'update'])->name('admin.apparels.update');
Route::delete('/admin/apparels/{id}', [AdminApparelController::class, 'destroy'])->name('admin.apparels.destroy');

