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
  <div data-role="page" style="background-image:url(closetimage.jpeg);background-repeat:no-repeat;background-size:cover;">
      <!-- <h1 align="center"><font color="FFFFFF">Welcome to Communal Closet</font></h1> -->
    <center>
      <div data-role="header" style="height:22px;padding:10px">
        Welcome to Communal Closet
      </div> 
    
    <form action="search.php" method="post" style="width:90%">
      <div class="ui-hide-label">
        <!--<label for="username">Username:</label>-->
        <input type="text" name="username" id="username" placeholder="Username"/>
      </div>
      <div class="ui-hide-label">
        <!--<label for="password">Password:</label>-->
        <input type="password" name="password" id="password" placeholder="Password"/>
      </div>
      <input type="submit" data-theme="b" name="login" value="Login"/>
      <a href = "newuser.php" data-role="button" data-mini="true" data-inline="true" style="bottom:10px">
            New User? Sign Up!
          </a>
      </form>
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