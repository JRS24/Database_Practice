<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>TAL Distributions</title>
  <link rel="stylesheet" type="text/css" href="452Project.css" />
</head>
<body>
  <img src="TAL-Logo.gif" width="100" height="100" style="float:left" />
  <img src="TAL-Logo.gif" width="100" height="100" style="float:right" />
  <br>
  <br>
  <h1 class="h1text"> View all Items in Inventory!</h1>
  <br>
  <br>
  <br>
  <div class="dropdown" style="float:middle">
  <button class="dropbtn">Options</button>
  <div class="dropdown-content">
    <a href="updatedIndex.php">Return to the Home Page</a>
    <a href="updatedOverview.php">Return to the Overview Page</a>
  </div>
</div>

<?php
// Get a connection for the database
require_once('connectvars.php');

// Create a query for the database
$query = "SELECT ItemNum, Description, OnHand, Category, Storehouse, Price
		  FROM item 
		  ORDER BY ItemNum ASC";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>ItemNum</b></td>
<td align="left"><b>Description</b></td>
<td align="left"><b>OnHand</b></td>
<td align="left"><b>Category</b></td>
<td align="left"><b>Storehouse</b></td>
<td align="left"><b>Price</b></td></tr>';

// the mysqli_fetch_array should return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['ItemNum'] . '</td><td align="left">' . 
$row['Description'] . '</td><td align="left">' .
$row['OnHand'] . '</td><td align="left">' . 
$row['Category'] . '</td><td align="left">' .
$row['Storehouse'] . '</td><td align="left">' . 
$row['Price'] . '</td><td align="left">';

echo '</tr>';
}

echo '</table>';

} else {

echo "Couldn't perform database query<br />";

echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);

?>
</body>
</html>