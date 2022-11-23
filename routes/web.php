<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TracerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LowonganController;
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
    return view('landing-page');
})->name('beranda');


// Routing Login & register
Route::get('/login', [UserController::class,  'login'])->name('login');
Route::post('/process-login', [UserController::class,  'processLogin'])->name('process-login');

Route::get('/logout', [UserController::class,  'logout'])->name('logout');

Route::get('/registration', [UserController::class,  'registration'])->name('register');
Route::post('/process-registration', [UserController::class,  'processRegistration'])->name('process-register');
// end Routing Login & register

// routing profile
Route::prefix('/profile')->group(function () {
    Route::get('/', [ProfileController::class,  'profile'])->name('profile');
    Route::get('/dataPendidikan', [ProfileController::class,  'dataPendidikan'])->name('dataPendidikan');
    Route::get('/gantiPassword', [ProfileController::class,  'gantiPassword'])->name('gantiPassword');
    Route::get('/dataPendukung', [ProfileController::class,  'dataPendukung'])->name('dataPendukung');
});
//end routing profile


// routing lowongan
Route::get('/lowongan', [LowonganController::class,  'index'])->name('view-lowongan');
Route::get('/lowongan/detile/{id}', [LowonganController::class,  'detile']);
// end routing lowongan

//routing tracer study
// routing profile
Route::prefix('/tracer-study')->group(function () {
    Route::get('/login', [TracerController::class,  'login'])->name('question-login');
    Route::post('/login/process',[TracerController::class, 'loginProcess'])->name('login-process-question');

});

//route soal 1
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal1', [TracerController::class,  'viewSoal1'])->name('soal1');
    Route::post('/soal1/process/',[TracerController::class,'soal1Process'])->name('soal1-process');
});
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal2', [TracerController::class,  'viewSoal2'])->name('soal2');
    Route::post('/soal2/process',[TracerController::class,'soal2Process'])->name('soal2-process');
});
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal3', [TracerController::class,  'viewSoal3'])->name('soal3');
    Route::post('/soal3/process',[TracerController::class,'soal3Process'])->name('soal3-process');
});
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal4', [TracerController::class,  'viewSoal4'])->name('soal4');
    Route::post('/soal4/process',[TracerController::class,'soal4Process'])->name('soal4-process');
});
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal5', [TracerController::class,  'viewSoal5'])->name('soal5');
    Route::post('/soal5/process',[TracerController::class,'soal5Process'])->name('soal5-process');
});
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal6', [TracerController::class,  'viewSoal6'])->name('soal6');
    Route::post('/soal6/process',[TracerController::class,'soal6Process'])->name('soal6-process');
});
Route::prefix('/tracer-study/qusetion')->group(function () {
    Route::get('/soal7', [TracerController::class,  'viewSoal7'])->name('soal7');
    Route::post('/soal7/process',[TracerController::class,'soal7Process'])->name('soal7-process');
    Route::get('/finish', [TracerController::class,  'finish'])->name('finish');
});
