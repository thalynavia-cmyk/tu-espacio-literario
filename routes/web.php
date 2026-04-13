<?php
use App\Http\Controllers\ProductoController; 
use App\Http\Controllers\ClienteController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



/*Route::get('/about', function () { 
return 'Acerca de nosotros'; 
}); 

//Route::get('/user/{id}', function ($id) { 
//return 'ID de usuario: ' . $id; 
//}); 

Route::get('/contacto', function () { 
return 'Página de contacto'; 
})->name('contacto');

Route::get('/user/{id}', function ($id) {
    return 'ID de usuario: ' . $id;
})->where('id', '[0-9]{3}');

Route::prefix('admin')->group(function () { 
Route::get('/', function () { 
return 'Panel de administración'; 
}); 
Route::get('/users', function () { 
return 'Lista de usuarios'; 
}); 
}); */

Route::get('/inicio', function () {
    return view('inicio');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('productos', ProductoController::class); 
});

Route::resource('clientes', ClienteController::class);
Route::get('/catalogo', function () {
    return view('shop');
});

Route::get('/registro', function () {
    return view('auth.register');
});

Route::get('/producto-detalle', function () {
    return view('productos.show');
});

