<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- <link rel="stylesheet" href="/CSS/styles1.css"> -->
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
</head>
<body>
    <body>
        <header>
            <h1>Vehicle Marketplace</h1>
        </header>
    
        <div class="signin-container">
            <h2>Sign In</h2>
            <form action="{{route('auth')}}" method="post">
                @csrf
                <label for="username">Username or Email:</label>
                <input type="text" id="username" name="username" required>
    
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
    
                <button type="submit">Sign In</button>
            </form>
            <p>Don't have an account? <a href="/reg">Sign Up</a></p>
        </div>
</body>
</html>