<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\ProductController;


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

Route::get('/shop', function () {
    return view('layouts.shoplayout');
})->name('shop');;

Route::get('/shop', [ProductController::class, 'showInShop'])->name('shop');

Route::get('/home', [ProductController::class, 'search'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
