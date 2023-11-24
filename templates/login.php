<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/static/style.css">
    <header>
        <h1>Starbucks Digital Coffee Club</h1>
    </header>
    <nav style="text-align: center;">
        <a href="/">Home</a>
        <a href="#Coupons">Coupons</a>
        <a href="#Deals">Deals</a>
        <a href="/contact-us">Contact</a>
        <a href="/login">Login</a>
        <a href="/signup">Sign Up</a>
    </nav>
    <footer>
        <p>&copy; 2023 Starbucks. All rights reserved.</p>
    </footer>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="{{ url_for('login') }}" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>
        </form>
    </div>

</body>

</html>

