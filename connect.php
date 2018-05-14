<?php
$con = mysql_connect("localhost","u4161302_PowerApp","PowerApp1234");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysql_select_db("u4161302_PowerApp");
?>
