<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});
Route::get('/name', function () {
    return view('name',['name'=>'ali',
'code'=>'123']);
});
Route::get('/checkif', function () {
    return view('checkif',['name'=>'ali',
'code'=>'123']);
});
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/tamrin1', function () {
    return view('tamrin1');
});

Route::get('/Mycontroller/{id}', [Mycontroller::class,'test'] );
?>