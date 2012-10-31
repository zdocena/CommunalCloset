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
	

	</div><!-- /header -->
    
	<!-- <div class="ui-grid">
	  <div class="ui-block-a"></div>
	  <div class="ui-block-b">
	  </div>
    </div> -->
	
	<div data-role="fieldcontain" class="ui-hide-label" data-mini="true">
	  <label for="username">Username:</label>
	  <input type="text" name="username" id="username" value="" placeholder="Username"/>
    </div>
	
	<div data-role="content">
      <div data-role="fieldcontain">
	    <label for="userName">Username:</label>
        <input type="text" name="username" id="userName">
	  </div>
	  <div data-role="fieldcontain">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
	  </div>
    <!-- <div data-role="controlgroup">
      <a href="search.php" data-role="button" data-theme="b">Login</a>
      <a href="index.php" data-role="button">Cancel</a>
    </div> -->
    
	<fieldset class="ui-grid-a">
	  <div class="ui-block-a"><a href="index.php" data-role="button">Cancel</a></div>
	  <div class="ui-block-b"><a href="search.php" text-align="center" data-role="button" data-theme="b">Login</a></div>	   
    </fieldset>
    
	</div><!-- /content -->
</div><!-- /page -->

</body>
</html>