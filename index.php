<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Basic HTML elements"/>
		<meta name="keywords" content="HTML5, tags"/>
		<meta name="author" content="Ntemesha Ntambu"/>
		<meta name="viewport" content="with=device-width, initial-scale=1.0"/>
		<title>WEALTH.COM</title>
		<link rel="stylesheet" href="style.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com"/>
		<link rel="preconnect" href="https://fonts.gstatic.com"/>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&amp;display=swap" rel="stylesheet"/>
	</head>
	<body>
		<!-- Navigation -->
		<div class="header1">
			<nav>
				<a href="index.html"><img src="images/WEALTH.png" alt=""/></a>
				<div class= "nav-links">
					<ul>
					<?php include("navigation.php"); ?>
					</ul>
				</div>
			</nav>
		</div>
		<!-- texted box -->
	<div class="text-box">
		<h1>world's greatest investing website</h1>
		<p>Investing online has never been easier.<br/> All you need is a computer or mobile device and you are good to go.</p>
		<a href="#information" class="hero-btn">Click here to know more</a>
	</div>	
	
	
		<!-- Services-->
	
	<section class="services">
		<h2 id="information">Services We Offer</h2>
		<p>The services shown below are part of the Wealth.com exclusive course catelog</p>
		
		<div class="row">
			<div class="services-col">
				<h3>Stocks</h3>
				<p>A stock also know as equity is a security that represents that you own a fraction of a corporation. This entitles you, the owner to a proportion of the corporation's assets and profits.</p>
			</div>
			<div class="services-col">
				<h3>Crypto</h3>
				<p>A cryptocurrency is a digital currency sercured by cryptography. Which makes it nearly impossible to counterfeit or double-spend. Many are decentralized networks based on blockchain tecgnology</p>
			</div>
			<div class="services-col">
				<h3>Forex</h3>
				<p>Forex trading is the process of changing one currency into another. It is one of the most actively traded markets in the world. The daily trading volume for forex is $6.6 trilion </p>
			</div>
			<div class="services-col">
				<h3> Commodity </h3>
				<p>A commodity is a basic good used in business that is interchange-able with other goods of the same type. Traditional example includes, grains, gold beef, oil and natural gas</p>
			</div>
		</div>
	

	</section>
	
		<!--location-->
	
	<section class="location">
		<h2>Our Main Headquaters</h2>
		<p>Located in the heart of new york, where the happening happens, <b>Wallstreet!</b></p>
		<p><iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d756.1399690624867!2d-74.00950286502719!3d40.70568987809025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a165bedccab%3A0x2cb2ddf003b5ae01!2sWall%20St%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2smy!4v1648741532247!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
		
	</section>
		<!--footer-->
	<section class="footer">
		<?php include("footer.php"); ?>
	</section>
	</body>
	</html>