<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Http\Controllers\ProductController;


class Bus{

    private $capacity;

    private $occupiedSeats;

    function __construct($capacity,$occupiedSeats){
        $this->capacity=$capacity;
        $this->occupiedSeats = $occupiedSeats;
    }

    function getCapacity(){
        return $this->capacity;

    }

    function getOccupiedSeats(){
        return $this->occupiedSeats;
    }

    function busCheck($patrons){
        $remaining = ($this->capacity) - ($this->occupiedSeats + $patrons);

        if ($remaining > 0){
            return "All passengers boarded, spare seats = ".$remaining;
        }
        elseif($remaining == 0){
            return "All passengers boarder, bus is full";

        }
        else{
            return "Too many passengers".($remaining*-1)." passengers unable to board";
        }

    }
    

}









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

Route::get('/test', function () {
    return view('test');
});

Route::get('/productinfo', function () {
    return view('layouts.productpagelayout');
})->name('productinfo');;

Route::get('/shop', function () {
    return view('layouts.shoplayout');
})->name('shop');;

Route::get('/home', [ProductController::class, 'search'])->name('home');

Route::post('/testfunction', function(Request $request){
    $onBus = $request->input('onbus');

    $atStop = $request->input('atstop');
    
    $capacity = $request->input('capacity');
    
    
    $bus = new Bus($capacity,$onBus);
    
    $results = $bus->busCheck($atStop);
    
    return view('testfunction', compact('results'));
})->name('busResponse');

Route::get('/urlparams/{query}', function ($data){
    return view("layouts.urlparams{$data}");
});

Route::post('/urlparamstest', function (Request $request){

    $max = config("app.max");
    $page = $request->input("param");

    return view("layouts.urlparams", compact('page','max'));
})->name('paramresponse');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia\Inertia::render('Dashboard');
})->name('dashboard');
