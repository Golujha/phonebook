<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get("/",[StudentController::class,"index"])->name("homepage");
Route::post("/",[StudentController::class,"store"])->name("store");
Route::get("/{std_id}/delete/",[StudentController::class,"destroy"])->name("remove");
Route::get("/{roll}/view/",[StudentController::class,"viewResult"])->name("view");
