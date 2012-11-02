<!DOCTYPE html> 
<html>

<head>
  <title>Communal Closet | User Profile</title> 
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
      <h1>Communal Closet</h1>
      <a href="add-item.php" class="ui-btn-right">+</a>
      <a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>
    </div><!-- /header -->
  
   <h1 align="center">Closet</h1>
    <center text-align="center" style="width:90%">
      
      <table>
        <?php
          // need to get username
          include("config.php");
          $user_query = "SELECT * from items where username = 'zdocena';";
          $result = mysql_query($user_query);

          while ($row = mysql_fetch_assoc($result)) {
            echo $row["username"];
          }
          
        ?>
        <tr>
          
        </tr>
      
      </table>
      
    </center>
  </div><!-- /page -->
</body>
</html>