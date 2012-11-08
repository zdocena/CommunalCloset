<!DOCTYPE html> 
<html>

<head>
  <title>Communal Closet | Search Results</title> 
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
  <h1>Search Results</h1>
  <a href="search.php" data-role="button" data-icon="home" id="home" class="ui-btn-left" data-iconpos="notext"></a>
  <a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>
  </div>
  <div data-role="content">
    <fieldset class="ui-grid-a">
      <div class="ui-block-a" style="width:85%">
        <div class="ui-hide-label">
      <!--<label for="query">Query:</label>-->
          <input type="text" name="query" id="query" placeholder="Search for more items..."/>
      </div>
    </div>
    <div class="ui-block-b" style="width:15%">
      <a href="results.php" ><img src="searchicon.jpg" width="40px" height="40px" style="padding-left:2px; padding-top:5px;"/></a>
    </div>
      </fieldset>
    <?php 
    include("config.php");
    $query = "SELECT * FROM items";
    $allDresses = array();
    $result = mysql_query($query);
    while($row = mysql_fetch_assoc($result)) {
    $allDresses[] = $row;
    }
    $table = '<table>';
    for ($x = 0; $x < count($allDresses); ++$x) {
      $table .= '<tr style="display:block;border:1px solid black"><td><a href="'.$allDresses[$x]["itemlink"].'"><img width=140px height=210px src="'.$allDresses[$x]["image"].'"/></a></td>';
        $table .= '<td><a style="color: #000000;" href="'.$allDresses[$x]["itemlink"].'"><p>'.$allDresses[$x]["name"].'</p></a><p>Price: $'.$allDresses[$x]["price"].'/day</br>Size: '.$allDresses[$x]["size"].'</br>Owner: <a href="tiffany.php">'.$allDresses[$x]["username"].'</a></p></td></tr>';
    }
    $table .= '</table>';
      echo $table;
  ?>
  </div>
</div><!-- /page -->

</body>
</html>