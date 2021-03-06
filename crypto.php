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
		<div class="header3">
			<nav>
				<a href="index.html"><img src="images/WEALTH.png" alt=""></a>
				<div class= "nav-links">
					<ul>
					<?php include("navigation.php"); ?>
					</ul>
				</div>		
			</nav>
	<div class="text-box">
		<h1>crypto</h1>
		<p>Investing online has never been easier.<br> All you need is a computer or mobile device and you are good to go.</p>
	</div>	
		</div>
	<!--course-->
	<section class="services">
		<h2>Services We Offer</h2>
		<p>A cryptocurrency is a digital currency sercured by cryptography. Our crypto courses witll teach you about the investments of the future. This is the next generation of stocks and bonds.</p>
		
		<div class="row">
			<div class="services-col">
				<h3>Bitcoin COURSE</h3>
				<p>Our bitcoin course will teach you the various aspects of the main currency in the crypto market, <b>Bitcoin!</b></p>
			</div>
			<div class="services-col">
				<h3>Crypto Index Funds COURSE</h3>
				<p>Crypto index funds are just like regular index funds that track the stock market. It has been constructed to match or track the parts of the crypto market index</p>
			</div>
			<div class="services-col">
				<h3>NFTs COURSE</h3>
				<p>Our NFT course teaches you alot about decentalized markets, how to buy and sell art and what the best art pieces to buy are. </p>
			</div>
			<div class="services-col">
				<h3>Altcoins COURSE</h3>
				<p>The Altcoins course teaches you about other forms of crypto currency. This course is more about smaller coins and how to spot the next bitcoin.</p>
			</div>
		</div>
	</section>
	
	<section class="crypto">
		<div class="row">
			<div class="services-col">
				<img src="images/bitcoin.png" alt="bitcoin">
				<div class="layer">
					<h3>BITCOIN COURSE: $500</h3>
				</div>
			</div>
			<div class="services-col">
				<img src="images/crypto_index.png" alt="crypto index">
				<div class="layer">
					<h3>CRYPTO INDEX FUNDS COURSE: $1000</h3>
				</div>
			</div>
			<div class="services-col">
				<img src="images/monkee.png" alt="NFTs">
				<div class="layer">
					<h3>NFTs COURSE: $1500</h3>
				</div>
			</div>
			<div class="services-col">
				<img src="images/alt_coin.png" alt="Altcoins">
				<div class="layer">
					<h3>ALTCOINS COURSE: $2000</h3>
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
		<p><b>References:<a href="https://www.investopedia.com/investing/commodities-trading-overview/">COMMODITIES</a></b></p>
	</section>
	<!--footer-->
	<section class="footer">
		<?php include("footer.php"); ?>
	</section>
		
	</body>
	</html>