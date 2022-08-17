<?php

use App\Models\User;
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
    // dd(User::all()->toArray());
    // return view('welcome');
    return '<a href="/test" >test</a>';
});

Route::get('/test', function () {
    return '<a href="/" >home</a>';
});
