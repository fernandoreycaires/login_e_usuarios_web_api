<?php

use App\Http\Controllers\Web\Administracao\Usuarios\UsuarioController;
use App\Http\Controllers\Web\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');
    Route::get('/dashboard', [HomeController::class, 'home'])->name('dashboard');

    // Rostas de usuarios 
    Route::get('/administracao/usuarios', [UsuarioController::class, 'usuarios'])->name('usuarios');
    Route::post('/administracao/usuarios/add', [UsuarioController::class, 'addUsuarios'])->name('usuariosAdd');
    Route::put('/administracao/usuarios/edit/{id}', [UsuarioController::class, 'editUsuarios'])->name('usuariosEdit');
    Route::put('/administracao/usuarios/editStatus/{id}', [UsuarioController::class, 'editStatusUsuarios'])->name('usuariosStatus');
    Route::delete('/administracao/usuarios/destroy/{id}', [UsuarioController::class, 'deleteUsuarios'])->name('usuariosDelete');
    
    // Rostas da tela de perfil de usuarios 
    Route::get('/administracao/usuarios/{id}', [UsuarioController::class, 'usuariosPerfil'])->name('usuariosPerfil');
    Route::post('/administracao/usuarios/addPerfil/{id}', [UsuarioController::class, 'addPerfil'])->name('addPerfil');
    Route::delete('/administracao/usuarios/delPerfil/{id}', [UsuarioController::class, 'delPerfil'])->name('delPerfil');


});
