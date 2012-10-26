<!DOCTYPE html> 
<html>

<head>
	<title>Communal Closet | Login</title> 
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

	<div data-role="header">
	<h1>Log in</h1>
	<a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

	</div><!-- /header -->

	<div data-role="content">
	  Enter any username and password:
    <label for="foo">Username:</label>
    <input type="text" name="username" id="foo">
    <label for="bar">Password:</label>
    <input type="password" name="password" id="bar">
    <a href="search.php">
      <button type="button">Login</button> 
    </a>
    
	</div><!-- /content -->
</div><!-- /page -->

</body>
</html>