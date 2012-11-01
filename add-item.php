<!DOCTYPE html> 
<html>

<head>
	<title>Communal Closet | Confirmation</title> 
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
  <h1 align="center">Add a new item</h1>
  </br>
  <form action="formActions/add-item.php" method="post">
    
    <label for="description">description</label>
    <input type="text" name="description" id="description" />
    
    <label>size</label>
    <select>
      <option>S</option>
      <option>M</option>
      <option>L</option>
    </select>
    
    <label>price</label>
    <input type="text" />
    
    <label for="imageLink">image url</label>
    <input type="text" name="imageLink" id="imageLink" />
    
  </form>
</div><!-- /page -->

</body>
</html>