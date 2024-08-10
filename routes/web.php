<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminQuizController;
use App\Http\Controllers\BankQuestionController;
use App\Http\Controllers\AnswerController;

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

Route::get('/', [App\Http\Controllers\quizController::class, 'show'])->name('index');

Auth::routes();
Route::middleware(['auth','role:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/quiz/{id}', [App\Http\Controllers\QuizController::class, 'index'])->name('quiz');
    Route::post('/result', [App\Http\Controllers\QuizController::class, 'result'])->name('result');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin');
    Route::get('/bankquestion/{id}', [App\Http\Controllers\BankQuestionController::class, 'indexBank'])->name('bank.index');
    Route::resource('goolaquiz', AdminQuizController::class);
    Route::resource('bankquestion', BankQuestionController::class);
    Route::resource('answer', AnswerController::class);
});
