<?php
Route::group(['middleware'=>'auth','namespace'=>'Ficha'], function() {

	Route::get('ficha','FichaController@index')->name('ficha.index');
	Route::post('ficha','FichaController@store')->name('ficha.store');

});

