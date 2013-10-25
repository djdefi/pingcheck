<?php
include './includes/functions.php';
include './includes/mysql.php';

$result = mysqli_query($mysqli,"SELECT * FROM domains");

while($row = mysqli_fetch_array($result))
  {
  echo $row['DomainName'] . " " . pingDomain($row['DomainName']) . "" . ms;
  echo "<br>";
  }

mysqli_close($mysqli);

echo '<a href="./adddomain.php">Add Domain</a>'
?>
