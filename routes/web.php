<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo', function () {
//     return view('demo');
// });

use App\Http\Controllers\QuizController;


Route::get('/', function(){
    return view('quizzes/welcome');
});
Route::get('/home', [QuizController::class, 'index']);
Route::get('/quiz/{category}/{quiz}', [QuizController::class, 'showQuiz']);
Route::post('/quiz/{category}/{quiz}/submit', [QuizController::class, 'submit']);

