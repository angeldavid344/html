<?php
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/empleados','EmpleadosController@index');

//Route::get('/empleados/create','EmpleadosController@create');


Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/empleados/create', [EmpleadosController::class, 'create']);
Route::get('/empleados/edit', [EmpleadosController::class, 'edit']);
Route::get('/empleados/store',[EmpleadosController::class, 'store']);
Route::get('/empleados/destroy/{id}',[EmpleadosController::class, 'destroy']);
Route::get('/empleados/{empleado}/edit',[EmpleadosController::class, 'edit']);

Route::get('/empleados/{empleado}',[EmpleadosController::class,'update']);

//Route::view('/empleados', 'index');

//Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
