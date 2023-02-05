<?php

use Illuminate\Http\Request;
use App\Http\Controllers\PessoasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pessoas', [PessoasController::class, 'index' ]);
Route::prefix('/pessoa')->group(function(){
    Route::post('/criar', [PessoasController::class, 'criar']);
    Route::get('/achaum/{id}', [PessoasController::class, 'achaum']);
    Route::put('/{id}', [PessoasController::class, 'update']);
    Route::delete('/{id}', [PessoasController::class, 'destroy']);
});
