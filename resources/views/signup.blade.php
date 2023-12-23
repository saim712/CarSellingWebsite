<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- <link rel="stylesheet" href="/CSS/styles1.css"> -->
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
</head>

<body>
    <header>
        <h1>Vehicle Marketplace</h1>
    </header>

    <div class="signup-container">
        <h2>Sign Up</h2>
        <form action="{{ route('storedb')}}" method="post">
            @csrf
            <label for="name">Username:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="dob">Date Of Birth:</label>
            <input type="date" id="dob" name="dob" >

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirm Password:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>

</html>
