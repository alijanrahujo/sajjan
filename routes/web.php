<?php

use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about',function(){
//     return 'Welcome to About us';
// });

// Route::get('/about',function(){
//     return view('pages.about');
// });


// Route::get('/about/{name}',function($abc){

//     // return view('pages.about',['abc'=>$abc]);
//     return view('pages.about',compact('abc'));
// });


// Route::get('/about/{name?}',function($abc = ''){
//     // return view('pages.about',['abc'=>$abc]);
//     return view('pages.about',compact('abc'));
// });


Route::get('home',[PagesController::class,'index']);

Route::get('pages/about/name/{name?}',[PagesController::class,'about'])->name('about');

Route::post('contact',[PagesController::class,'contact'])->name('contact');


Route::resource('task',TaskController::class);
