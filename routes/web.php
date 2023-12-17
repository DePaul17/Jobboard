<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TheController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [TheController::class, 'adv'])->name('dashboard');
    Route::get('/offer/add', [TheController::class, 'add_offer'])->name('addoffer');
    Route::get('/offer/add', [TheController::class, 'list_company'])->name('addoffer');
    Route::post('add/offer/load', [TheController::class, 'addoffer_load'])->name('add_new_offer');
    Route::delete('destroy/offer/{id}', [TheController::class, 'destroy_offer'])->name('destroy');
    Route::get('/apply/{id}', [TheController::class, 'apply_now_form'])->name('apply');
    Route::post('/apply/job', [TheController::class, 'apply_now'])->name('apply_now_traitement');
    Route::get('/edit-advertisement/{id}', [TheController::class, 'edit_advertisements'])->name('edit');
    Route::put('/update/{id}', [TheController::class, 'update']);
    Route::post('add/new/company', [TheController::class, 'add_company'])->name('add_new_company');
    Route::get('/see-more/{id}', [TheController::class, 'see_more'])->name('see');

});

Route::post('/', [TheController::class, 'sendEmail'])->name('send.email');

require __DIR__.'/auth.php';

