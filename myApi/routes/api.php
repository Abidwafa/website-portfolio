<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

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

// Public Routes
/*
Route::get('/Students', [StudentController::class, 'index']);
Route::get('/Students/{id}', [StudentController::class, 'show']);
Route::post('/Students', [StudentController::class, 'store']);
Route::put('/Students/{id}', [StudentController::class, 'update']);
Route::delete('/Students/{id}', [StudentController::class, 'destroy']);
Route::get('/Students/search/{city}', [StudentController::class, 'search']);
*/

//Route::resource('students', StudentController::class);

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
/*Route::get('/Students', function () {
    return 'All student info Api';
}); */

// protected Routs
/*
Route::middleware('auth:sanctum')->get('/Students', [StudentController::class, 'index']);
Route::middleware('auth:sanctum')->get('/Students/{id}', [StudentController::class, 'show']);

*/

/*
Route::middleware(['auth:sanctum'])->group(function(){

Route::get('/Students', [StudentController::class, 'index']);
Route::get('/Students/{id}', [StudentController::class, 'show']);
Route::post('/Students', [StudentController::class, 'store']);
Route::put('/Students/{id}', [StudentController::class, 'update']);
Route::delete('/Students/{id}', [StudentController::class, 'destroy']);
Route::get('/Students/search/{city}', [StudentController::class, 'search']);
Route::post('/logout', [UserController::class, 'logout']);

});


*/


//Partially Protected

//Public 

Route::get('/Students', [StudentController::class, 'index']);
Route::get('/Students/{id}', [StudentController::class, 'show']);
Route::get('/Students/search/{city}', [StudentController::class, 'search']);


//Protected


Route::middleware(['auth:sanctum'])->group(function(){

    
    Route::post('/Students', [StudentController::class, 'store']);
    Route::put('/Students/{id}', [StudentController::class, 'update']);
    Route::delete('/Students/{id}', [StudentController::class, 'destroy']);
    Route::post('/logout', [UserController::class, 'logout']);
    
    });



    Route::middleware('auth:sanctum')->get('/user', function
    (Request $request) {
        return $request->user();
    });
    