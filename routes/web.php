<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('admin/product',[ProductsController::class,'index'])->name('product.index');
Route::get('admin/product/create',[ProductsController::class,'create'])->name('product.create');
Route::post('admin/product',[ProductsController::class,'store'])->name('product.store');
Route::get('admin/product/{product}/edit',[ProductsController::class,'edit'])->name('product.edit');
Route::put('admin/product/{product}/update',[ProductsController::class,'update'])->name('product.update');
Route::delete('admin/product/{product}/delete',[ProductsController::class,'delete'])->name('product.delete');
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';