<!DOCTYPE html> 
<html>

<head>
	<title>Communal Closet | Welcome</title> 
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
      <h1 align="center">Welcome to Communal Closet</h1>
	
	  <center>
	    <div class="ui-hide-label" style="width:90%">
	      <label for="username">Username:</label>
	      <input type="text" name="username" id="username" value="" placeholder="Username"/>
        </div>
	    <div class="ui-hide-label" style="width:90%">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" value="" placeholder="Password">
	    </div>
	    <a href="search.php" text-align="center" data-role="button" data-theme="b" style="width:90%">Login</a>	   
        <a href = "newuser.php">
          New User? Sign Up!  
        </a>
	  </center>  
	  
  
  
  
  <!-- <a href="login.php">
    <button type="button">Login</button> 
  </a>
  <center>
    <a href = "newuser.php">
      New User? Sign Up!  
    </a>
  </center> -->

  </div><!-- /page -->

</body>
</html>