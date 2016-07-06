<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', function () {
    echo "seccion Articulos";
});

Route::get('articles/{name}', function ($name) {
    echo "seccion Articulos -> nombre: ". $name;
});

Route::group(['prefix' => 'cosas'], function () {

    Route::get('view/{cosas?}', function ($cosas = "vacio") {
        echo $cosas;
    });
});
