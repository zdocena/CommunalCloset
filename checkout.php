<!DOCTYPE html> 
<html>

<head>
	<title>Communal Closet | Checkout</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="apple-touch-icon" href="appicon.png" />
	<link rel="apple-touch-startup-image" href="startup.png">
	
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.js"></script>

</head>  
<body> 

<div data-role="page">
  Enter credit card info:
  <label for="foo">First Name:</label>
  <input type="text" name="username" id="foo">
  <label for="bar">Last Name:</label>
  <input type="text" name="password" id="bar">
  <label>Credit Card Number:</label>
  <input type="text">
  <label>Address</label>
  <input type="text">
  
  <a href="confirmation.php">
    <button type="button">Checkout</button> 
  </a>
</div><!-- /page -->

</body>
</html>