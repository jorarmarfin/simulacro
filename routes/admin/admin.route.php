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
	Route::post('pago-create','PagosController@pagocreate')->name('admin.pagos.create');

});
/**
 * Fotos
 */
Route::group(['namespace'=>'Fotos'], function() {
	Route::get('fotos','FotosController@index')->name('admin.fotos.index');

});

/**
 * Aulas
 */
Route::resource('aulas', 'Aulas\AulasController',['names'=>'admin.aulas']);

Route::get('lista-aulas', 'Aulas\AulasController@lista_aulas')->name('admin.lista.aulas');
Route::get('lista-aulas-activas', 'Aulas\AulasController@lista_aulas_activas')->name('admin.lista.aulas.activas');
Route::get('activar-aula/{aula}', 'Aulas\AulasController@activar')->name('admin.activar.aula');
Route::post('activar-aulas', 'Aulas\AulasController@activaraulas')->name('admin.activar.aulas');
Route::post('habilitar-aulas', 'Aulas\AulasController@habilitaraulas')->name('admin.habilitar.aulas');
Route::post('desactivar-aulas', 'Aulas\AulasController@desactivaraulas')->name('admin.desactivar.aulas');
Route::get('delete-aulas/{aulas}', 'Aulas\AulasController@delete')->name('admin.delete.aulas');
Route::get('aulas-activas', 'Aulas\AulasController@activas')->name('admin.activas.aulas');
Route::get('ordenar-aulas', 'Aulas\AulasController@ordenar')->name('admin.ordenar.aulas');
Route::post('disponible-aulas', 'Aulas\AulasController@disponible')->name('admin.disponible.aulas');

/**
 * Secuencia
 */
Route::group(['namespace'=>'Configuracion'], function() {
	Route::resource('secuencia','SecuenciaController',['names'=>'admin.secuencia','only'=>['index','store','edit','update']]);
	Route::get('secuencia-delete/{secuencia}','SecuenciaController@delete')->name('admin.secuencia.delete');
});