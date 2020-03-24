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
//сделать маршрут, который возвращает результат работы callback function;
Route::get('callback', function () {
    return 'Hello world';
});
//сделать маршрут, который возвращает представление;
Route::get('task', function () {
    return view('example.index');
});
//сделать маршрут с получением get параметров;
Route::get('main',function (){
   $name=request('name');
   return view('welcome',compact('name'));
});
Route::get('task/{name}', function ($name) {
    return view('example.index', compact('name'));
});
//сделать маршрут с обязательными параметрами;
Route::get('student/{id}','ListStudentsController@show');
//сделать маршрут с необязательными параметрами.
Route::get('newstudent/{name?}','ListStudentsController@name');


Route::get('/', function () {
    return view('welcome');
});

Route::get('products', 'ProductController@index');
Route::get('news', 'NewsController@get');
Route::get('products/{id}', 'ProductController@show');



