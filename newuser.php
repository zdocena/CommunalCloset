<!DOCTYPE html> 
<html>

<head>
	<title>Communal Closet | New User</title> 
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
	<h1>Join Communal Closet</h1>
	<!-- <a href="index.php" data-icon="back" id="back" class="ui-btn-right">Back</a> -->

	</div><!-- /header -->

	<div data-role="content">
	  <center>
	  <div class="ui-hide-label" style="width:90%">
	      <label for="firstName">First Name:</label>
	      <input type="text" name="first" id="firstName" placeholder="First Name"/>
      </div>
	  <div class="ui-hide-label" style="width:90%">
	    <label for="lastName">Last Name:</label>
	    <input type="text" name="last" id="lastName" placeholder="Last Name"/>
	  </div>
	  <div class="ui-hide-label" style="width:90%">
	    <label for="email">Email:</label>
	    <input type="text" name="email" id="email" placeholder="Email"/>
	  </div>
	  <div class="ui-hide-label" style="width:90%">
	    <label for="userName">Username:</label>
        <input type="text" name="username" id="userName" placeholder="Username"/>
	  </div>
	  <div class="ui-hide-label" style="width:90%">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="Password"/>
	  </div>
	  <div class="ui-hide-label" style="width:90%">
        <label for="password2">Confirm Password:</label>
        <input type="password" name="password2" id="password2" placeholder="Confirm Password"/>
	  </div>
	  <!-- <a href="search.php">
          <button type="button" data-theme="b">Sign Up!</button> 
      </a>
	  <a href="index.php">
          <button type="button">Cancel</button> 
      </a> -->
	  <fieldset class="ui-grid-a">
	    <div class="ui-block-a"><a href="index.php" data-role="button">Cancel</a></div>
	    <div class="ui-block-b"><a href="search.php" text-align="center" data-role="button" data-theme="b">Sign Up!</a></div>	   
      </fieldset>
	  </center>
	</div><!-- /content -->
</div><!-- /page -->

</body>
</html>