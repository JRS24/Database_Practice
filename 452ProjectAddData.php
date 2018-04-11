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
  <h1 class="h1text"> Add a Customer!</h1>
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

<?php
// set up database connection
	require_once('connectvars.php');
	//If fields are not set, don't allow user to input data.
  if (isset($_POST['submit'])) {
		$customerNum = $_POST['customerNum'];
		$customerName = $_POST['customerName'];
		$street = $_POST['street'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$balance = $_POST['balance'];
		$creditLimit = $_POST['creditLimit'];
		$repNum = $_POST['repNum'];
		
		if (empty($customerNum) || empty($customerName) || empty($street) || empty($city) || empty($state) || empty($zip) || empty($balance) || empty($creditLimit) || empty($repNum)) {
			//One of the fields is blank
			echo 'Please fill out all of the Customer Information.<br />';
			$output_form = 'yes';
		}//end if
	}//end if
	else {
		$output_form = 'yes';
	}//end else
	//If no data is empty, attempt to insert data into the database.
  if (!empty($customerNum) && !empty($customerName) && !empty($street) && !empty($city) && !empty($state) && !empty($zip) && !empty($balance) && !empty($creditLimit) && !empty($repNum)) {
    $dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
      OR die('Could not connect to MySQL. '.
		mysqli_connect_error());

    $query = "INSERT INTO TAL (CustomerNum, CustomerName, Street, City, State, PostalCode, Balance, CreditLimit, RepNum)  VALUES ('$customerNum', '$customerName', '$street', '$city', '$state', '$zip', '$balance', '$creditLimit', '$repNum')";
    mysqli_query($dbc, $query)
      or die ('Data not inserted.');

    echo 'Customer added.';

    mysqli_close($dbc);
  }

  if ($output_form == 'yes') {
?>
<!-- Display input buttons -->
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<label for="customerNum">Customer Number:</label>
		<input type="text" id="customerNum" name="customerNum"><br /><br />
		
		<label for="customerName">Customer Name:</label>
		<input type="text" id="customerName" name="customerName"><br /><br />
			
		<label for="street">Street:</label>
		<input type="text" id="street" name="street"><br /><br />
			
		<label for="city">City:</label>
		<input type="text" id="city" name="city"><br /><br />
			
		<label for="state">State:</label>
		<input type="text" id="state" name="state"><br /><br />
			
		<label for="zip">Zip:</label>
		<input type="text" id="zip" name="zip"><br /><br />
			
		<label for="balance">Balance:</label>
		<input type="text" id="balance" name="balance"><br /><br />
			
		<label for="creditLimit">Credit Limit:</label>
		<input type="text" id="creditLimit" name="creditLimit"><br /><br />
			
		<label for="repNum">Rep Number:</label>
		<input type="text" id="repNum" name="repNum"><br /><br />
			
		<input type="submit" name="submit" value="Submit" />
  </form>

<?php
  }
?>

</body>
</html>
