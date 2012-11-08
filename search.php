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
      <a href="search.php" data-role="button" data-icon="home" id="home" class="ui-btn-left" data-iconpos="notext"></a>
      <table>
        <tr>
          <td><a href="add-item.php" class="ui-btn-middle">Add item</a></td>
          <td><a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a></td>
        </tr>
      </table>
      
    </div><!-- /header -->

    <div data-role="content">
    <fieldset class="ui-grid-a">
      <div class="ui-block-a" style="width:85%">
        <div class="ui-hide-label">
      <!--<label for="query">Query:</label>-->
          <input type="text" name="query" id="query" placeholder="Search for..."/>
      </div>
    </div>
    <div class="ui-block-b" style="width:15%">
      <a href="results.php" ><img src="searchicon.jpg" width="40px" height="40px" style="padding-left:2px; padding-top:5px;"/></a>
    </div>
      </fieldset>
    <!-- <input type="text" name="query" id="query"> -->
      <!--<a href="results.php" img src="searchicon.jpg>
        <!--<button type="button">Search</button> -->
      <!--</a>-->
    <!-- <div class="ui-hide-label">
      <!-- <label for="search-basic">Search Input:</label> -->
      <!-- <input type="search" name="search" id="search-basic" data-icon="search" place-holder="Search for clothes">
    </div> -->
    
    
    <?php 
      include("config.php");
    $query = "SELECT * FROM items";
      $allDresses = array();
    $result = mysql_query($query);
    while($row = mysql_fetch_assoc($result)) {
      $allDresses[] = $row;
    }
    $table = '<table>';
    $counter = 0;
    $total = count($allDresses);
    if ($total % 2 != 0) {
      $total += 1;
    }
    
    for ($x = 0; $x < count($allDresses); ++$x) {
          if ($counter % 2 == 0) {
        $table .= '<tr><td><a href="'.$allDresses[$x]["itemlink"].'"><img width=140px height=210px src="'.$allDresses[$x]["image"].'"/></a></td>';
      } else {
        $table .= '<td><a href="'.$allDresses[$x]["itemlink"].'"><img width=140px height=210px src="'.$allDresses[$x]["image"].'"/></a></td></tr>';
      }
      $counter++;
      #echo "<img width=180px height=276px src='".$allDresses[$x]["image"]."' />";
    }
          $table .= '</table>';
          echo $table;
    ?>
  </div>
    
  </div><!-- /page -->

  </body>
</html>