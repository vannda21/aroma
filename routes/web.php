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


// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/create', function () {
    return view('create');
});


Route::post('/insert','Connect@add');

Route::get('/update/{id}','Connect@update');

Route::post('/edit/{id}','Connect@edit');

Route::post('/read/{id}','Connect@read');

Route::get('/delete/{id}','Connect@delete');

Route::get('/', function () {
    return view('form');
});
Route::get('/f', function () {
    return view('f');
});
Route::get('/delivery', function () {
    return view('delivery');
});
Route::get('/us', function () {
    return view('about_us');
});
Route::get('/join', function () {
    return view('join_aroma');
});


Route::get('/home','Connect@home');
Route::get('/drinkIce','Connect@drinkIce');
Route::get('/drinkHot','Connect@drinkHot');
Route::get('/drinkFrappe','Connect@drinkFrappe');


//menu
Route::get('/menu','Connect@menu');
Route::get('/ice','Connect@ice');
Route::get('/hot','Connect@hot');
Route::get('/frappe','Connect@frappe');
Route::get('/frae','Connect@frappe');