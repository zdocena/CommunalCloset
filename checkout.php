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
<body> 

<!-- Start of first page -->
<div data-role="page" id="foo">

	<div data-role="header">
		<h1>User Info</h1>
	</div><!-- /header -->

	<div data-role="content">	
	  Please confirm your Username and Password:
  <label for="foo">Username:</label>
  <input type="text" name="username" id="foo">
  <label for="bar">Password:</label>
  <input type="text" name="password" id="bar">
  <ul data-role="listview" data-inset="true" data-theme="a">
	<li><a href="acura.html">Available Pick Up Locations</a></li>
</ul>
 <!--input type="text">-->
  <label>Number of Credits for Rental</label>
  <input type="text">
  
  <a href="confirmation.php">
    <button type="button">Checkout</button> 
 <!-- </a>
		<p>I'm first in the source order so I'm shown as the page.</p>		
		<p>View internal page called <a href="#bar">bar</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>User Info</h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- Start of second page -->
<div data-role="page" id="bar">

	<div data-role="header">
		<h1>Bar</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>		
		<p><a href="#foo">Back to foo</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->
</body>

<!---<div data-role="page">
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