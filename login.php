<?php

// Read from the formulary (login.html)
// user / Password
$user = $_POST['user'];
$passwd = $_POST['passwd'];

//connect to mysql
$servername = 'localhost:3307';
$username = 'root';
$password = '';
$db = 'web';

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// select from users where
$query = "SELECT * FROM users WHERE user='$user' AND password='$passwd'";
echo  $query;


//if ok then go to loginok.html

//if not ok return to login.html
