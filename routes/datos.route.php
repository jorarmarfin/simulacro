<?php
Route::group(['middleware'=>'auth','namespace'=>'Datos'], function() {

	Route::get('datos','DatosController@index')->name('datos.index');
	Route::post('datos','DatosController@store')->name('datos.store');

});


