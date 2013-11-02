<?php

include '../includes/mysql.php';
include '../includes/functions.php';

while($row = mysqli_fetch_array($result))
  {
  echo $row['DomainName'] . " " . pingDomain($row['DomainName']) . "" . ms;
  echo "<br>";
  }


?>
