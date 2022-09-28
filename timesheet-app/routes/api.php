<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group wshich
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/Categories',[CategoryController::class,'GetCategories']);
Route::get('/Categories/{id}',[CategoryController::class,'GetCategory']);
Route::post('/Categories',[CategoryController::class,'PostCategory']);
Route::put('/Categories/{id}',[CategoryController::class,'UpdateCategory']);
Route::delete('/Categories/{id}',[CategoryController::class,'DeleteCategories']);
Route::get('Search',[CategoryController::class,'Search']);

Route::get('/Clients',[ClientController::class,'GetClients']);
Route::get('/Clients/{id}',[ClientController::class,'GetClient']);
Route::post('/Clients',[ClientController::class,'PostClient']);
Route::put('/Clients/{id}',[ClientController::class,'UpdateClient']);
Route::delete('/Clients/{id}',[ClientController::class,'DeleteClient']);
Route::get('/Search/Clients',[ClientController::class,'Search']);

