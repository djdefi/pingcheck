<?php
include './includes/mysql.php';

$id = $_POST['s'];

$sql="INSERT INTO domains (DomainName)
VALUES
('$id')";

if (!mysqli_query($mysqli,$sql))
  {
  die('Error: ' . mysqli_error($mysqli));
  }

mysqli_close($mysqli);

?> 
