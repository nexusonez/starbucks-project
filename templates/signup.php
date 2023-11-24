<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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

    <div class="signup-container">
        <h2>Sign Up</h2>

        <form action="{{ url_for('signup') }}" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>

            <button type="submit">Sign Up</button>

        </form>
        <?php if (isset($success)): ?>
            <p class="success-message"><?= $success ?></p>
        <?php endif; ?>
        <?php if (isset($error)): ?>
            <p class="error-message"><?= $error ?></p>
        <?php endif; ?>

    </div>

</body>

</html>

