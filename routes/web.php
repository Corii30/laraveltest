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

Route::get('/usuario',function () {
      return 'Usuario';
});

Route::get('/usuario/{id}', function($id){
      return 'Mostrando detalle del usuario:'.$id;
})->where('id', '\d+');

Route::get('/usuario/nuevo', function(){
      return 'Crear usuario nuevo';
});

Route::get('/usuario/{nombre}/{nickname?}', function($nombre,$nickname = null){
  if ($nickname) {
        return "su nombre es: {$nombre} y su nickname es: {$nickname}";
  }
  else {
    return "su nombre es: {$nombre} y no tiene nickname";
  }

});
