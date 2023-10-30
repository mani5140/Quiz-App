{{-- <!DOCTYPE html>
<html>
<head>
    <title>Quiz App</title>
</head>
<body>
    <h1>Welcome to the Quiz App</h1>
    @foreach ($quizzes['categories'] as $category)
        <h2>{{ $category['name'] }} Quizzes</h2>
        <ul>
            @foreach ($category['quizzes'] as $quiz)
                <li><a href="/quiz/{{ $category['name'] }}/{{ $quiz['name'] }}">{{ $quiz['name'] }}</a></li>
            @endforeach
        </ul>
    @endforeach
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz App</title>
    <link href="{{ asset('cssFiles/styles.css') }}" rel="stylesheet">
</head>
<body class="body">
    <div id="temp">
        <div class='navbar'>
            <div class='right-navbar'>
                <img src="{{asset('logo.png')}}" alt="logo" />
            </div>
            <div class='left-navbar'>
                
                <p>Home</p>
                <p>Products</p>
                <p>About Us</p>
                <p>Contact Us</p>
            </div>
        </div>
    <div class="container">
        <div id="row1">
            <h1>Quiz App</h1>
        </div>
        <div id="row2">
        
                @foreach ($quizzes['categories'] as $category)
                <div id="category">
                    <h2>
                        <a href="javascript:void(0);" class="category-link" data-category="{{ $category['name'] }}" style="text-decoration: none">{{ $category['name'] }} Quizzes</a>
                    </h2>
                    <ul class="quizzes" id="category-{{ $category['name'] }}">
                        @foreach ($category['quizzes'] as $quiz)
                            <li><a href="/quiz/{{ $category['name'] }}/{{ $quiz['name'] }}" id="quiz-link">{{ $quiz['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
                    
                @endforeach
            
        
        </div>
    </div>
    
    <script>
        // Hide all quiz lists by default
        const quizLists = document.querySelectorAll('.quizzes');
        quizLists.forEach(list => list.style.display = 'none');

        // Add click event handlers to category links
        const categoryLinks = document.querySelectorAll('.category-link');
        categoryLinks.forEach(link => {
            link.addEventListener('click', () => {
                const categoryName = link.getAttribute('data-category');
                const categoryList = document.getElementById('category-' + categoryName);

                // Hide all quiz lists
                quizLists.forEach(list => list.style.display = 'none');

                // Show the quiz list for the selected category
                categoryList.style.display = 'block';
            });
        });
    </script>
</body>
</html>

