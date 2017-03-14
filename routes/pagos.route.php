<?php
Route::group(['middleware'=>'auth','namespace'=>'Pago'], function() {

	Route::get('pagos','PagoController@index')->name('pagos.index');
	Route::post('pagos','PagoController@store')->name('pagos.store');

});

