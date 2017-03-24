<?php

Route::resource('users', 'UsersController',['names'=>'admin.users']);

/**
 * Postulantes
 */
Route::group(['namespace'=>'Postulantes'], function() {
	Route::get('postulantes','PostulantesController@index')->name('admin.pos.index');
	Route::get('postulantes-lista','PostulantesController@lista')->name('admin.pos.list');

});
/**
 * Pagos
 */
Route::group(['namespace'=>'Pagos'], function() {
	Route::resource('pagos','PagosController',['names'=>'admin.pagos','only'=>['index','store']]);
	Route::get('cartera','PagosController@create')->name('admin.cartera.create');
	Route::get('download','PagosController@descarga')->name('admin.cartera.download');
	Route::get('pagos-lista','PagosController@lista')->name('admin.pagos.list');

});
/**
 * Fotos
 */
Route::group(['namespace'=>'Fotos'], function() {
	Route::get('fotos','FotosController@index')->name('admin.fotos.index');

});

