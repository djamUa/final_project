<?php
Route::get('/', 'ContentsController@home')->name('home');
Route::get('/client', 'ClientController@index')->name('client');
Route::get('/reservations', 'ReservationsController@index')->name('reservations');

?>
