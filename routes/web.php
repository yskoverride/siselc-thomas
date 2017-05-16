<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. 
|
*/
Route::group(['middleware' => ['web']], function () {
    
    Route::get('/', function () {
        return redirect('/inicio');
    });  
   
    Route::group(['middleware' => ['isVerified']], function () { 
        
        Route::get('/inicio',  function () {            
            return view('users.inicio');
        })->name('inicio')->middleware('auth');                  
        
        //------Usuario configuracion basica---------------
        Route::get('/perfil', ['as' => 'perfil', 'uses' =>'UsuarioConfigController@perfil']);
        Route::patch('/perfil', ['as' => 'updatePerfil', 'uses' =>'UsuarioConfigController@updatePerfil']);
        Route::get('/password', ['as' => 'password', 'uses' =>'UsuarioConfigController@password']);
        Route::patch('/password', ['as' => 'updatePassword', 'uses' =>'UsuarioConfigController@updatePassword']);
        
        //------Usuario HV Actualizacion---------------
        Route::get('/datosPersonales', ['as' => 'datosPersonales', 'uses' =>'UsuarioHvController@datosPersonales']);
        Route::patch('/datosPersonales', ['as' => 'updateDatosPersonales', 'uses' =>'UsuarioHvController@updateDatosPersonales']);
        Route::get('/experiencia', ['as' => 'experiencia', 'uses' =>'UsuarioHvController@experiencia']);
        Route::patch('/experiencia', ['as' => 'updateExperiencia', 'uses' =>'UsuarioHvController@updateExperiencia']);
        Route::get('/experienciaSIS', ['as' => 'experienciaSIS', 'uses' =>'UsuarioHvController@experienciaSIS']);
        Route::patch('/experienciaSIS', ['as' => 'updateExperienciaSIS', 'uses' =>'UsuarioHvController@updateExperienciaSIS']);  
        Route::get('/referencias', ['as' => 'referencias', 'uses' =>'UsuarioHvController@referencias']);
        Route::patch('/referencias', ['as' => 'updateReferencias', 'uses' =>'UsuarioHvController@updateReferencias']); 
        
        //------Usuario Postulacion Vacantes---------------
        Route::get('/pruebasVigentes', ['as' => 'pruebasVigentes', 'uses' =>'UsuarioPostulacionController@pruebasVigentes']);
        Route::get('/pruebasVigentes/{vacante}/vista', ['as' => 'descripcionCargoVista', 'uses' =>'UsuarioPostulacionController@descripcionCargoVista']);
        Route::get('/pruebasVigentes/{vacante}/aplicar', ['as' => 'aplicarCargo', 'uses' =>'UsuarioPostulacionController@aplicarCargo']);
        Route::get('/estadoPostulaciones', ['as' => 'estadoPostulaciones', 'uses' =>'UsuarioPostulacionController@estadoPostulaciones']);
        Route::get('/confirmarPostulacion/{confirmacion}', ['as' => 'confirmarPostulacion', 'uses' =>'UsuarioPostulacionController@confirmarPostulacion']);
        Route::get('/examen/{postulacion}', ['as' => 'examen', 'uses' =>'UsuarioPostulacionController@examen']);
        Route::post('/estadoPostulaciones', ['as' => 'abandonarPostulacion', 'uses' =>'UsuarioPostulacionController@abandonarPostulacion']);
        Route::post('/calificar', ['as' => 'calificar', 'uses' =>'UsuarioPostulacionController@calificar']);
        
    });
    
    //------Administrador Login---------------
    Route::group(['middleware' => ['admin_guest']], function() {
        Route::get('/admin_registro', ['as' => 'registroView', 'uses' =>'AdminAuth\RegisterController@showRegistrationForm']);
        Route::post('/admin_registro', ['as' => 'registroAdmin', 'uses' =>'AdminAuth\RegisterController@register']);
        Route::get('/admin_login', ['as' => 'loginView', 'uses' =>'AdminAuth\LoginController@showLoginForm']);
        Route::post('/admin_login', ['as' => 'adminLogin', 'uses' =>'AdminAuth\LoginController@login']);                                  
    });        
    Route::group(['middleware' => ['admin_auth']], function(){
        Route::post('/admin_logout', ['as' => 'adminLogout', 'uses' =>'AdminAuth\LoginController@logout']);      
        Route::get('/admin', function(){
          return view('admin.inicio');
        }); 
    });     
  
});

 

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

