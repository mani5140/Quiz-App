<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('cssFiles/result.css')}}">
</head>
<body class="body">
    <div class="result">
        <h1>Quiz Result</h1>
        <p>Your score is: {{ $score }}</p>
    </div>
    
</body>
</html>
