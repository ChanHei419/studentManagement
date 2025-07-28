<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Website')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        nav {
            background-color: #f4f4f4;
            padding: 1rem;
        }
        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        nav ul li {
            margin: 0 1rem;
        }
        nav ul li a {
            text-decoration: none;
            color: #333;
        }
        nav ul li a:hover {
            color: #007BFF;
        }
        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about-us">About Us</a></li>
            <li><a href="/contact-us">Contact</a></li>
        </ul>
    </nav>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} My Website. All rights reserved.</p>
    </footer>
</body>
</html>