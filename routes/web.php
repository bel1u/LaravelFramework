<?php

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

Route::get('/', function () {
    return view('welcome');
});
//1
Route::get("my-name", function (){
    return "Муниров Андрей Анатольевич";
});
//2
Route::get("my-friend", function (){
    return "Григорьев";
});
//3
Route::get('get-friend/{name}', function ($name){
    return $name;
});
//4
Route::get('my-city/{city}', function ($city){
    return $city;
})->where('city', '[A-za-z]+');
Route::get('level/lvl', function ($lvl){
    if($lvl)
});
//9
Route::get()
