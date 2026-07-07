<?php
use App\Http\Controllers\StudentController;

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/users', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/students', [StudentController::class, 'index']);       // Get all students
Route::post('/students', [StudentController::class, 'store']);       // Create student
Route::get('/students/{student}', [StudentController::class, 'show']); // Get one student
Route::put('/students/{student}', [StudentController::class, 'update']); // Update student
Route::patch('/students/{student}', [StudentController::class, 'update']); // Partial update
Route::delete('/students/{student}', [StudentController::class, 'destroy']); // Delete student

