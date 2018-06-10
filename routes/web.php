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


Route::get('/hola/{num}', function () {
    return view('hola');
});

//Practica en clase
Route::get('/rectangulo/b/{base}/h/{altura}', function ($base,$altura) {
    return view('rectangulo',['base' => $base],['altura' => $altura]);
});

//Ejercicios
Route::get('/operativas/num1/{num1}/num2/{num2}', function ($num1,$num2) {
    return view('operativas',['num1' => $num1],['num2' => $num2]);
});

Route::get('/pitagoras/a/{a}/b/{b}', function ($a,$b) {
    return view('pitagoras',['a' => $a],['b' => $b]);
});

Route::get('/formulagen/a/{a}/b/{b}/c/{c}', function ($a,$b,$c) {
    return view('formulagen',['a' => $a,'b' => $b,'c' => $c]);
});

Route::get('/listas/num/{num}', function ($num) {
    return view('listas',['num'=>$num]);
});


Route::get('/tablas/num/{num}', function ($num) {
    return view('tablas',['num'=>$num]);
});

//Clase 3
Route::get('/operaciones', function () {
    return view('operaciones');
});

Route::post ('/operativas','operativasController@suma');

//Clase 4
Route::get('/mayo09', function () {
    return view('mayo09');
});

Route::post ('/mayo09','mayo09Controller@mayo09');

//Operativas sumas
Route::get('/formaoperativas', function () {
    return view('formaoperativas');
});

Route::post ('/operaritme','operaritmeController@operaritme');


//Formula general
Route::get('/teoremaform', function () {
    return view('teoremaform');
});

Route::post ('/teoremaop','teoremaController@teoremaop');

//Pitagoras
Route::get('/formpitagoras', function () {
    return view('formpitagoras');
});

Route::post ('/teoremaopit','teoremapitController@teoremaopit');

//Lista de numeros
Route::get('/formazar', function () {
    return view('formazar');
});

Route::post ('/listadenums','listasController@listadenums');


//Clase 4
Route::get('/layout', function () {
    return view('layout');
});

Route::get('/primero', function () {
    return view('primero');
}); 


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Clase 5
//Nivel 1
//Binomio cuadrado
Route::get('/formbinomio', function () {
    return view('formbinomio');
});

Route::post ('/binomiocuadrado','binomioController@binomiocuadrado');

//Formula General
Route::get('/formformulageneral', function () {
    return view('formformulageneral');
});

Route::post ('/formulageneral','formulageneralController@formulageneral');

//Binomio al cubo
Route::get('/formbinomioalcubo', function () {
    return view('formbinomioalcubo');
});

Route::post ('/binomioalcubo','binomiocuboController@binomioalcubo');

//Volumen de figuras
Route::get('/formvolumenfiguras', function () {
    return view('formvolumenfiguras');
})->middleware('admin');;

//Nivel 2
//Derivada
Route::get('/formderivadasimple', function () {
    return view('formderivadasimple');
})->middleware('admin');

Route::post ('/derivada','derivadaController@derivada');

//Tabla de suma y multiplicación
Route::get('/formlimit', function () {
    return view('formlimit');
})->middleware('admin');

Route::post ('/limitar','limitnumController@limitnumberlist');

//Calculo de la pendiente
Route::get('/formpendienterecta', function () {
    return view('formpendienterecta');
})->middleware('admin');

Route::post ('/pendiente','pendienteController@pendiente');


//Conversion de divisas 
Route::get('/formconversiones', function () {
    return view('formconversiones');
})->middleware('admin');


//Division simples
Route::get('/formdivisionessimples', function () {
    return view('/formdivisionessimples');
})->middleware('admin');

//Clase 6

Route::resource('categories', 'CategoryController');

Route::resource('clientes', 'clienteController');

//Clase 7 tablas con relaciones
Route::resource('products', 'ProductController');


//Clase 8 tablas con realaciones parte 2 mini proyecto
Route::resource('pedidos', 'pedidoController');

Route::resource('ventas', 'VentaController');