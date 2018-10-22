<?php
$user = $_POST['user'];
//echo $user;
?>
<html>
<head>
  <style>
     /* https://www.w3schools.com/css/tryit.asp?filename=trycss_table_striped */
     table {
      border-collapse: collapse;
      width: 100%;
      }
      th, td {
          text-align: left;
          padding: 8px;
      }
      tr:nth-child(even) {background-color: #f2f2f2;}
  </style>
</head>
<body>
<table border = 0>
  <form action="updateuser2.php" method="POST">
  <?php echo $user ?>:<br><br>
  <input type="hidden" name='new_pass' value="<?php echo $user ?>">
  New password <input type='password' name='new_pass'>
  <br><br><input type="submit" value="actualizar">
</form>
</body>
</html>
