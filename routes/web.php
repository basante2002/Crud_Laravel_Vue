<?php

use App\Http\Controllers\ClinicController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClinicController::class, 'vistaTable']);
Route::get('/clinic/index', [ClinicController::class, 'index']);
Route::post('/clinic/store', [ClinicController::class, 'store']);
Route::put('/clinic/update/{id}', [ClinicController::class, 'update']);
Route::delete('/clinic/destroy/{id}', [ClinicController::class, 'destroy']);



Route::get('/patient/vistaTable', [PatientController::class, 'vistaTable']);
Route::get('/patient/index', [PatientController::class, 'index']);
Route::post('/patient/store', [PatientController::class, 'store']);
Route::put('/patient/update/{id}', [PatientController::class, 'update']);
Route::delete('/patient/destroy/{id}', [PatientController::class, 'destroy']);

