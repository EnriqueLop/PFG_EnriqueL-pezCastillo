<?php


Route::get('/', function () {
    return redirect('/login');
});


Route::get('/home', function () {
    if(Auth::check() && Auth::user()->role->id==1){
        return redirect()->route('admin.dashboard');
    }elseif(Auth::check() && Auth::user()->role->id==2){
        return redirect()->route('director.dashboard');
    }elseif(Auth::check() && Auth::user()->role->id==3){
        return redirect()->route('profesor.dashboard');
    }elseif(Auth::check() && Auth::user()->role->id==4){
        return redirect()->route('tutor.dashboard');
    }elseif(Auth::check() && Auth::user()->role->id==5){
        return redirect()->route('comedor.dashboard');
    }else{
        return view('auth.login');
    }

});

Auth::routes();


Route::get('/logout', function () {
  Auth::logout();
  return redirect('/login');
});



Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']],@function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('colegio','ColegioController');
    Route::get('brecha','BrechaController@index')->name('brecha');

});

Route::group(['as'=>'director.','prefix'=>'director','namespace'=>'Director','middleware'=>['auth','director']],@function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('clase','ClaseController');
    Route::resource('colegio','ColegioController');
    Route::resource('rectificar','RectificarController');


});

Route::group(['as'=>'profesor.','prefix'=>'profesor','namespace'=>'Profesor','middleware'=>['auth','profesor']],@function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('pendiente','PendienteController');
    Route::resource('nueva','NuevaController');
    Route::resource('foto','FotoController');
    Route::resource('excursion','ExcursionController');
    Route::resource('examen','ExamenController');
    Route::resource('rectificar','RectificarController');

    Route::resource('alumno','AlumnoController');


});

Route::group(['as'=>'tutor.','prefix'=>'tutor','namespace'=>'Tutor','middleware'=>['auth','tutor']],@function(){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::resource('confirmar','ConfirmarController');
    Route::resource('hijo','HijoController');
    Route::resource('individual','IndividualController');
    Route::resource('informar','InformarController');
    Route::resource('comedor','ComedorController');
    Route::resource('rectificar','RectificarController');

});

Route::group(['as'=>'comedor.','prefix'=>'comedor','namespace'=>'Comedor','middleware'=>['auth','comedor']],@function(){
  Route::get('dashboard','DashboardController@index')->name('dashboard');
  Route::resource('rectificar','RectificarController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/derechos', 'DerechosController@index')->name('derechos');
Route::get('/derechos/rectificar', 'DerechosController@rectificar')->name('rectificar');
Route::get('/derechos/rectificar/correo', 'CorreoController@recibir')->name('correo');
