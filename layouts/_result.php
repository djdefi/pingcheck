<?php

include '../includes/mysql.php';
include '../includes/functions.php';

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='row col-md-12' id='".$row['DomainID']."'>";
  echo "<div class='col-md-4 domain'><input type='checkbox' name='id' value='".$row['DomainID']."'>" . $row['DomainName'] . "</div> <div class='col-md-2 domain'>" . pingDomain($row['DomainName']) . "ms" . "</div>";
  echo "</div>";
  }

echo "<input type='submit'>"


?>
