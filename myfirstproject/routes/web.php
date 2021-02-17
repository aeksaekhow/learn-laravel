<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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
    //return 'Hello World';
    //return [ 'foo' => 'bar' ];
});

Route::get('/greeting', function() {
    return view('greeting', [
        'name' => request('name')
    ]);
});

Route::get('/posts/{post}', [Controllers\PostsController::class, 'show']);