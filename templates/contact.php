<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <style>

        .contact-container {
            max-width: 600px;
            margin: auto;
        }

        .contact-info {
            margin-top: 20px;
            font-size: 18px;
        }

        .phone-number::before {
            content: "+44 (0) ";
        }

        .image-slot {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="contact-container">
        <h2>Contact Us</h2>

        <div class="image-slot">
            <img src="{{url_for('static',filename='coffee-hand.png')}}" align="middle" alt="Contact Image" style="max-width: 50%; height: auto;">
        </div>

        <div class="contact-info">
            <p>Email: <a href="mailto:info@starbucks.com">info@starbucks.com</a></p>
            <p>Phone: <span class="phone-number">20 5666 7789</span></p>
        </div>
    </div>

</body>

</html>