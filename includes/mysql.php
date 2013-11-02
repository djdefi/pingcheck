<?php

// Replace the values on the next line with your MySQL database credentials
$mysqli = new mysqli("host", "user", "password", "database");

if (mysqli_connect_errno($mysqli))
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

?>
