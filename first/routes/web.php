<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\Todocontroller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestController\q1;

use App\Http\Middleware\Testmiddleware;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/Mycontroller/{id}', [Mycontroller::class,'test'] );
  Route::get('/testcontroller/{id}', [TestController::class,'q1'] );
  
  Route::get('/testcontroller', [TestController::class,'q'] );
 Route::get('/TodoController', [TodoController::class,'q1'] );

Route::controller(MyController::class)->group(function () {
    Route::get('/Mycontroller/{id}', 'test');
    Route::get('/Mycontroller', 'test2');
    Route::get('/Mycontroller/test3', 'test3');
});

Route::get('/copy', function () {
    return view('copy');
});
Route::get('/test', function () {
    return view('test');
})->middleware('Testmiddleware');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
?>