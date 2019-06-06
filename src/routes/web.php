<?php
Route::group(['namespace'=> 'Bitfumes\Contact\Http\Controllers'], function(){

Route::get('contact', 'ContactController@index');

Route::post('contact', 'ContactController@send')->name('contact');

});