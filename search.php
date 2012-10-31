<!DOCTYPE html> 
<html>

  <head>
	<title>Communal Closet | Search</title> 
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
	  <h1>Search</h1>
    </div>

    <div data-role="content">
	  <input type="text" name="query" id="query">
      <a href="results.php">
        <button type="button">Search</button> 
      </a>
	</div>
    
  </div><!-- /page -->

  </body>
</html>