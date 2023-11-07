<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\LabCaseController;

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
    return Inertia::render('Landing/Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]);
});

// Dashboard

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');

// Cases

//index
Route::get('cases', [LabCaseController::class, 'index'])->middleware('auth')
    ->name('cases');

// create
Route::get('/cases/create', [LabCaseController::class, 'create'])
    ->name('cases.create')
    ->middleware('auth');

//store
Route::post('cases', [LabCaseController::class, 'store'])
    ->name('cases.store')
    ->middleware('auth');

//delete
Route::get('cases/{labCase}', [LabCaseController::class, 'destroy'])
    ->name('cases.destroy')
    ->middleware('auth');

//Auth Stuff

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
