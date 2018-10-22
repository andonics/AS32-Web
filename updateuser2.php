<?php
// Read from the formulary (deleteuser.php)
$user = $_POST['user'];
$new_pass = $_POST['new_pass'];
//
$servername = "localhost:3307";
$username = "root";
$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
// select from user where ....
$query = "SELECT user FROM users";
//echo $query;
$result = mysqli_query($conn, $query);
// read from formulary

//update user
$query = "UPDATE users SET password = '$new_pass' WHERE user='$user'";
echo $query;
$result = mysqli_query($conn, $query);

header ('Location: '. 'users_admin.php');
