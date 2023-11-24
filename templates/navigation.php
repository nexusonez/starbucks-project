<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(!isset($_SESSION['logged'])){ // not logged in
?>
    <header>
        <h1>Starbucks Digital Coffee Club</h1>
    </header>
    <nav style="text-align: center;">
        <a href="/">Home</a>
        <a href="#Coupons">Coupons</a>
        <a href="#Deals">Deals</a>
        <a href="/contact-us">Contact</a>
        <a href="/login">Login</a>
        <a href="#">Sign Up</a>
    </nav>
    <footer>
        <p>&copy; 2023 Starbucks. All rights reserved.</p>
    </footer>
<?php
}
?>