<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClinicsController;
use App\Http\Controllers\ClinicController;

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
    return view('welcome');
});
Route::get('test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('profile', [UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::resource('user', UserController::class);


Route::group([
    'prefix' => 'clinics',
], function () {
    Route::get('/', [ClinicController::class, 'index'])
         ->name('clinics.clinic.index');
    Route::get('/create', [ClinicController::class, 'create'])
         ->name('clinics.clinic.create');
    Route::get('/show/{clinic}',[ClinicController::class, 'show'])
         ->name('clinics.clinic.show')->where('id', '[0-9]+');
    Route::get('/{clinic}/edit',[ClinicController::class, 'edit'])
         ->name('clinics.clinic.edit')->where('id', '[0-9]+');
    Route::post('/', [ClinicController::class, 'store'])
         ->name('clinics.clinic.store');
    Route::put('clinic/{clinic}', [ClinicController::class, 'update'])
         ->name('clinics.clinic.update')->where('id', '[0-9]+');
    Route::delete('/clinic/{clinic}',[ClinicController::class, 'destroy'])
         ->name('clinics.clinic.destroy')->where('id', '[0-9]+');
});
