<!DOCTYPE html>
<html>
<head>
    <title>Your Website</title>
    <!-- Add your CSS stylesheets and other meta tags here -->
</head>
<body>
    <header>
        <!-- Add your header content here -->
        <h1>Welcome to Your Website</h1>
        <nav>
            <ul>
                <li><a href="{{ route('index') }}">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer>
        <p>This is my custom footer content.</p>
        <p>Additional information goes here.</p>
        <p>More details can be added as needed.</p>
    </footer>

</body>
</html>
