<?php

use App\Http\Controllers\Post\EditDataStudent;
use App\Http\Controllers\Post\StoreDataStudent;
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
