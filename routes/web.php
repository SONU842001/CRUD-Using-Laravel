<?php

use App\Http\Controllers\ContactController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/contact',[ContactController::class,'index']);
Route::get('/contact/create',[ContactController::class,'created'])->name('contact.index');
Route::post('/contact',[ContactController::class,'store'])->name('contact.store');
Route::get('/contact/{id}/edit',[ContactController::class,'edit'])->name('contact.edit');
Route::post('/contact/{id}/store',[ContactController::class,'update'])->name('contact.update');
Route::get('/contact/{id}/view',[ContactController::class,'view'])->name('contact.view');
Route::post('/contact/{id}/delete',[ContactController::class,'delete'])->name('contact.delete');
