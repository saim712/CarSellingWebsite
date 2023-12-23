<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\web_controller;
use App\Models\Customer;
use App\Models\Cardetails;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){
    if (session()->has('username')) {
        return view('home');
    }
    return view('login');
});

Route::get('/reg',function(){
    if (session()->has('username')) {
        return view('home');
    }
    return view('signup');
});

// Route::get('/signup',function(){
//     return view('signup');
// });

// Route::get('/home',function(){
//     return view('home');
// });

Route::post('/auth',[web_controller::class,'auth'])->name('auth');

// Route::get('/modl',function(){
//     $data=Customer::all();
//     print_r($data->toArray());
// });


Route::post('/storedb',[web_controller::class,'storedb'])->name('storedb');
// name is used like href ={{route('storedb')}}
// Route::get('/data/view',[web_controller::class,'view']);

// Function to remoce session
Route::get('/logout',function(){
    if (session()->has('username')) {
        session()->pull('username');
    }
    return redirect('/login');
});



// Route::get('/check',function(){
//     return view('carDetails');
// });
Route::get('/car',function(){
    return view('carDetails');
});

Route::post('/uploaddt',[web_controller::class,'uploaddt'])->name('uploaddt');