<?php
Route::group(['middleware'=>'auth','namespace'=>'Pago'], function() {

	Route::get('pagos','PagoController@index')->name('pagos.index');
	Route::get('pagos-pdf','PagoController@pdf')->name('pagos.pdf');

});

