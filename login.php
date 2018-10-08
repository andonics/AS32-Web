<?php

// Read from the formulary (login.html)
// user / Password
$user = $_POST['user'];
$password = $_POST['password'];

//connect to mysql
$servername = 'localhost:3307';
$username = 'root';
$password = '';
$db = 'web';

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// select from users where

//if ok then go to loginok.html

//if not ok return to login.html
