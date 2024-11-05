<?php

use Illuminate\Http\Request;
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
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return redirect('tasks');
 })->name('pages/index');
 Route::get('tasks',[PageController::class,'index']);
 Route::get('/create',[PageController::class,'create'])->name('pages/create');
 Route::get('/{id}/edit',[PageController::class,'edit'])->name('pages/edit');
 Route::post('tasks',[PageController::class,'store'])->name('pages/store');
 Route::put('tasks/{id}',[PageController::class,'update'])->name('pages/update');
 Route::get('tasks/{id}',[PageController::class,'show'])->name('pages/show');
 Route::delete('tasks/{id}',[PageController::class,'destroy'])->name('pages/destroy');
 