<?php
$username = '';
if (isset($_COOKIE['username'])) {
    header('Location: search.php');
} else if (isset($_POST['username'])) {
    include("config.php");
    $username = $_POST["username"];
    $user_query = "SELECT * from users where username = '".$username."' and password = '".$_POST["password"]."'";
    $result = mysql_query($user_query);
    $row = mysql_fetch_assoc($result);    
    if ($row["username"] == $username) {
        setcookie('username', $username, time() + 60 * 60 * 24);
        header('Location: search.php');
        exit();
    }
}
?>

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
        <h1>Login</h1>
      </div><!-- /header -->
    
      <div data-role="content">
        <form action="index.php" method="post">
          <label>Username:</label>
          <input type="text" name="username" value="" placeholder="Username" />
          <label>Password:</label>
          <input type="password" name="password" value="" placeholder="Password" />
        
          <a href="index.php">Cancel</a>
          <input type="submit" value="Login" />
        </form>
      </div><!-- /content -->
    </div><!-- /page -->
    
    
    
    
    
    
    
    
    
    
   <!-- 
    
    

  <div data-role="page">

    <div data-role="header">
      <h1>Login</h1>
    </div>
    <div data-role="content">
      <center>
        <div class="ui-hide-label" style="width:90%">
          <label for="username">Username:</label>
          <input type="text" name="username" id="username" value="" placeholder="Username"/>
          </div>
        <div class="ui-hide-label" style="width:90%">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="" placeholder="Password">
        </div>
        <fieldset class="ui-grid-a" style="width:95%">
          <div class="ui-block-a"><a href="index.php" data-role="button">Cancel</a></div>
          <div class="ui-block-b"><a href="search.php" text-align="center" data-role="button" data-theme="b">Login</a></div>     
          </fieldset>
        </center>  
    </div>
  </div>
  -->

  </body>
</html>