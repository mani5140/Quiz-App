<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Models\Quiz;

class QuizController extends Controller
{

public function index()
{
    // Load quiz data from the JSON file
    $quizzes = json_decode(file_get_contents(public_path('quizzes.json')), true);
    // $quizNames = array_keys($quizzes);

    return view('quizzes.index', compact('quizzes'));
}

public function showQuiz($category, $quiz)
{
    // Load quiz data from the JSON file
    $quizzes = json_decode(file_get_contents(public_path('quizzes.json')), true);

    // Check if the category and quiz exist in the JSON data
    if (isset($quizzes['categories']) && is_array($quizzes['categories'])) {
        foreach ($quizzes['categories'] as $categoryData) {
            if ($categoryData['name'] === $category) {
                foreach ($categoryData['quizzes'] as $quizData) {
                    if ($quizData['name'] === $quiz) {
                        $quizData['category'] = $category; // Add the 'category' key
                        return view('quizzes.quiz', compact('quizData'));
                    }
                }
            }
        }
    }

    abort(404); // Category or quiz not found
}



public function submit(Request $request, $category, $quiz)
{
    
    // $userAnswers = $request->input('answers');
    // $score = Quiz::validateAnswers($quiz, $userAnswers);

    // return view('quizzes.result', compact('score'));
    $userAnswers = $request->input('answers');
    $questions = Quiz::getQuizData($category, $quiz);
    $score = Quiz::validateAnswers($questions, $userAnswers);

    return view('quizzes.result', compact('score'));
}
}