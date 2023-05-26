<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('v1/auth/login', [AuthController::class, 'login'])->name('api_v1_login');

Route::group(['middleware' => ['apiJwt']], function(){
    Route::post('v1/auth/me', [AuthController::class, 'me'])->name('api_v1_me');
    Route::post('v1/auth/logout', [AuthController::class, 'logout'])->name('api_v1_logout');
    Route::get('v1/users', [UserController::class, 'index'])->name('api_v1_users');
    Route::post('v1/users/store', [UserController::class, 'store'])->name('api_v1_addUser');
    Route::delete('v1/users/destroy/{id}', [UserController::class, 'destroy'])->name('api_v1_destroyUser');
    Route::put('v1/users/update/{id}', [UserController::class, 'update'])->name('api_v1_updateUser');
});
