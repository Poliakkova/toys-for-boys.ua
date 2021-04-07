<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toys for Boys - магазин игрушек</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/toypage.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="icon" type="image/png" href="img/minilogo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<a name="top"></a>
	<a class="top" href="#top"><img src="img/to-top.svg" alt="Наверх"></a>
	
	<div class="mobile-menu">
		<div class="container">
			<div class="small-nav">
				<button class="open-button">
					<img src="img/hamburger.png" alt="Open menu">
				</button>
				<div class="line"></div>
				<a href="index.html"><img class="logoo" src="img/logoo.svg" alt="Toys for boys" ></a>
				<div class="line"></div>
				<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m" class="inst-logo"><img src="img/instagramm.png" alt="Instagram"></a>
			</div>
		</div>
	</div>

	<header id="header" class="header">
		<img src="img/picture1.png" alt="pic1" class="pic1">
		<img src="img/picture2.png" alt="pic2" class="pic2">
		<div class="contain">
			<div class="nav hide">
				<a href="index.html"><img src="img/logo.svg" alt="Toys for boys" class="logo"></a>
					<ul class="menu">
						<li>
							<a href="index.html">Главная</a>
						</li>
						<li>
							<a href="toycatalogue.php">Игрушки</a>
						</li>
						<li>
							<a href="shopabout.html">О магазине</a>
						</li>
						<li>
							<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m">Инстаграмм</a>
						</li>
					</ul>
			</div>
		</div>

		<div class="contain2">
			<div class="container">
			<div id="search" class="search">
				<form name="search-form" action="toycatalogue.php" method="post">
				<input class="field" type="search" name="poisk" placeholder="Введите название...">
				<button type = "submit" class="btn" value="Поиск"><img src="img/loupe.svg" alt="loupe" class="loupe"><div class="poisk-text"> Поиск</div></button>
				</form>
				<div class="output"></div>
			</div>
			</div>
		</div>
	</header>