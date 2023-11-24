<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Starbucks Digital Coffee Club</title>
    <link rel="stylesheet" href="/static/style.css">
    <?php include 'navigation.php'; ?>

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
<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 50px; 
        padding: 15px; 
    }
    section { 
        background-color: #e0f7e0;
        padding:20px;
        border-radius:10px;
    }
</style>
<body>
    <section style="text-align: center;">
        <h2>Welcome to the Starbucks Digital Coffee Club!</h2>
        <p>Discover exclusive coupons and deals to enhance your Starbucks experience.</p>
    </section>
    <div class="grid-container">
        <!-- Coupon Section -->
        <section id="Coupons">
            <h3 style="text-align:center;"><a href="#Coupons">Coupons</a></h3>
            <p>Get 20% off on your next coffee purchase.</p>
            <p>Buy one, get one free on selected pastries.</p>
            <p>Unlock a free upgrade to a larger size on your favorite drink.</p>
        </section>

        <!-- Deals Section -->
        <section id="Deals">
            <h3 style="text-align:center;"><a href="#Deals">Deals</a></h3>
            <p>Weekend special: Enjoy a special coffee and pastry combo for $5.</p>
            <p>Happy Hour: 50% off on all iced beverages from 3 PM to 5 PM.</p>
        </section>
        <!-- Coffee Story Section -->
        <section id="CoffeeStory">
            <h3 style="text-align:center;"><a href="#CoffeeStory">Coffee Story</a></h3>
            <p>Explore the fascinating world of coffee with our diverse selection of beans and unique coffee blends.</p>
            <p>From the rich and bold flavors of dark roasts to the bright and vibrant notes of our light roasts, we have something for every coffee enthusiast.</p>
            <p>Join us on a journey through the origins of our coffee beans and the art of crafting the perfect cup.</p>
        </section>
    </div>
    <!-- TODO: 
    - think of what to do with deals (can be just a display of deals). 
    - Add coffeeStory.php
    - Add coupons.php with function and database
--> 
</body>
</html>
