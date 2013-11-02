<?php
include './includes/mysql.php';

$id = $_POST['id'];
$idArr = explode(',', $id);

foreach ($idArr as $id) {
    $sql="DELETE FROM domains
    WHERE
    DomainID = '$id'";

    if (!mysqli_query($mysqli,$sql))
      {
      die('Error: ' . mysqli_error($mysqli));
      }
}

mysqli_close($mysqli);

?> 
