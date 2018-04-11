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
    <a href="index.php">Return to the Home Page</a>
    <a href="452Project.php">Return to the Overview Page</a>
  </div>
</div>

<br>
<table>
	<th>ItemNum</th>
	<th>Description</th>
	<th>OnHand</th>
	<th>Category</th>
	<th>Storehouse</th>
	<th>Price</th>
<tr>
	<td>AH74</td>
	<td>Patience</td>
	<td>9</td>
	<td>GME</td>
	<td>3</td>
	<td>22.99</td>
</tr>
<tr>
	<td>BR23</td>
	<td>Skittles</td>
	<td>21</td>
	<td>GME</td>
	<td>2</td>
	<td>29.99</td>
</tr>
<tr>
	<td>CD33</td>
	<td>Wood Block Set (48 piece)</td>
	<td>36</td>
	<td>TOY</td>
	<td>1</td>
	<td>89.49</td>
</tr>
<tr>
	<td>DL51</td>
	<td>Classic Railway Set</td>
	<td>12</td>
	<td>TOY</td>
	<td>3</td>
	<td>107.95</td>
</tr>
<tr>
<td>DR67</td>
	<td>Giant Star Brain Teaser</td>
	<td>24</td>
	<td>PZL</td>
	<td>2</td>
	<td>31.95</td>
</tr>
<tr>
	<td>DW23</td>
	<td>Mancala</td>
	<td>40</td>
	<td>GME</td>
	<td>3</td>
	<td>50.00</td>
</tr>
<tr>
	<td>FD11</td>
	<td>Rocking Horse</td>
	<td>8</td>
	<td>TOY</td>
	<td>3</td>
	<td>124.95</td>
</tr>
<tr>
	<td>FH24</td>
	<td>Puzzle Gift Set</td>
	<td>65</td>
	<td>PZL</td>
	<td>1</td>
	<td>38.95</td>
</tr>
<tr>
	<td>KA12</td>
	<td>Cribbage Set</td>
	<td>56</td>
	<td>GME</td>
	<td>3</td>
	<td>75.00</td>
</tr>
<tr>
	<td>KD34</td>
	<td>Pentominoes Brain Teaser</td>
	<td>60</td>
	<td>PZL</td>
	<td>2</td>
	<td>14.95</td>
</tr>
<tr>
	<td>KL78</td>
	<td>Pick Up Sticks</td>
	<td>110</td>
	<td>GME</td>
	<td>1</td>
	<td>10.95</td>
</tr>
<tr>
	<td>MT03</td>
	<td>Zauberkasten Brain Teaser</td>
	<td>45</td>
	<td>PZL</td>
	<td>1</td>
	<td>45.79</td>
</tr>
<tr>
	<td>NL89</td>
	<td>Wood Block Set (62 piece)</td>
	<td>32</td>
	<td>TOY</td>
	<td>3</td>
	<td>119.75</td>
</tr>
<tr>
	<td>TR40</td>
	<td>Tic Tac Toe</td>
	<td>75</td>
	<td>GME</td>
	<td>2</td>
	<td>13.99</td>
</tr>
<tr>
	<td>TW35</td>
	<td>Fire Engine</td>
	<td>30</td>
	<td>TOY</td>
	<td>2</td>
	<td>118.95</td>
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
	
	$query = "SELECT ItemNum, Description, OnHand, Category, Storehouse, Price FROM TAL ORDERBY ItemNum ASC";
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
			echo '<tr><td>' . $row['ItemNum'] . '</td>';
			echo '<td>' . $row['Description'] . '</td>';
			echo '<td>' . $row['OnHand'] . '</td>';
			echo '<td>' . $row['Category'] . '</td>';
			echo '<td>' . $row['Storehouse'] . '</td>';
			echo '<td>' . $row['Price'] . '</td></tr>';
			
		}//end while loop
		echo '</table>';
	
		mysqli_close($dbc);
?>
  </body>
  </html>
