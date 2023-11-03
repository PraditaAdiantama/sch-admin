<<<<<<< HEAD
=======
<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome', [
        "title" => "welcome"
    ]);
});

Route::prefix("students")->group(function () {
    Route::get("/", [StudentController::class, "index"])->name("students.index");
    Route::get("/{student}", [StudentController::class, "show"])->name("students.show");

    Route::post("/", [StudentController::class, "store"])->name("students.store");
    Route::delete("/{student}", [StudentController::class, "destroy"])->name("students.destroy");
    Route::put("/{student}", [StudentController::class, "update"])->name("students.update");
});

Route::prefix("classes")->group(function () {
    Route::get("/", [ClassController::class, "index"])->name("classes.index");
    Route::get("/{class}", [ClassController::class, "show"])->name("classes.show");
    Route::get("/{class}/students", [ClassController::class, "students"])->name("classes.students");

    Route::post("/", [ClassController::class, "store"])->name("classes.store");
    Route::put("/{class}", [ClassController::class, "update"])->name("classes.update");
});
>>>>>>> e644ff5 (refactor: change route major to class and change controller)
