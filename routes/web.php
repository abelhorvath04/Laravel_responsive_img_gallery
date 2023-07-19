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
    $images = [
        'Title 1.jpg'=>'Title 1',
        'Title 2.jpg'=>'Title 2',
        'Title 3.jpg'=>'Title 3',
        'Title 4.jpg'=>'Title 4',
        'Title 5.jpg'=>'Title 5',
        'Title 6.jpg'=>'Title 6',
        'Title 7.jpg'=>'Title 7',
        'Title 8.jpg'=>'Title 8',
        'Title 9.jpg'=>'Title 9',
    ];

    return view('welcome', [
        'images'=>$images
    ]);
});