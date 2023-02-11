<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\http\Controllers\EmployeeController;


// Get all entries
Route::get('/', [EmployeeController::class, 'index']);

// Update new entry
Route::put('/employees/update/{employee}', [EmployeeController::class, 'update']);

// Show create form
Route::get('/employees/create', [EmployeeController::class, 'create']);

// Store new entry
Route::post('/employees', [EmployeeController::class, 'store']);

// Show single entry
Route::get('/employees/{id}', [EmployeeController::class, 'show']);