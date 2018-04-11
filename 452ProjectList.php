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
  <h1 class="h1text"> View Order Number/Date and The Customer Who Ordered!</h1>
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
	<th>OrderNum</th>
	<th>OrderDate</th>
<tr>
	<td>Toys Galore</td>
	<td>51608</td>
	<td>2015-10-12</td>
</tr>
<tr>
	<td>The Everything Shop</td>
	<td>51610</td>
	<td>2015-10-12</td>
</tr>
<tr>
	<td>Johnson's Department Store</td>
	<td>51613</td>
	<td>2015-10-13</td>
</tr>
<tr>
	<td>Brookings Direct</td>
	<td>51614</td>
	<td>2015-10-13</td>
</tr>
<tr>
	<td>Almondton General Store</td>
	<td>51617</td>
	<td>2015-10-15</td>
</tr>
<tr>
	<td>Toys Galore</td>
	<td>51619</td>
	<td>2015-10-15</td>
</tr>
<tr>
	<td>Almondton General Store</td>
	<td>51623</td>
	<td>2015-10-15</td>
</tr>
<tr>
	<td>Unique Gifts</td>
	<td>51625</td>
	<td>2015-10-16</td>
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
	
	$query = "SELECT CustomerName, OrderNum, OrderDate FROM TAL ORDERBY OrderDate ASC";
		$data = mysqli_query($dbc, $query)
		OR die('<p>Could not connect to MySQL.</p> '.
		mysqli_connect_error());
		
		echo '<table>';
		//Print headers
		for ($c=0; $c<mysql_numfields($data); $c++){
			print "<th>". mysql_field_name($data, $c) . "</th>";
		}
		//Print Rows
		while ($row = mysqli_fetch_array($data)) {
			echo '<tr><td>' . $row['CustomerName'] . '</td>';
			echo '<td>' . $row['OrderNum'] . '</td>';
			echo '<td>' . $row['OrderDate'] . '</td></tr>';
			
		}//end while loop
		echo '</table>';
	
		mysqli_close($dbc);
?>
  </body>
  </html>
