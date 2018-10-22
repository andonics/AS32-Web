<?php
// Read from the formulary (login.html)
//
$servername = "localhost:3307";
$username = "root";
$password = "";
//$password = "";
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
$user = $_POST['user'];
$new_pass = $_POST['new_pass'];
//echo $new_pass;

//update user
$query = "UPDATE FROM users WHERE user = '$user'";
echo $query;
//$result = mysqli_query($conn, $query);

//header ('Location: '. 'users_admin.php');
