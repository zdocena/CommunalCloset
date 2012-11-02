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
      <h1 align="left">Communal Closet</h1>
      <a href="add-item.php" class="ui-btn-right">+</a>
      <a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>
    </div><!-- /header -->

    <div data-role="content">
    <!--<div class="ui-hide-label" style="width:90%">
      <label for="query">Query:</label>
      <input type="text" name="query" id="query" placeholder="Search for..."/>
      </div>
    <!-- <input type="text" name="query" id="query"> -->
      <!-- <a href="results.php">
        <button type="button">Search</button> 
      </a> -->
    <div class="ui-hide-label">
      <!-- <label for="search-basic">Search Input:</label> -->
      <input type="search" name="search" id="search-basic" data-icon="search" place-holder="Search for clothes">
    </div>
    <script type="text/javascript">
      var w = screen.width;
      var h = screen.height;
    </script>
    <table>
      <?php
      include("config.php");
      $query = "SELECT * FROM items";
      $result = mysql_query($query);
      while ($row = mysql_fetch_assoc($result)) {
        $width = $size[0];
        $ratio = $width / 100;
        $height = $size[1];
        $finalW = $width / $ratio;
        $finalH = $height / $ratio;
        echo "<td><img width=$finalW height=$finalH class='pretty' src='".$row["image"]."' /></td></td>";
      } 
    ?>
    </table>
  </div>
    
  </div><!-- /page -->

  </body>
</html>