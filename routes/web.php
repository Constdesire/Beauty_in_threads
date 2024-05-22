<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AgendamentoController;
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

Route::get('/', function () { return view('welcome');});
Route::get('/login.blade.php', function () { return view('login');});
Route::get('/Adm.blade.php', function () { return view('adm');});
Route::get('/AgendamentoCad.blade.php', function () { return view('AgendamentoCad');});
Route::get('/FuncionarioCad.blade.php', function () { return view('FuncionarioCad');});



Route::get("/ClienteCad", [ClienteController::class, "ClienteCad"]);
Route::post("/adicionaCliente", [ClienteController::class, "adicionarC"]);
Route::get("/editarCL/{id}", [ClienteController::class, "editarC"]);
Route::post("/atualizarCL/{id}", [ClienteController::class, "atualizarC"]);
Route::get("/excluirCL/{id}", [ClienteController::class, "excluirC"]);

Route::get("/FC", [FuncionarioController::class, "FuncionarioCad"]);
Route::post("/adicionarFunc", [FuncionarioController::class, "adicionarFunc"]);
Route::get("/editarFunc/{id}", [FuncionarioController::class, "editarFunc"]);
Route::post("/atualizarFunc/{id}", [FuncionarioController::class, "atualizarFunc"]);
Route::get("/excluirFunc/{id}", [FuncionarioController::class, "excluirFunc"]);

Route::post('/adicionarA', [AgendamentoController::class, 'adicionarA']);
Route::get('/editarA/{id}', [AgendamentoController::class, 'editarA']);
Route::post('/atualizarA/{id}', [AgendamentoController::class, 'atualizarA']);
Route::get('/excluirA/{id}', [AgendamentoController::class, 'excluirA']);

