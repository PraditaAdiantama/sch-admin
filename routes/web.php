<?php

<<<<<<< HEAD
use App\Http\Controllers\Post\EditDataStudent;
use App\Http\Controllers\Post\StoreDataStudent;
=======
use App\Http\Controllers\MajorController;
>>>>>>> a622e73 (init)
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
<<<<<<< HEAD
<<<<<<< HEAD
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student/{student}', [StudentController::class, 'show'])->name('studentEdit');

Route::post('/createdata', StoreDataStudent::class)->name('create_data');
Route::get('/modif/editData/{edit}', [StudentController::class, 'edit']);
Route::post('/editData/{edit}', EditDataStudent::class)->name('edit_data');

Route::get('/modif/delete/{id}', [StudentController::class, 'delete'])->name('delete');
=======
    return view('welcome');
=======
    return view('welcome', [
        "title" => "welcome"
    ]);
>>>>>>> d59ea3d (refactor: change prefix majors to classes and crud classes)
});

Route::prefix("students")->group(function () {
    Route::get("/", [StudentController::class, "index"])->name("students.index");
    Route::get("/{student}", [StudentController::class, "show"])->name("students.show");

    Route::post("/", [StudentController::class, "store"])->name("students.store");
    Route::delete("/{student}", [StudentController::class, "destroy"])->name("students.destroy");
    Route::put("/{student}", [StudentController::class, "update"])->name("students.update");
});

Route::prefix("classes")->group(function () {
    Route::get("/", [MajorController::class, "index"])->name("classes.index");
    Route::get("/{major}", [MajorController::class, "show"])->name("classes.show");
    Route::get("/{major}/students", [MajorController::class, "students"])->name("classes.students");

    Route::post("/", [MajorController::class, "store"])->name("classes.store");
    Route::put("/{major}", [MajorController::class, "update"])->name("classes.update");
});
>>>>>>> a622e73 (init)
