
<?php 
include 'functions.php';
$induction = connect_db();

if( $_POST["poisk"]) {
$goods = get_goods($induction, $_POST["poisk"]);
} else {
	$goods = get_goods($induction);
}
 ?>

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
	<a name="top"></a>
	<a class="top" href="#top"><img src="img/to-top.svg" alt="Наверх"></a>
	
	<div class="mobile-menu">
		<div class="container">
			<div class="small-nav">
				<div style="display: inherit;">
				<button class="open-button">
					<img src="img/hamburger.png" alt="Open menu">
				</button>
				<div class="line"></div></div>
				<a href="index.html"><img class="logoo" src="img/logoo.svg" alt="Toys for boys" ></a>
				<div style="display: inherit;">
				<div class="line"></div>
				<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m" class="inst-logo"><img src="img/instagramm.png" alt="Instagram"></a></div>
			</div>
		</div>
	</div>

	<header id="header" class="header">
		<img src="img/picture1.png" alt="pic1" class="pic1">
		<img src="img/picture2.png" alt="pic2" class="pic2">
		<div class="contain">
			<div class="container">
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
		</div>

		<div class="contain2">
			<div class="container">
			<div id="search" class="search">

				<form name="search-form" action="?php $_PHP_SELF ?" method="post">

				<input class="field" type="search" name="poisk" placeholder="Введите название...">
				<button type = "submit" class="btn" value="Поиск"><img src="img/loupe.svg" alt="loupe" class="loupe"><div class="poisk-text"> Поиск</div></button>
				</form>
				<div class="output"></div>
			</div>
			</div>
		</div>
	</header>

	

	<div class="container">
		<div class="left">
			<div class="overlay"></div>
			<div class="filter">
				<a href="#" class="cross"><span class="lines"></span></a>
				<p>Категории</p>
				<div class="checkbox">
					<input class="input" type="checkbox" id = cbid checked>
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
				if (empty($goods)){
					echo "0";
				} else {
					echo count($goods);
				}
				 ?>
				 товаров<br>
			</div>
			<hr>

			<div class="hidden-filters">
				<button class="filter-button">Фильтры</button>
			</div>

			<div class="select">
				<select class="select-inner" onchange="sort(this)">
					<option value="nothing">Не выбрано</option>
					<option value="increase">Цена по возрастанию</option>
					<option value="decrease">Цена по убыванию</option>
				</select>
			</div>

			<div class="catalogue" id="catalogue">

				<?php 
				//include "search.php";
				if (empty($goods)){
					echo "Ничего не найдено.";
				}

				foreach ($goods as $assort) : 
					echo '
					<div class="card" data-price="'.$assort["toyprice"].'" data-name="'.$assort["toyname"].'" data-id="'.$assort["toy_id"].'">
					<a href="'.$assort["page"].'" class="cardlink">
					<div class="picture">
						<img src="img/toys/'.$assort['toypicture'].'" alt="avtomoika">
					</div>
					</a>
					<p class="name">'.$assort["toyname"].'</p>
					<p class="price">'.$assort["toyprice"].' грн</p>
					<a href="'.$assort["page"].'" class="button"><img src="img/cart.svg" alt="Корзина" class="cart"><span class="buy-text">Купить</span></a>
					</div>
					';
				endforeach;
				?>
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
						<a href="shopabout.html">О магазине</a>
					</li>
					<li>
						<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m">Инстаграмм</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/sort.js"></script>
</body>
</html>
