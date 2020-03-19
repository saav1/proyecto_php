<?php
use App\User;

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





Route::get('mypage/{$id}', function ($id) {

    $user = User::where('id', '=>', $id)->firstOrFail();

    return view('mypage', ['user'=>$user]);
});

Route::get('/app', function(){
    return view('layouts/app');
});

Route::get('/child', function(){
    return view('child');
});


//Route::get('/mypage', 'Controller@showProfile');
/**
 *  Para generar la URL que apunte a una acción de un controllador tenemos dos opciones:
 *  $url = action('UserController@showProfile', {$id});
 *  $url = url("user/", [$id])
 * 
 * Ejemplo de uso en una plantilla
 * 
 *  <a href="{{action('FooController@method')}}">
 *      !Aprieta aquí¡
 *  </a>
 * 
 */


/*
Para añadir parámetros a las rutas se indican entre llaves

Route::get('user{id}', function($id){
    return 'User ' . $id;
});

Si queremos indicar que el parámetro es opcional

Route::get('user{id?}', function($id="01"){
    return 'User ' . $id;
});

Para generar un enlace a esta ruta usamos el método 

    $url = url('mypage');


Al construir una vista podemos pasarle parámetros de varias formas

    view('home', ['name' => 'david', 'age' => 18]);
    
*/