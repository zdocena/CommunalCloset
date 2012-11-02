<!DOCTYPE html> 
<html>

<head>
  <title>Communal Closet | Enter</title> 
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
    <h1>My Title</h1>
    <a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>

  </div><!-- /header -->

  <div data-role="content">
    
    <?php
    // This is a hack. You should connect to a database here.
    include("config.php");
    
    // get fields

    $username = "zdocena";
    $img_url = $_POST["url"];
    $description = $_POST["description"];
    $size = $_POST["size"];
    $price = $_POST["price"];
    
    echo $size;
    echo $price;
    echo $description;
    echo $username;
    
    
    // add tuple to items table
    $insert = 'INSERT INTO "items" ("username", "description", "size", "price", "image") 
               VALUES ("'.$username.'", "'.$description.'", "'.$size.'", "'.$price.'", "'.$img_url.'");';
    

    $result = mysql_query($insert);
    /*
    $id = mysql_insert_id();
    
    // redirect or show new item
    if ($id) {
      echo "Hello"
    } else {
      echo "There was an error adding your new item."
    }
    */
    ?>
    
  </div><!-- /content -->


  
  <script type="text/javascript">
    $("#logout").click(function() {
      localStorage.removeItem('username');
      $("#form").show();
      $("#logout").hide();
    });
  </script>
</div><!-- /page -->

</body>
</html>