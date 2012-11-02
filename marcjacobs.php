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
<!-- Start of first page -->
<div data-role="page">

	<div data-role="header">
		<h1>Checkout</h1>
	</div><!-- /header -->

	<div data-role="content"> 
	<!---td><img width='50' class='pretty' src='".$_Post["image"]."' /></td--->
	 <img src=http://www.thefashionpolice.net/wp-content/uploads/2009/12/marc-jacobs-sasha-bag.jpg width="104" height="142">
	 <p> $15/day </p>
	 <p> Searching for the perfect cross-body bag? Love our feathered friends? Then this may well be just the ticket. Soft-as-butter leather with elegant gold bird-shaped hardware, this Marc by Marc Jacobs number is big enough for a book, brolly, purse and other everyday accoutrements without being so big you feel like you’re lugging the kitchen sink.</p>
	 <select name="pickup" class="ui-select">
           <option>Available Pick Up Locations</option>
           <option value="EastCampus">East Campus</option>
           <option value="WestCampus">West Campus</option>
           <option value="Tressider">Tressider</option>
		   <option value="OakCreek">Oak Creek</option>
		   <option value="EV">Escondido Village</option>
         </select>
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
	</div>
	
</body>
</html>

