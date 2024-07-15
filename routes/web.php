<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('questionnaire/personal-info', [SignUpController::class, 'showStep1'])->name('signup.step1');
Route::post('questionnaire/personal-info', [SignUpController::class, 'postStep1'])->name('signup.step1.post');

Route::get('questionnaire/password', [SignUpController::class, 'showStep2'])->name('signup.step2');
Route::post('questionnaire/password', [SignUpController::class, 'postStep2'])->name('signup.step2.post');


Route::middleware(['auth'])->group(function () {

    Route::get('signup/account-type', [SignUpController::class, 'showAccountType'])->name('signup.account-type');
    Route::post('signup/account-type', [SignUpController::class, 'postAccountType'])->name('signup.account-type.post');

    Route::get('signup/step3', [SignUpController::class, 'showStep3'])->name('signup.step3');
    Route::post('signup/step3', [SignUpController::class, 'postStep3'])->name('signup.step3.post');

    Route::get('signup/address', [SignUpController::class, 'showAddress'])->name('signup.address');
    Route::post('signup/address', [SignUpController::class, 'postAddress'])->name('signup.address.post');

    Route::get('signup/tax-info', [SignUpController::class, 'showTaxInfo'])->name('signup.tax-info');
    Route::post('signup/tax-info', [SignUpController::class, 'postTaxInfo'])->name('signup.tax-info.post');

    Route::get('signup/success', [SignUpController::class, 'showSuccess'])->name('signup.success');


});

