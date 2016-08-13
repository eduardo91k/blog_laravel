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

Route::get('/', [
  'as' => 'front.index',
  'uses' => 'FrontController@index'
  ]);

Route::get('prueba', function () {
    return view('test.welcome2');
});


Route::group(['prefix' => 'prueba'], function () {

    Route::get('view/{id?}', [
      'uses' => 'TestController@view',
      'as' => 'pruebaView'
      ]);

});

Route::get('articles', function () {
    echo "seccion Articulos";
});

Route::get('admin', ['middleware' => 'auth', function () {
    return view('admin.welcome');
}]);



Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
      'uses' => 'UsersController@destroy',
      'as' => 'admin.users.destroy'
      ]);
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', [
      'uses' => 'CategoriesController@destroy',
      'as' => 'admin.categories.destroy'
      ]);
    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy', [
      'uses' => 'TagsController@destroy',
      'as' => 'admin.tags.destroy'
      ]);
    Route::get('home', 'HomeController@index');
    Route::resource('articles', 'ArticlesController');
    Route::get('articles/{id}/destroy', [
      'uses' => 'ArticlesController@destroy',
      'as' => 'admin.articles.destroy'
      ]);
    Route::get('images', [
        'uses' => 'ImagesController@index',
        'as' => 'admin.images.index'
      ]);
});

Route::auth();

//Route::get('/home', 'HomeController@index');
