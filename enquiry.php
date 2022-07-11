<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Basic HTML elements"/>
		<meta name="keywords" content="HTML5, tags"/>
		<meta name="author" content="Ntemesha Ntambu"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>WEALTH.COM</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com"/>
		<link rel="preconnect" href="https://fonts.gstatic.com"/>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&amp;display=swap" rel="stylesheet"/>
		  <script src="scripts/validate.js"></script><!-- chnange name to script.js -->

	</head>
	<body>
	<!-- Navigation -->
		<div class="header8">
			<nav>
				<a href="index.html"><img src="images/WEALTH.png" alt=""/></a>
				<div class= "nav-links">
					<ul>
					<?php include("navigation.php"); ?>
					</ul>
				</div>		
			</nav>
		</div>
		<!-- form -->
		<div class="text-box">
		<h1>ENQUIRY</h1>
		</div>	
			<form class="form"  method="get" id="enquiryform" onsubmit="validateForm()" action="submitenquiry.php" novalidate="novalidate">
				<label for="fname">First name</label><br/>
				<input type="text" id="fname" name="fname"  maxlength="25"/><br/>
				<label for="lname">Last name</label><br/>
				<input type="text" id="lname" name="lname" maxlength="25"/><br/>
				<label for="email">Enter your Email:</label><br/>
				<Input type="email" id="email" name="email" /><br/>
				
				<fieldset>
				 <legend>Address</legend>
				<label for="address">Street address</label><br/>
				<input type="text" id="address" name="address" maxlength="40"/><br/>
				<label for="city">City/Town</label><br>
				<input type="text" id="city" name="city" maxlength="20"/><br/>
				<label for="state">State</label><br/>
				<select name="state" id="state" required/>
					<option value="none" selected="selected">---</option>
					<option value="Selangor">Selangor</option>
					<option value="Perak">Perak</option>
					<option value="Negeri Sembilan">Negeri Sembilan</option>
					<option value="Johor">Johor</option>
					<option value="Kedah">Kedah</option>
					<option value="perlis">Perlis</option>
					<option value="Pahang">Pahang</option>
					<option value="Malacca">Malacca</option>
					<option value="Sabah">Sabah</option>
					<option value="Kelantan">Kelantan</option>
					<option value="Penang">Penang</option>
					<option value="Sarawak">Sarawak</option>
				</select><br/>
				<label for="postcode">Postcode</label><br>
				<input type="text" id="postcode" name="postcode" maxlength="5" minlength="5"><br/>
				</fieldset>
				
				<label for="phone">Phone number:</label><br/>
				<input type="tel" id="phone" name="phone" placeholder="+60-12345678"
				pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" maxlength="10" ><br><br>
				<label for="service">Service you would like to enquire about</label><br/>
				<select name="service" id="service">
					<option value="none" selected="selected">---</option>
					<option value="stocks">Stocks</option>
					<option value="crypto">Crypto</option>
					<option value="forex">Forex</option>
					<option value="commodities">Commodities</option>
				</select><br/>
				<label for="enquiryBox">enquiry</label><br/>

				<textarea id="enquiryBox" name="enquiryBox" rows="4" cols="50" placeholder="What would you like to know"></textarea><br/>
				<input type="submit" value="Submit" name= "Submit"/>
			</form>
		<!--footer-->
	<section class="footer">
		<?php include("footer.php"); ?>
	</section>
	</body>
	</html>	
		
		
		
		
		
		
		
		
		
		
		
		