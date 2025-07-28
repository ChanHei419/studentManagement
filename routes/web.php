<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::get('/', function () {
  $html = '<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>

    <div class="container"">
        <button class="btn btn-primary">button</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>';
  return $html;
});


use App\Http\Controllers\CountriesController;


// Route::get('/', function () {
//     return view('welcome');
// });



// Route::prefix('details')->group(function () {



//     Route::get('students', function () {
//         return '1';
//     });
// })->name('student-Details');

// Route::get('teachers', function () {
//     return '2';
// })->name('teacher-Details');

// Route::get('courses', function () {
//     return '3';
// })->name('course-Details');

// Route::get('student/{id}/{reg}', function ($id, $reg) {
//     return 'student number' . $id . 'register number is' . $reg;
// });

Route::view('contact-us', 'contactus');


Route::view('about-us', 'aboutus');
// ,function()
// {
//     return view('contactus');
// });

// Route::get('students', [StudentController::class, 'index']);
// Route::get('about-us/{id}/{name}', [StudentController::class, 'aboutUs']);


use App\Models\Teachers;
use App\Http\Controllers\TeachersController;


Route::get('teachers', [TeachersController::class, 'index']);
Route::get('add-teacher', [TeachersController::class, 'add']);
// function () {
//     return Teachers::all();
// });
Route::get('update-teacher/{id}', [TeachersController::class, 'update']);
Route::get('show-teacher/{id}', [TeachersController::class, 'show']);
Route::get('delete-teacher/{id}', [TeachersController::class, 'delete']);
Route::get('add-data', [StudentController::class, 'addData']);
Route::get('get-data', [StudentController::class, 'getData']);
Route::get('update-data', [StudentController::class, 'updateData']);
Route::get('delete-data', [StudentController::class, 'deleteData']);

// Route::prefix('countries')->controller(CountriesController::class)->group(function () {
//     Route::get('/', 'index');
//     Route::get('add', 'Countries.add'); // Route to display the form
//     // Route::post('/add', 'add')->name('add');     // Route to handle form submission
// });
Route::prefix('countries')->controller(CountriesController::class)->name('countries.')->group(function () {
    Route::get('/', 'index')->name('index');          // Displays the country list
    Route::get('add', 'add')->name('student.add');     // Displays the add form
    Route::post('create', 'create')->name('create');          // Handles form submission
    Route::get('edit/{id}','edit')->name('edit/{id}') ;
      Route::post('update/{id}','update')->name('update') ;
      Route::delete('delete/{id}','destroy')->name('destroy') ;
  });
