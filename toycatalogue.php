
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toys for Boys - каталог игрушек</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/catalogue.css">
	<link rel="stylesheet" href="css/menu.css">

	<link rel="icon" type="image/png" href="img/minilogo.png">
</head>
<body>

	<!--<iframe src="menu.html"></iframe>-->
	<header id="header" class="header">
		<img src="img/picture1.png" alt="pic1" class="pic1">
		<img src="img/picture2.png" alt="pic2" class="pic2">
		<div class="contain">
			<div class="nav">
				<a href="index.html"><img src="img/logo.svg" alt="Toys for boys" class="logo"></a>
					<ul class="menu">
						<li>
							<a href="index.html">Главная</a>
						</li>
						<li>
							<a href="toycatalogue.php">Игрушки</a>
						</li>
						<li>
							<a href="shopabout.html" class="omag1">О магазине</a>
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
				<!--<form action="" method="post">-->
				<input class="field" type="search" name="poisk" placeholder="Введите название...">
				<input type = "submit" class="btn" value="Поиск">
				</input>
				<img src="img/loupe.svg" alt="loupe" class="loupe">	

				<!--</form>-->
				<div class="output"></div>
			</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="left">
			<div class="filter">
				<p>Категории</p>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid>
					<label class="label" for="cbid">Все</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid1>
					<label class="label" for="cbid1">Транспорт и треки</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid2>
					<label class="label" for="cbid2">Роботы</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid3>
					<label class="label" for="cbid3">Мягкие игрушки</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid4>
					<label class="label" for="cbid4">Конструкторы</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid5>
					<label class="label" for="cbid5">Настольные игры</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid6>
					<label class="label" for="cbid6">Оружие и бластеры</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid7>
					<label class="label" for="cbid7">Куклы</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid8>
					<label class="label" for="cbid8">Наборы</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid9>
					<label class="label" for="cbid9">Книжки и развивалки</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid10>
					<label class="label" for="cbid10">Творчество</label>
				</div>
				<hr>
				<p>Для кого</p>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid11>
					<label class="label" for="cbid11">Унисекс</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid12>
					<label class="label" for="cbid12">Мальчики</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid13>
					<label class="label" for="cbid13">Девочки</label>
				</div>
				<hr>
				<p>Возраст</p>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid14>
					<label class="label" for="cbid14">0+</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid15>
					<label class="label" for="cbid15">3+</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid16>
					<label class="label" for="cbid16">5+</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid17>
					<label class="label" for="cbid17">6+</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid18>
					<label class="label" for="cbid18">8+</label>
				</div>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid19>
					<label class="label" for="cbid19">10+</label>
				</div>


			</div>
		</div>
		<div class="right">
			<div class="path">
				<a href="index.html">Главная</a> > <a href="catalogue.html">Игрушки</a>
			</div>
			<div class="categ">
				<h1>Все игрушки</h1>
				Найдено 
				<?php 
				include "database.php";
				include "search.php";
				$query = <<<EOD
				select count(*) from `assort` where toyname like '%$var%'
				EOD;
				$result = mysqli_query($induction, $query);
				$assort = mysqli_fetch_array($result);
				echo $assort[0];
				 ?>
				 товаров<br>
			</div>
			<hr>
			<div class="select">
				<select class="select">
					<option>Цена по возрастанию</option>
					<option>Цена по убыванию</option>
				</select>
			</div>
			<div class="catalogue">

				<?php 
				include "database.php";
				/*include "search.php";*/
				$inputval = $_REQUEST['poisk'];
				$query = "select * from `assort` where toyname like '%$inputval%'"; 
				$result = mysqli_query($induction, $query);

				while ($assort = mysqli_fetch_assoc($result)){
					echo '
					<div class="card">
					<a href="'.$assort["page"].'" class="cardlink">
					<div class="picture">
						<img src="img/toys/'.$assort['toypicture'].'" alt="avtomoika">
					</div>
					</a>
					<p class="name">'.$assort["toyname"].'</p>
					<p class="price">'.$assort["toyprice"].' грн</p>
					<a href="'.$assort["page"].'" class="button">Купить</a>
					</div>
					';
				}
				?>
			</div>
			<div class="pages">
				<ul>
					<li><a href="#"></a>1</li>
					<li><a href="#"></a>2</li>
					<li><a href="#"></a>3</li>
				</ul>
			</div>
		</div>
	</div>

	<footer id="footer" class="footer">
		<div class="container">
			<div class="nav">
				<a href="index.html"><img src="img/logo.svg" alt="Toys for boys" class="logo2"></a>
				<ul class="menu2">
					<li>
						<a href="index.html">Главная</a>
					</li>
					<li>
						<a href="toycatalogue.php">Игрушки</a>
					</li>
					<li>
						<a href="shopabout.html" class="omag">О магазине</a>
					</li>
					<li>
						<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m">Инстаграмм</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="script.js"></script>
	<script src="Products/Products.js"></script>
	<link rel="stylesheet" href="Products/Products.css">
</body>
</html>
