<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('permisos', App\Http\Controllers\PermisoController::class);

Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::resource('contratos', App\Http\Controllers\ContratoController::class);
Route::resource('despidos', App\Http\Controllers\DespidoController::class);
Route::resource('motivos-despidos', App\Http\Controllers\MotivosDespidoController::class);

Route::resource('cotizaciones', App\Http\Controllers\CotizacioneController::class);
Route::resource('detalles-cotizaciones', App\Http\Controllers\DetallesCotizacioneController::class);

Route::resource('productos', App\Http\Controllers\ProductoController::class);
Route::resource('marcas', App\Http\Controllers\MarcaController::class);
Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('proveedores', App\Http\Controllers\ProveedoreController::class);

Route::resource('facturas', App\Http\Controllers\FacturaController::class);
Route::resource('detalles-facturas', App\Http\Controllers\DetallesFacturaController::class);
Route::resource('datos-empresas', App\Http\Controllers\DatosEmpresaController::class);

Route::resource('movimientos', App\Http\Controllers\MovimientoController::class);
Route::resource('motivos', App\Http\Controllers\MotivoController::class);

Route::resource('clientes', App\Http\Controllers\ClienteController::class);
Route::resource('paises', App\Http\Controllers\PaiseController::class);
Route::resource('departamentos', App\Http\Controllers\DepartamentoController::class);
Route::resource('municipios', App\Http\Controllers\MunicipioController::class);
Route::resource('ciudades', App\Http\Controllers\CiudadeController::class);
