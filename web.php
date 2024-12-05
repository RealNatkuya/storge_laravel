<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\Project_statusController;
use App\Http\Controllers\Project_typeController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/bio', function () {
    return view('bio');
});
Route::get('/assignment', function () {
    return view('assignment');
});

Route::get('/title', [TitleController::class,'index']);
Route::get('/lecturer', [LecturerController::class,'index']);
Route::get('/program', [ProgramController::class,'index']);
Route::get('/tools', [ToolsController::class,'index']);
Route::get('/project_status', [Project_statusController::class,'index']);
Route::get('/project_type', [Project_typeController::class,'index']);
