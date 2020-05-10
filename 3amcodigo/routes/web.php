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
    return view('main');
});

//--------------------ALGORITMOS------------------------------------//

Route::view('/algoritmos', 'algoritmos/algoritmos');

//--------------------EFICIENCIA------------------------------------//
Route::view('/algoritmos/eficiencia', 'algoritmos/eficiencia');

//COTAS
Route::view('/algoritmos/eficiencia/cotas', 'algoritmos/cotas');

//CÁLCULO
Route::view('/algoritmos/eficiencia/calculo', 'algoritmos/calculo');


//---------------------ESTRATEGIAS-----------------------------------//
Route::view('/algoritmos/estrategia/', 'algoritmos/estrategia');

//VUELTA ATŔAS
Route::view('/algoritmos/estrategia/vuelta', 'algoritmos/vuelta');

//DIVIDE Y VENCERÁS
Route::view('/algoritmos/estrategia/divide', 'algoritmos/divide');




Route::view('/login', 'login');

Route::view('/c++', 'c++/c++');


