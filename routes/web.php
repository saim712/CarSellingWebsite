<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\web_controller;
use App\Models\Customer;
use App\Models\Cardetails;



Route::get('/', function () {
    return view('aboutus');
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



Route::post('/auth',[web_controller::class,'auth'])->name('auth');



Route::post('/storedb',[web_controller::class,'storedb'])->name('storedb');
// name is used like href ={{route('storedb')}}


// Function to remoce session
Route::get('/logout',function(){
    if (session()->has('username')) {
        session()->pull('username');
    }
    return redirect('/login');
});


// Route::get('/car',function(){
//     if (session()->has('username')) {
//         return view('carDetails');
//     }else{
//         return view('signup');
//     }
// });






Route::post('/uploaddt',[web_controller::class,'uploaddt'])->name('uploaddt');







// this function is to redirect user from about us page to buy page but on first attempt it will take us to home page
Route::get('/buy',function(){
    if(session()->has('username')){
        return view('buy');
    }else{
        return redirect('login/data');  
    }
});

// custim route for buy page
Route::get('/buy/data',[web_controller::class,'getbuydata']);

// this function is to redirect user from about us page to sell page but on first attempt it will take us to home page
Route::get('/sell',function(){
    if(session()->has('username')){
        return view('carDetails');
    }else{
        return view('login');  
    }
});


