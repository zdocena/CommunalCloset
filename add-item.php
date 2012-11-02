<?php
if (isset($_POST['url'])) {
    include("config.php");

    $username = $_COOKIE['username'];
    $img_url = $_POST["url"];
    $description = $_POST["description"];
    $size = $_POST["size"];
    $price = $_POST["price"];

    // add tuple to items table
    $insert = 'INSERT INTO items (username, description, size, price, image) 
               VALUES ("'.$username.'", "'.$description.'", "'.$size.'", '.$price.', "'.$img_url.'");';

    $result = mysql_query($insert);
    header('Location: search.php');
}
?>
<!DOCTYPE html> 
<html>

<head>
  <title>Communal Closet | Add Item</title> 
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
    
    <h1 align="center">Add a new item</h1>
    <center text-align="center" style="width:90%">
      <form action="add-item.php" method="post">
        <div class="ui-hide-label" style="width:90%">
          <select class="ui-select">
            <option>Select type of clothing</option>
            <option>top</option>
            <option>bottom</option>
            <option>outerwear</option>
            <option>dress</option>
          </select>
    
          <select value="<?php echo $size; ?>" name="size" class="ui-select">
            <option>Select size</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
          </select>
      
          <textarea value="<?php echo $description; ?>" type="text" name="description" id="description" placeholder="Description"></textarea>
          <input value="<?php echo $price; ?>" type="number" name="price" placeholder="price" />
          <input value="<?php echo $url; ?>" type="url" name="url" placeholder="image link" value="http://www.google.com"/>
          
          <fieldset class="ui-grid-a" style="width:95%">
            <div class="ui-block-a"><a href="search.php" data-role="button">Cancel</a></div>
            <div class="ui-block-b"><input type="submit" data-role="button" data-theme="b" style="width:70%" value="Add" /></div>
            
          
          </fieldset>
        </div>
      </form>
    </center>
  </div><!-- /page -->
</body>
</html>