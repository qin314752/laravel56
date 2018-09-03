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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/','UserController@index');
// Route::get('/', function () {
//  echo 1;
// })->middleware('token');
// Route::get('/', function () {
//     echo 1;
// })->middleware('web');

// Route::group(['middleware' => ['web']], function () {
//     echo 2;
//     //
// });
// Route::group(['middleware'=>['blog']],function(){
//     Route::get('/', function () {
//         return view('welcome', ['website' => 'Laravel']);
//     });

//     Route::view('/view', 'welcome', ['website' => 'Laravel学院']);
// });
// Route::get('user/{id}', 'UserController@show');
// Route::resources([
//     'posts/show' => 'PostController'
//     'posts/edit' => 'PostController'
// ]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
