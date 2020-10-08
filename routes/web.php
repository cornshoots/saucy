<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\ProductController;

use App\Http\Controllers\ProductFormController;


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

Route::get('/productinfo', function () {
    return view('layouts.productpagelayout');
})->name('productinfo');;

Route::get('/shop', [ProductController::class, 'showInShop'])->name('shop');

Route::get('/home', [ProductController::class, 'search'])->name('home');

Route::get('/products/create', [ProductFormController::class, 'create'])->name('products.create');

Route::post('products', [ProductFormController::class, 'store'])->name('products.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/products/{productid}', [ProductController::class, 'showProduct'])->name('product.show'); 
