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
  <h1 class="h1text"> View All Information About the Customer!</h1>
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

<br>

<?php
// Get a connection for the database
require_once('connectvars.php');

// Create a query for the database
$query = "SELECT CustomerNum, CustomerName, Street, City, State, PostalCode, Balance, CreditLimit, RepNum
		  FROM customer 
		  ORDER BY CustomerNum ASC";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">

<tr><td align="left"><b>CustomerNum</b></td>
<td align="left"><b>CustomerName</b></td>
<td align="left"><b>Street</b></td>
<td align="left"><b>City</b></td>
<td align="left"><b>State</b></td>
<td align="left"><b>PostalCode</b></td>
<td align="left"><b>Balance</b></td>
<td align="left"><b>CreditLimit</b></td>
<td align="left"><b>RepNum</b></td></tr>';

// the mysqli_fetch_array should return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){

echo '<tr><td align="left">' . 
$row['CustomerNum'] . '</td><td align="left">' . 
$row['CustomerName'] . '</td><td align="left">' .
$row['Street'] . '</td><td align="left">' .
$row['City'] . '</td><td align="left">' .
$row['State'] . '</td><td align="left">' .
$row['PostalCode'] . '</td><td align="left">' . 
$row['Balance'] . '</td><td align="left">' .
$row['CreditLimit'] . '</td><td align="left">' . 
$row['RepNum'] . '</td><td align="left">';

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