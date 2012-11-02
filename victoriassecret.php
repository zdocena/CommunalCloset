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
	<a href="results.php"STYLE="text-decoration:none">
		<button type="button">Back</button>
	</a>
	<center>
	<h1> Teal Victoria's Secret Dress </h1> 
	<img src= http://media.victoriassecret.com/product/prodpri2/V351887_2RD.jpg width="240" height="370">
	 <h1> $5/day </h1>
	 <p>This little dress is party-ready. All-over sequins mean all-out glamour, and the deep crossover v-neck displays just enough decolletage. Curve-loving, flirty and full of sparkle, this is your go-to dress when fun and fashion are on the agenda. </p>
	 <select name="pickup" class="ui-select">
           <option>Available Pick Up Locations</option>
           <option value="EastCampus">East Campus</option>
           <option value="WestCampus">West Campus</option>
           <option value="Tressider">Tressider</option>
		   <option value="OakCreek">Oak Creek</option>
		   <option value="EV">Escondido Village</option>
         </select>
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
                <option value="8">8</option>
				<option value="9">9</option>
				<option value="10">10</option>
				<option value="11">11</option>
				<option value="12">12</option>
				<option value="13">13</option>
				<option value="14">14</option>
				<option value="15">15</option>
				<option value="16">16</option>
				<option value="17">17</option>
				<option value="18">18</option>
				<option value="19">19</option>
				<option value="20">20</option>
				<option value="21">21</option>
				<option value="22">22</option>
				<option value="23">23</option>
				<option value="24">24</option>
				<option value="25">25</option>
				<option value="26">26</option>
				<option value="27">27</option>
				<option value="28">28</option>
				<option value="29">29</option>
				<option value="30">30</option>
				<option value="31">31</option>
				
            </select>
    
            <label for="select-choice-year">Year</label>
            <select name="select-choice-year" id="select-choice-year">
                <option>Year</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
            </select>
        </fieldset>
	</div>
		<a href="confirmation.php"STYLE="text-decoration:none"> <!--data-role="button" data-rel="dialog" data-transition="pop" data-theme="b"-->
		<button type = "button">Checkout</button></a>
	</center>
</body>
</html>
