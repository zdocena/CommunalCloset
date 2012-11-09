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
		<center>
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
			$items = array();
			$result = mysql_query($query);
			while($row = mysql_fetch_assoc($result)) {
				$items[] = $row;
			}
			
			$table = '<table class="itemInfo">';
			$i = 0;
			while ($i < count($items)) {
				// display two items per row
				$table .= '<tr>';
				for ($j=0; $j < 2; ++$j) {
					if ($i < count($items) && $items[$i]["ID"] > 0) {
						$table .= '<td><table><tr><td> <a href="item.php/?id='.$items[$i]["ID"].'"><img src='.$items[$i]["image"].' class="itemInfo" /></a></td></tr> <tr class="blackInfoBox"><td><span class="align-left">'.$items[$i]["price"].'</span><span>'.$items[$i]["username"].'</span><span class="align-right">'.$items[$i]["size"].'</span></td></tr></table></td>';
						++$i;
					}
				}
				$table .= '</tr>';
			}
			$table .= '</table>';
			echo $table;
	  ?>

		<table border="0" cellpadding="0" cellspacing="0" class="itemInfo">
			<tr>
				<td>
					<img src="http://media-cache0.pinterest.com/upload/216032113345434922_KyGDgjjm_c.jpg" class="itemInfo" />
				</td>
			</tr>
			<tr class="blackInfoBox">
				<td>
					hello there
				</td>
			</tr>
			
			
		</table>
		</br></br></br></br></br></br>
		</center>
  </div><!-- /content -->
</div><!-- /page -->

</body>
</html>