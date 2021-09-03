<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculateControler;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/perimeter_rectangle', [CalculateControler::class, 'perimeter']);
Route::post('/cuboid', [CalculateControler::class, 'cuboid']);
Route::post('/square_area', [CalculateControler::class, 'area']);
