<?php

use App\Http\Controllers\Layout;
use App\Http\Controllers\Member;
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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[Layout::class, 'home']);

Route::controller(Layout::class) ->group(function(){
    Route::get('/layout/home', 'home');
    Route::get('/layout/index', 'index');
});


Route::controller(Member::class)->group(function() {
    Route::get('/member/index', 'index');
});
