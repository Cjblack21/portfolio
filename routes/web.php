<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('/about', function(){
    return view ('about');
});
Route::get('/product', function(){
    return view ('product', ['name' => 'nike']);
});

Route::get ('name/{name}' , function($name){
    return 'my name is '. $name;
});

Route::get ('portfolio' , function(){
  return view ('portfolio');
});