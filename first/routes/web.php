<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mycontroller;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TodoController;

use App\Http\Middleware\Testmiddleware;
use App\Models\Todo;
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
    return view('name', [
        'name' => 'ali',
        'code' => '123'
    ]);
});
Route::get('/checkif', function () {
    return view('checkif', [
        'name' => 'ali',
        'code' => '123'
    ]);
});
Route::get('/layout', function () {
    return view('layout');
});


Route::get('/tamrin1', function () {
    return view('tamrin1');
});

Route::get('/todo/list', [TodoController::class, 'list'])->name('list');;
Route::get('/todo/show/{id}', [TodoController::class, 'show']);
// Route::get('/todo/{id}/delete', [TodoController::class, 'delete']);
Route::get('/todo/{todo}/delete', [TodoController::class, 'del']);
Route::get('/todo/create', function () {
    return view('todo/create');
});
Route::post('/todo/store', [TodoController::class, 'store'])->name('add');
Route::get('/todo/{todo}/edit', function ($todo) {
    $t = Todo::query()->where('id', $todo)->first();
    return view('todo/edit', ['todo' => $t]);
});
Route::post('/todo/update', [TodoController::class, 'update'])->name('update');

// Route::get('/Mycontroller/{id}', [Mycontroller::class,'test'] );
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
