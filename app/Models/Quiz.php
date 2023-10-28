<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public static function getQuizData($category, $quizName)
    {
        
        $quizzes = json_decode(file_get_contents(public_path('quizzes.json')), true);

        foreach ($quizzes['categories'] as $categoryData) {
        if ($categoryData['name'] === $category) {
            foreach ($categoryData['quizzes'] as $quizData) {
                if ($quizData['name'] === $quizName) {
                    return $quizData['questions'];
                }
            }
        }
    }

    return [];
    }

    public static function validateAnswers($questions, $userAnswers)
    {
        $score = 0;

        if (!is_array($userAnswers)) {
            return $score;
        }
    
        foreach ($questions as $index => $question) {
            if (
                isset($userAnswers[$index]) &&
                $userAnswers[$index] === $question['correct_answer']
            ) {
                $score++;
            }
        }
    
        return $score;
    }
}
