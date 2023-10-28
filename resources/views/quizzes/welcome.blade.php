<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('cssFiles/welcome.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
    <title>Quiz App</title>
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
    <div class="front">
        <div id="front-r1">
            <h1>NO PAIN.</h1>
            <h1>NO GAIN.</h1>
        </div>
        <div id="front-r2">
            <h2>Welcome to the world of quizzes</h2>
            <a href="/home">Enter</a>
        </div>
    </div>
    
    
   </div>
</body>
</html>