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
  <h1 class="h1text"> View all customer names along with their Sales Rep!</h1>
  <br>
  <br>
  <br>
  <div class="dropdown" style="float:middle">
  <button class="dropbtn">Options</button>
  <div class="dropdown-content">
    <a href="index.php">Return to the Home Page</a>
    <a href="452Project.php">Return to the Overview Page</a>
  </div>
</div>
<br>
<table>
	<th>CustomerName</th>
	<th>RepFirst</th>
	<th>RepLast</th>
<tr>
	<td>Toys Galore</td>
	<td>Rafael</td>
	<td>Campos</td>
</tr>
<tr>
	<td>Cards and More</td>
	<td>Rafael</td>
	<td>Campos</td>
</tr>
<tr>
	<td>Cress Store</td>
	<td>Rafael</td>
	<td>Campos</td>
</tr>
<tr>
	<td>All Season Gifts</td>
	<td>Rafael</td>
	<td>Campos</td>
</tr>
<tr>
	<td>Brookings Direct</td>
	<td>Megan</td>
	<td>Gradey</td>
</tr>
<tr>
	<td>Johnson's Department Store</td>
	<td>Megan</td>
	<td>Gradey</td>
</tr>
<tr>
	<td>Cricket Gift Shop</td>
	<td>Megan</td>
	<td>Gradey</td>
</tr>
<tr>
	<td>Kline's</td>
	<td>Megan</td>
	<td>Gradey</td>
</tr>
<tr>
	<td>The Everything Shop</td>
	<td>Hui</td>
	<td>Tian</td>
</tr>
<tr>
	<td>Grove Historical Museum Store</td>
	<td>Hui</td>
	<td>Tian</td>
</tr>
<tr>
	<td>Almondton General Store</td>
	<td>Hui</td>
	<td>Tian</td>
</tr>
<tr>
	<td>Unique Gifts</td>
	<td>Hui</td>
	<td>Tian</td>
</tr>
</table>
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
	//resource mysqli_query ()
	
		$query = "SELECT CustomerName, FirstName, LastName FROM TAL ORDERBY LastName ASC";
		$data = mysqli_query($dbc, $query)
		OR die('<p>Could not connect to MySQL.</p> '.
		mysqli_connect_error());
		
		echo '<table>';
		while ($row = mysqli_fetch_array($data)) {
			// Display customer information
			echo '<tr><td>' . $row['CustomerName'] . '</td>';
			echo '<td>' . $row['FirstName'] . '</td>';
			echo '<td>' . $row['LastName'] . '</td></tr>';
			
		}//end while loop
		echo '</table>';
		
		mysqli_close($dbc);
?>
  </body>
  </html>
