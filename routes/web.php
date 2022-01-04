<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\QuestaoController;
use App\Http\Controllers\AlternativaController;
use App\Http\Controllers\QuizController;


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



Route::get('/', [AlternativaController::class, 'index'])->name('quiz.index');


Route::get('quiz/create', [QuestaoController::class, 'create'])->name('quiz.create');

Route::post('quiz/store', [QuestaoController::class, 'store'])->name('quiz.store');


Route::post('quiz/resposta', [QuizController::class, 'resposta'])->name('quiz.resposta');

Route::get('quiz', [QuestaoController::class, 'quiz'])->name('quiz');




// Route::get('/', [SiteController::class, 'index'])->name('doceriagardenia.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');





require __DIR__.'/auth.php';
