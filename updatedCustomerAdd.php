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
    <a href="updatedIndex.php">Return to the Home Page</a>
    <a href="updatedOverview.php">Return to the Overview Page</a>
  </div>
</div>

<form action="updatedCustomerAdded.php" method="post">

<p>Customer Number:
	<input type="text" name="customerNum" size="30" value="" />
</p>

<p>Customer Name:
	<input type="text" name="customerName" size="30" value="" />
</p>

<p>Street:
	<input type="text" name="street" size="30" value="" />
</p>

<p>City:
	<input type="text" name="city" size="30" value="" />
</p>

<p>State (2 Characters):
	<input type="text" name="state" size="30" maxlength="2" value="" />
</p>

<p>Postal Code:
	<input type="text" name="postalCode" size="30" maxlength="5" value="" />
</p>

<p>Balance:
	<input type="text" name="balance" size="30" value="" />
</p>

<p>Credit Limit:
	<input type="text" name="creditLimit" size="30" value="" />
</p>

<p>Rep Number:
	<input type="text" name="repNum" size="30" value="" />
</p>

<p>
	<input type="submit" name="submit" value="Send" />
</p>

</form>
</body>
</html>