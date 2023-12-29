<?php

use App\Http\Controllers\Api\AnalyseController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DoctorController;
use App\Http\Controllers\Api\DoctorPhoneController;
use App\Http\Controllers\Api\GroupController;
use App\Http\Controllers\Api\InsuranceCompaniesController;
use App\Http\Controllers\Api\InsuranceCompaniesPatientController;
use App\Http\Controllers\Api\InsuranceCompaniesPhoneController;
use App\Http\Controllers\Api\LaboratoryConstantController;
use App\Http\Controllers\Api\LabPhoneController;
use App\Http\Controllers\Api\NaturalFieldController;
use App\Http\Controllers\Api\PatientController;
use App\Http\Controllers\Api\TestController;
use App\Http\Controllers\Api\TestDetailController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix' => 'v1'
], function () {
    Route::apiResource('patient', PatientController::class);
    Route::apiResource('doctor', DoctorController::class);
    Route::apiResource('user', UserController::class);
    Route::apiResource('laboratoryConstant', LaboratoryConstantController::class);
    Route::apiResource('category', CategoryController::class);
    Route::apiResource('group', GroupController::class);
    Route::apiResource('analyse', AnalyseController::class);
    Route::apiResource('labPhone', LabPhoneController::class);
    Route::apiResource('doctorPhone', DoctorPhoneController::class);
    Route::apiResource('naturalField', NaturalFieldController::class);
    Route::apiResource('insuranceCompanies', InsuranceCompaniesController::class);
    Route::apiResource('ic_patient', InsuranceCompaniesPatientController::class);
    Route::apiResource('ic_phone', InsuranceCompaniesPhoneController::class);
    Route::apiResource('test', TestController::class);
    Route::apiResource('testDetail', TestDetailController::class);

});

