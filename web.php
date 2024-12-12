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

Route::resource('/title',    TitleController::class);
Route::get('/lecturer', [LecturerController::class,'index']);
Route::resource('/program', ProgramController::class);
Route::resource('/tools', ToolsController::class);
Route::resource('/project_status', Project_statusController::class);
Route::resource('/project_type', Project_typeController::class);
