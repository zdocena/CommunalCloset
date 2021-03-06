<!DOCTYPE html> 
<html>

<head>
	<title>Communal Closet | Checkout</title> 
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
<body> 
<!---?php
	include("config.php");
	$query = "SELECT * FROM items";
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
	
		echo "<option value='".$row["asin"]."'>".$row["title"]."</option>";

	}
?--->
var user = localStorage['<?=$_Post["username"]?>']
var price = localStorage['<?=$_Post["price"]?>'}
var image = localStorage['<?=$_Post["image"]?>']

<!-- Start of first page -->
<div data-role="page" id="foo">

  <div data-role="header">
    <h1>Communal Closet</h1>
    <a href="add-item.php" class="ui-btn-right">+</a>
    <a href="#" data-icon="check" id="logout" class="ui-btn-right">Logout</a>
  </div><!-- /header -->

	<div data-role="content">	
	  Confirm Your Rental.$_POST["username"]
	  <td><img width='50' class='pretty' src='".$_Post["image"]."' /></td>
	  <p>.$_Post["price"]</p> 
   </div>
	 <div data-role="fieldcontain">
        <fieldset data-role="controlgroup">
            <legend>Pick-Up Date:</legend>
            
            <label for="select-choice-month">Month</label>
            <select name="select-choice-month" id="select-choice-month">
                <option>Month</option>
                <option value="jan">January</option>
                <option value="dec">December</option>
                <option value="feb">February</option>
                <option value="mar">March</option>
                <option value="apr">April</option>
                <option value="may">May</option>
                <option value="jun">June</option>
                <option value="jul">July</option>
                <option value="aug">August</option>
                <option value="sep">September</option>
                <option value="oct">October</option>
                <option value="nov">November</option>
                <option value="dec">December</option>
            </select>
    
            <label for="select-choice-day">Day</label>
            <select name="select-choice-day" id="select-choice-day">
                <option>Day</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
            </select>
    
            <label for="select-choice-year">Year</label>
            <select name="select-choice-year" id="select-choice-year">
                <option>Year</option>
                <option value="2013">2011</option>
                <option value="2012">2010</option>
            </select>
        </fieldset>
	</div>

 <!--input type="text">-->
  
  <a href="confirmation.php">
    <button type="button">Checkout</button> 
 <!-- </a>
		<p>I'm first in the source order so I'm shown as the page.</p>		
		<p>View internal page called <a href="#bar">bar</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4></h4>
	</div><!-- /footer -->
</div><!-- /page -->


<!-- Start of second page -->
<div data-role="page" id="bar">

	<div data-role="header">
		<h1>Bar</h1>
	</div><!-- /header -->

	<div data-role="content">	
		<p>I'm the second in the source order so I'm hidden when the page loads. I'm just shown if a link that references my id is beeing clicked.</p>		
		<p><a href="#foo">Back to foo</a></p>	
	</div><!-- /content -->

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->
</body>

<!---<div data-role="page">
  Enter credit card info:
  <label for="foo">First Name:</label>
  <input type="text" name="username" id="foo">
  <label for="bar">Last Name:</label>
  <input type="text" name="password" id="bar">
  <label>Credit Card Number:</label>
  <input type="text">
  <label>Address</label>
  <input type="text">
  
  <a href="confirmation.php">
    <button type="button">Checkout</button> 
  </a>
</div><!-- /page -->

</body>
</html>