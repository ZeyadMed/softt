<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AttendanceSheetController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\AttendanceController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/departments', [DepartmentController::class, 'index']);
Route::post('/departments', [DepartmentController::class, 'store']);
Route::get('/create-attendance-sheet', [AttendanceSheetController::class, 'create']);
Route::post('/attendance-sheets', [AttendanceSheetController::class, 'store']);
Route::get('/upload-file', [FileController::class, 'create']);
Route::post('/upload-file', [FileController::class, 'store']);
Route::get('/download-files/{subject}', [FileController::class, 'downloadFiles']);
Route::get('/create-student', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/dashboard', [StudentController::class, 'dashboard']);
Route::get('/download-file/{file}', [FileController::class, 'downloadFile']);
Route::get('/manage-departments', [DepartmentController::class, 'index']);
Route::post('/departments', [DepartmentController::class, 'store']);
Route::get('/manage-subjects', [SubjectController::class, 'index']);
Route::post('/subjects', [SubjectController::class, 'store']);
Route::get('/manage-attendance', [AttendanceController::class, 'index']);
Route::post('/attendance', [AttendanceController::class, 'store']);
Route::get('/upload-files', [FileController::class, 'index']);
Route::post('/upload-file', [FileController::class, 'store']);
Route::get('/student-profile', [StudentController::class, 'profile']);
Route::get('/edit-student', [StudentController::class, 'edit']);
Route::post('/edit-student', [StudentController::class, 'update']);

