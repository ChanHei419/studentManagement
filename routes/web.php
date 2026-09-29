<?php

use App\Http\Controllers\CountriesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeachersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home → Countries module
Route::redirect('/', '/countries');

// Static pages
Route::view('about-us', 'aboutus');
Route::view('contact-us', 'contactus');

// Countries — full CRUD with search & pagination
Route::prefix('countries')->controller(CountriesController::class)->name('countries.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('add', 'add')->name('add');
    Route::post('create', 'create')->name('create');
    Route::get('edit/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('update');
    Route::delete('delete/{id}', 'destroy')->name('destroy');
});

// Teachers — model CRUD demos
Route::prefix('teachers')->controller(TeachersController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('add', 'add');
    Route::get('show/{id}', 'show');
    Route::get('update/{id}', 'update');
    Route::get('delete/{id}', 'delete');
});

// Students — Eloquent / DB experiments
Route::prefix('students')->controller(StudentController::class)->group(function () {
    Route::get('add-data', 'addData');
    Route::get('get-data', 'getData');
    Route::get('update-data', 'updateData');
    Route::get('delete-data', 'deleteData');
});
