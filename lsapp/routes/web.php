<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/Hello', function () {
    return view('welcome');
    return "<h1>Hello  World</h1>";
});
Route::get('/users/{id}',function($id){
    return 'This is user '. $id;
 });
*/
Route::get('/','PagesController@index');
Route::get('about','pagesController@about');
Route::get('/services','pagesController@services');

Route::resource('posts','PostsController');