<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Basic HTML elements"/>
		<meta name="keywords" content="HTML5, tags"/>
		<meta name="author" content="Ntemesha Ntambu"/>
		<meta name="viewport" content="with=device-width, initial-scale=1.0">
		<title>WEALTH.COM</title>
		<link rel="stylesheet" href="style.css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	</head>
	<body>
	<!-- Navigation -->
		<div class="header4">
			<nav>
				<a href="index.html"><img src="images/WEALTH.png" alt=""></a>
				<div class= "nav-links">
					<ul>
					<?php include("navigation.php"); ?>
					</ul>
				</div>		
			</nav>
			<!-- Services -->
	<div class="text-box">
		<h1>Forex</h1>
		<p>Investing online has never been easier.<br> All you need is a computer or mobile device and you are good to go.</p>
	</div>	
		</div>
		
		<section class="services">
		<h2>Services We Offer</h2>
		<p>Forex trading is the process of changing one currency into another. It is one of the most actively traded markets in the world. The daily trading volume for forex is $6.6 trilion.</p>
		
		<div class="row">
			<div class="services-col">
				<h3>FOREX TRADING SIGNALS</h3>
				<p>This service is for those who already have an Idea on forex trading and want signals from our professionals for further confirmation on their own analysis.</p>
			</div>
			<div class="services-col">
				<h3>MAJOR CURRENCY PAIRS GUIDE</h3>
				<p>The major currency pairs guide will teach you how to trade what the big boys trade. You will learn to trade pairs such as the US dollar, Aussie Dollar and japanese yen.</p>
			</div>
			<div class="services-col">
				<h3>EXOTIC PAIRS GUIDE</h3>
				<p>The exotic pairs guide is a course that teaches you how to trade exotic currencies such the south african rand, the singapore dollar and chinese yuan and more.</p>
			</div>
			<div class="services-col">
				<h3>FULL GUIDE</h3>
				<p>Our full forex course covers information from the other course offerings and combines them into one nice package that is simple for you to learn.</p>
			</div>
		</div>
	</section>
		
		<section class="crypto">
		<!-- Purchase -->
		<div class="row">
			<div class="services-col">
				<img src="images/major_pairs.png" alt="Trading signals">
				<div class="layer">
					<h3>FOREX TRADING SIGNALS: $500</h3>
				</div>
			</div>
			<div class="services-col">
				<img src="images/major.jpg" alt="">
				<div class="layer">
					<h3>MAJOR CURRENCY PAIRS GUIDE: $1000</h3>
				</div>
			</div>
			<div class="services-col">
				<img src="images/exotic.jpg" alt="exotic pairs">
				<div class="layer">
					<h3>EXOTIC PAIRS GUIDE: $1000</h3>
				</div>
			</div>
			<div class="services-col">
				<img src="images/dollar.png" alt="Full guide">
				<div class="layer">
					<h3>FULL GUIDE: $5000</h3>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="services-col">
				<a href="" class="hero-btn2">Click here to purchase course</a>	
			</div>
			<div class="services-col">
				<a href="" class="hero-btn2">Click here to purchase course</a>
			</div>
			
			<div class="services-col">
				<a href="" class="hero-btn2">Click here to purchase course</a>
			</div>

			<div class="services-col">
				<a href="" class="hero-btn2">Click here to purchase course</a>
			</div>
		</div>
		
		
		<p><b>References:<a href="https://www.investopedia.com/articles/forex/11/why-trade-forex.asp">Forex</a></b></p>
	</section>
	<!--footer-->
	<section class="footer">
		<?php include("footer.php"); ?>
	</section>
		
	</body>
	</html>
