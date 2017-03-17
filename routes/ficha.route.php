<?php
Route::group(['middleware'=>'auth','namespace'=>'Ficha'], function() {

	Route::get('ficha','FichaController@index')->name('ficha.index');
	Route::get('ficha-pdf','FichaController@pdf')->name('ficha.pdf');

});

