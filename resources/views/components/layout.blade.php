<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logo">
            <a href="/">FOOD</a>
        </div>
        <nav>
            <ul>
                <li><a href="/">HOME</a></li>
                <li><a href="/recipes">RECIPES</a></li>
                <li><a href="/about">ABOUT ME</a></li>
                <li><a href="/blogs">CONTACT US</a></li>
            </ul>
        </nav>
        <div class="auth-links">
            <a href="/signup" class="signup-btn">SIGN UP</a>
            <a href="/signin" class="signin-btn">SIGN IN</a>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer Section -->
    <footer>
        <p>&copy; 2024 Food Blog. All rights reserved.</p>
    </footer>

    <!-- Add JS for layout -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
