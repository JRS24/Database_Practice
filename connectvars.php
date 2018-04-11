<?php
// Opens a connection to the database

// Defined as constants so that they can't be changed
DEFINE ('DB_USER', 'cs452115');
DEFINE ('DB_PASSWORD', 'fufAdyab');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'cs452115');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('Could not connect to MySQL: ' .
mysqli_connect_error());
?>