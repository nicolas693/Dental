<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('Paciente', 'Paciente\PacienteController');
Route::get('Paciente/alta/{id}',['as' => 'Paciente.alta', 'uses' => 'Paciente\PacienteController@alta']);
Route::get('Paciente/antecedentes/{id}',['as' => 'Paciente.ante', 'uses' => 'Paciente\PacienteController@ante']);
Route::get('Paciente/antecedentes/{id}/crearOdo',['as' => 'Paciente.crearOdo', 'uses' => 'Paciente\PacienteController@crearOdo']);

Route::resource('Ficha','Ficha\FichaController',['only' => ['store','show','index','edit','update']]);


route::get('Ficha/{id}/create',['as'=>'Ficha.ficha', 'uses' => 'Ficha\FichaController@ficha' ]);

route::get('Ficha/{id}/Odontograma/{id2}',['as'=> 'Odontograma.show' , 'uses' => 'OdontogramaController@show']);
route::post('Odontograma',['as'=> 'Odontograma.store' , 'uses' => 'OdontogramaController@store']);
route::put('Odontograma/editar/{id}',['as'=> 'Odontograma.editarProblema' , 'uses' => 'OdontogramaController@editarProblema']);
route::get('Ficha/{id}/Odontograma',['as'=> 'Odontograma.index' , 'uses' => 'OdontogramaController@index']);
