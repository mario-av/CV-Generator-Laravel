<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurriculumController; 


Route::resource('curriculums', CurriculumController::class);


Route::get('/', function () {
    return redirect()->route('curriculums.index');
});