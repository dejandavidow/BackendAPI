<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TimesheetController;
use App\Http\Controllers\AuthController;
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
Route::get('/Categories',[CategoryController::class,'GetCategories'])->middleware('auth:sanctum');
Route::get('/Categories/{id}',[CategoryController::class,'GetCategory'])->middleware('auth:sanctum');;
Route::post('/Categories',[CategoryController::class,'PostCategory'])->middleware('auth:sanctum');;
Route::put('/Categories/{id}',[CategoryController::class,'UpdateCategory'])->middleware('auth:sanctum');;
Route::delete('/Categories/{id}',[CategoryController::class,'DeleteCategories'])->middleware('auth:sanctum');;
Route::get('Search',[CategoryController::class,'Search'])->middleware('auth:sanctum');;

Route::get('/Clients',[ClientController::class,'GetClients'])->middleware('auth:sanctum');;
Route::get('/Clients/{id}',[ClientController::class,'GetClient'])->middleware('auth:sanctum');;
Route::post('/Clients',[ClientController::class,'PostClient'])->middleware('auth:sanctum');;
Route::put('/Clients/{id}',[ClientController::class,'UpdateClient'])->middleware('auth:sanctum');;
Route::delete('/Clients/{id}',[ClientController::class,'DeleteClient'])->middleware('auth:sanctum');;
Route::get('/Search/Clients',[ClientController::class,'Search'])->middleware('auth:sanctum');;

Route::get('/Members',[MemberController::class,'GetMembers'])->middleware('auth:sanctum');;
Route::get('/Members/{id}',[MemberController::class,'GetMember'])->middleware('auth:sanctum');;
Route::post('/Members',[MemberController::class,'PostMember'])->middleware('auth:sanctum');;
Route::put('/Members/{id}',[MemberController::class,'UpdateMember'])->middleware('auth:sanctum');;
Route::delete('/Members/{id}',[MemberController::class,'DeleteMember'])->middleware('auth:sanctum');;
Route::get('/Search/Members',[MemberController::class,'SearchMembers'])->middleware('auth:sanctum');;

Route::get('/Projects',[ProjectController::class,'GetProjects'])->middleware('auth:sanctum');;
Route::get('/Projects/{id}',[ProjectController::class,'GetProject'])->middleware('auth:sanctum');;
Route::post('/Projects',[ProjectController::class,'PostProject'])->middleware('auth:sanctum');;
Route::put('/Projects/{id}',[ProjectController::class,'UpdateProject'])->middleware('auth:sanctum');;
Route::delete('/Projects/{id}',[ProjectController::class,'DeleteProject'])->middleware('auth:sanctum');;
Route::get('/Search/Projects',[ProjectController::class,'SearchProjects'])->middleware('auth:sanctum');;

Route::get('/Timesheets',[TimesheetController::class,'GetTimesheets'])->middleware('auth:sanctum');;
Route::get('/Timesheets/{id}',[TimesheetController::class,'GetTimesheet'])->middleware('auth:sanctum');;
Route::post('/Timesheets',[TimesheetController::class,'PostTimesheet'])->middleware('auth:sanctum');;

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);


