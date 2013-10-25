<?php
include './includes/mysql.php';

$sql="INSERT INTO domains (DomainName)
VALUES
('$_POST[DomainName]')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }
echo "1 record added";
echo "<br>";
echo '<a href="./monitor.php">Return To Monitor</a>';

mysqli_close($mysqli);

?> 
