<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
});

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('data', 'App\Http\Controllers\AuthController@data');
    Route::get('show_tasks', 'App\Http\Controllers\TaskController@showTasks');
    Route::post('create_task', 'App\Http\Controllers\TaskController@createTask');
    Route::post('update_task', 'App\Http\Controllers\TaskController@updateTask');
    Route::post('delete_task', 'App\Http\Controllers\TaskController@deleteTask');
    Route::post('assign_task', 'App\Http\Controllers\TaskController@assignTask');
    Route::post('unassign_task', 'App\Http\Controllers\TaskController@unassignTask');
    Route::post('create_subtask', 'App\Http\Controllers\TaskController@createSubtask');
    Route::post('delete_subtask', 'App\Http\Controllers\TaskController@deleteSubtask');
});