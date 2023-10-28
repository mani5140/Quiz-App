<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <title>{{ $quizData['name'] }} Quiz</title>
    <link href="{{ asset('cssFiles/quiz.css') }}" rel="stylesheet">
</head>
<body>
    <div class="con">
        <div id="r1">
            <h1>{{ $quizData['name'] }} Quiz</h1>
        </div>
        <div id="r2">
            <form method="post" action="/quiz/{{ $quizData['category'] }}/{{ $quizData['name'] }}/submit">

                @csrf
                @php $temp = 1; @endphp
                @foreach ($quizData['questions'] as $index => $question)
                    <p>Q{{$temp}} :- {{ $question['question'] }}</p>
                    @php $temp++; @endphp
                    @foreach ($question['options'] as $option)
                        <label>
                            <input type="radio" name="answers[{{ $index }}]" value="{{ $option }}">
                            {{ $option }}
                        </label>
                        <hr>
                    @endforeach
                @endforeach
                <br>
                <br>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

{{-- <!DOCTYPE html>
<html>
<head>
    <title>{{ $quizData['name'] }} Quiz</title>
</head>
<body>
    <h1>{{ $quizData['name'] }} Quiz</h1>
    <form method="post" action="/quiz/{{ $quizData['category'] }}/{{ $quizData['name'] }}/submit">
        @csrf

        @php
            $totalQuestions = count($quizData['questions']);
        @endphp

        @for ($index = 0; $index < $totalQuestions; $index++)
            <div class="question {{ $index == 0 ? 'active' : '' }}">
                <p>{{ $quizData['questions'][$index]['question'] }}</p>
                @foreach ($quizData['questions'][$index]['options'] as $option)
                    <label>
                        <input type="radio" name="answers[{{ $index }}]" value="{{ $option }}">
                        {{ $option }}
                    </label>
                @endforeach
            </div>
        @endfor

        <div class="navigation">
            @if ($totalQuestions > 1)
                <button type="button" id="prevButton" onclick="showQuestion(-1)" {{ $index == 0 ? 'disabled' : '' }}>Previous</button>
                <button type="button" id="nextButton" onclick="showQuestion(1)" {{ $index == $totalQuestions - 1 ? 'disabled' : '' }}>Next</button>
            @endif
        </div>

        <button type="submit">Submit</button>
    </form>

    <script>
        let currentQuestion = 0;
        const questions = document.querySelectorAll('.question');
    
        function showQuestion(step) {
            questions[currentQuestion].classList.remove('active');
            currentQuestion += step;
            questions[currentQuestion].classList.add('active');
    
            // Update the navigation buttons
            document.getElementById('prevButton').disabled = currentQuestion === 0;
            document.getElementById('nextButton').disabled = currentQuestion === {{ $totalQuestions - 1 }};
        }
    
        // Initialize the buttons
        document.getElementById('prevButton').addEventListener('click', () => {
            showQuestion(-1);
        });
    
        document.getElementById('nextButton').addEventListener('click', () => {
            showQuestion(1);
        });
    
        // Initialize the buttons
        showQuestion(0);
    </script>
    
</body>
</html>


 --}}
