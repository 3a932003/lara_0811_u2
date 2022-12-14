<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//回傳view
/*Route::get('/', function () {
    return view('welcome');
});*/
//回傳字串
Route::get('/', function () {
    return 'welcome';
});
Route::get('r2', function() {
    return view('welcome');
});
Route::get('r1', function() {
    return redirect('r2');
});
Route::get('hello/{name?}', function ($name = 'Everybody'){
    return 'Hello, '.$name;
})->name('hello.index');
Route::get('aaa', function (){
    return 'aaa';
});
Route::get('dashboard', function (){
    return 'dashboard';
});
Route::group(['prefix' => 'admin'], function(){
    Route::get('dashboard', function (){
        return 'admin dashboard';
    });
});
Route::get('home', [HomeController::class, 'index'])->name('home.index');
