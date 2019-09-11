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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "essa aplicacao é a primeira do curso de lavarel da turma do curso de laravel de 09/09/2019 ";
});

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/helloworld', "TesteController@index");


Route::get('/helloworld/{nome}/{idade?}', "TesteController@index2");


Route::view('/welcome', 'welcome');

Route::redirect('/welcome2','welcome');

Route::get('/index1', "TesteController@index1");


Route::post('/index1', "TesteController@indexPost");

Route::get('/index2/{nome}/{idade?}', "TesteController@index2");