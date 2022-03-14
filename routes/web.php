<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use GuzzleHttp\Middleware;

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

Route::get('/',function(){
return view('admin.category.add');


});

Route ::group (['middleware'=> 'auth'],function(){
    Route::get('/',function(){
        return view('layout');
        });


        Route::get('layout',function(){
            return view('layout');
            });

});






Route::get('/',[AdminAuthController::class,'index'])->name('view_login');
Route::post('/',[AdminAuthController::class,'login'])->name('login');
Route::get('/category/add',[CategoryController::class,'create'])->name('category.create');
Route::post('/category/add',[CategoryController::class,'store'])->name('category.store');
Route::get('/categories',[CategoryController::class,'index'])->name('category.list');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit' ])->name('category.edit');
Route::post('/categories/edit/{id}', [CategoryController::class, 'update' ])->name('category.update');
Route::post('/category/delete', [CategoryController::class, 'destroy' ])->name('category.delete');
Route::get('/admin/layout',[CategoryController::class,'dashboard'])->name('dashboard');

Route::get('/products',[ProductController::class,'index'])->name('product.list');
Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
Route::post('/product/create',[ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}', [ProductController::class, 'edit' ])->name('product.edit');
Route::post('/product/edit/{id}', [ProductController::class, 'update' ])->name('product.update');
Route::post('/product/delete', [ProductController::class, 'destroy' ])->name('product.delete');
