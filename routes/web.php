<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' =>'auth'], function(){
    Route::group(['prefix'=>'cidades', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'cidades',           'uses'=>'CidadesController@index'  ]);
        Route::get('create', ['as'=>'cidades.create',    'uses'=>'CidadesController@create' ]);
        Route::get('{id}/destroy', ['as'=>'cidades.destroy',   'uses'=>'CidadesController@destroy']);
        Route::get('{id}/edit', ['as'=>'cidades.edit',      'uses'=>'CidadesController@edit'   ]);
        Route::put('{id}/update', ['as'=>'cidades.update',    'uses'=>'CidadesController@update' ]);
        Route::post('store', ['as'=>'cidades.store',     'uses'=>'CidadesController@store'  ]);
    });

    Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'clientes',           'uses'=>'ClientesController@index'  ]);
        Route::get('create', ['as'=>'clientes.create',    'uses'=>'ClientesController@create' ]);
        Route::get('{id}/destroy', ['as'=>'clientes.destroy',   'uses'=>'ClientesController@destroy']);
        Route::get('{id}/edit', ['as'=>'clientes.edit',      'uses'=>'ClientesController@edit'   ]);
        Route::put('{id}/update', ['as'=>'clientes.update',    'uses'=>'ClientesController@update' ]);
        Route::post('store', ['as'=>'clientes.store',     'uses'=>'ClientesController@store'  ]);
    });

    Route::group(['prefix'=>'tipoVeiculos', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'tipoVeiculos',           'uses'=>'TipoVeiculosController@index'  ]);
        Route::get('create', ['as'=>'tipoVeiculos.create',    'uses'=>'TipoVeiculosController@create' ]);
        Route::get('{id}/destroy', ['as'=>'tipoVeiculos.destroy',   'uses'=>'TipoVeiculosController@destroy']);
        Route::get('{id}/edit', ['as'=>'tipoVeiculos.edit',      'uses'=>'TipoVeiculosController@edit'   ]);
        Route::put('{id}/update', ['as'=>'tipoVeiculos.update',    'uses'=>'TipoVeiculosController@update' ]);
        Route::post('store', ['as'=>'tipoVeiculos.store',     'uses'=>'TipoVeiculosController@store'  ]);
    });

    Route::group(['prefix'=>'veiculos', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'veiculos',           'uses'=>'VeiculosController@index'  ]);
        Route::get('create', ['as'=>'veiculos.create',    'uses'=>'VeiculosController@create' ]);
        Route::get('{id}/destroy', ['as'=>'veiculos.destroy',   'uses'=>'VeiculosController@destroy']);
        Route::get('{id}/edit', ['as'=>'veiculos.edit',      'uses'=>'VeiculosController@edit'   ]);
        Route::put('{id}/update', ['as'=>'veiculos.update',    'uses'=>'VeiculosController@update' ]);
        Route::post('store', ['as'=>'veiculos.store',     'uses'=>'VeiculosController@store'  ]);
    });

    Route::group(['prefix'=>'monitoramentos', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'monitoramentos',           'uses'=>'MonitoramentosController@index'  ]);
        Route::get('create', ['as'=>'monitoramentos.create',    'uses'=>'MonitoramentosController@create' ]);
        Route::get('{id}/destroy', ['as'=>'monitoramentos.destroy',   'uses'=>'MonitoramentosController@destroy']);
        Route::get('{id}/edit', ['as'=>'monitoramentos.edit',      'uses'=>'MonitoramentosController@edit'   ]);
        Route::put('{id}/update', ['as'=>'monitoramentos.update',    'uses'=>'MonitoramentosController@update' ]);
        Route::post('store', ['as'=>'monitoramentos.store',     'uses'=>'MonitoramentosController@store'  ]);
    });

    Route::group(['prefix'=>'anomalias', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'anomalias',           'uses'=>'AnomaliasController@index'  ]);
        Route::get('create', ['as'=>'anomalias.create',    'uses'=>'AnomaliasController@create' ]);
        Route::get('{id}/destroy', ['as'=>'anomalias.destroy',   'uses'=>'AnomaliasController@destroy']);
        Route::get('{id}/edit', ['as'=>'anomalias.edit',      'uses'=>'AnomaliasController@edit'   ]);
        Route::put('{id}/update', ['as'=>'anomalias.update',    'uses'=>'AnomaliasController@update' ]);
        Route::post('store', ['as'=>'anomalias.store',     'uses'=>'AnomaliasController@store'  ]);
    });

    Route::group(['prefix'=>'tipoAnomalias', 'where'=>['id'=>'[0-9]+']], function () {
        Route::any('', ['as'=>'tipoanomalias',           'uses'=>'TipoAnomaliasController@index'  ]);
        Route::get('create', ['as'=>'tipoanomalias.create',    'uses'=>'TipoAnomaliasController@create' ]);
        Route::get('{id}/destroy', ['as'=>'tipoanomalias.destroy',   'uses'=>'TipoAnomaliasController@destroy']);
        Route::get('{id}/edit', ['as'=>'tipoanomalias.edit',      'uses'=>'TipoAnomaliasController@edit'   ]);
        Route::put('{id}/update', ['as'=>'tipoanomalias.update',    'uses'=>'TipoAnomaliasController@update' ]);
        Route::post('store', ['as'=>'tipoanomalias.store',     'uses'=>'TipoAnomaliasController@store'  ]);
    });

    Route::get('pdf', 'PdfController@geraPdf');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

?>
