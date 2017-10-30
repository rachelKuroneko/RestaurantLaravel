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


// We want to replace everything into directing to the controller 
// than connecting through the routes
Route::get('/', 'pageController@getIndex');

Route::post('/submit_contact', 'messagesController@submit');

Route::post('/submit_reservation', 'messagesController@submit_reserve');

Route::get('displayMessages', 'messagesController@getMessages');

Route::get('reservationMessages', 'messagesController@getMessages_reserve');

//Route::get('/contact', 'pagesController@getContact');