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
  <h1 class="h1text"> Welcome to the TAL Distributions Website Home Page!</h1>
  <br>
  <h2 class="h2text"> Select a report to view in readable format from the drop down box below.</h2>
  <br>
  <br>
  <div class="dropdown" style="float:middle">
  <button class="dropbtn">Options</button>
  <div class="dropdown-content">
    <a href="452Project.php">Go to the Overview Page</a>
	<a href="452ProjectAddData.php">Add a Customer</a>
    <a href="452ProjectNames.php">Customer & Sales Rep. Names Page</a>
    <a href="452ProjectItems.php">Items in Inventory Page</a>
    <a href="452ProjectList.php">List All Orders Page</a>
	<a href="452ProjectReport.php">My Report Page</a>
  </div>
</div>
<?php
	// set up database connection
	require_once('connectvars.php');
	
	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
	OR die('Could not connect to MySQL. '.
		mysqli_connect_error());
		
		echo "<br>";
		print "<p>The connection worked. The link is: ". $dbc . ".</p><br />";
	print "<p>Selecting a database</p>";
	$result = mysqli_select_db( $dbc, "cs452115" );
	if ($result){
		print "<p>Database selected successfully</p>";
	}
	else{
		print "<p>There was a problem with the database selection</p>";
	}
		mysqli_close($dbc);
?>
</body>
</html>
