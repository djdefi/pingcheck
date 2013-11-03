<?php

include '../includes/mysql.php';
include '../includes/functions.php';

while($row = mysqli_fetch_array($result))
  {
  echo "<div class='row col-md-12' id='".$row['DomainID']."'>";
  echo "<div class='col-md-4 domain'><input type='checkbox' name='id' id='id' class='customCheckbox' value='".$row['DomainID']."'> " . $row['DomainName'] . "</div> <div class='col-md-4 domain'>" . pingDomain($row['DomainName']) .  "</div>";
  echo "<label for='id'></label>";
  echo "</div>";
  }

echo "<button type='submit' class='btn btn-danger' style='margin-top: 20px;' value='Delete'><span class='glyphicon glyphicon-trash'></span></button>";


?>
