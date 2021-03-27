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
				<!--<form action="" method="post">-->
				<input class="field" type="search" name="poisk" placeholder="Введите название...">
				<!--<a type = "submit" class="btn" value="Поиск">-->
				<a href="#" class="btn"><img src="img/loupe.svg" alt="loupe" class="loupe"><div class="poisk-text"> Поиск</div></a>
				<!--</form>-->
				<div class="output"></div>
			</div>
			</div>
		</div>
	</header>

	<section class="section">
		<?php 
			include "database.php";
			/*include "search.php";*/
			$query = "select toy_id, toyname, toyprice, toypicture, (select categoryname from category where category.category_id = assort.toycategory) as toycategory, toyage, toysex, page, discription from assort where toy_id=1011;"; 
			$result = mysqli_query($induction, $query);
			$assort = mysqli_fetch_assoc($result);
				echo '
				<div class="path">
					<a href="index.html">Главная</a> > <a href="catalogue.html">Игрушки</a> > <a href="avtomoika-hot-wheels.php">'.$assort["toyname"].'</a>
				</div>
				<h1>'.$assort["toyname"].'</h1>
				<p class="move">'.$assort["toycategory"].'</p>
				<p class="move">Артикул: '.$assort["toy_id"].'</p>
				';
		?>

		<div class="gallery">
			<div class="big_pic">
				<img src="img/toys/ohota_na_okulu.jpg" id="expandedImg" style="width:100%">
			</div>

			<div class="small_pic"><img src="img/toys/ohota_na_okulu.jpg" alt="Трек охота на окулу" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
			<div class="small_pic"><img src="img/toys/ohota_na_okulu2.jpg" alt="Трек охота на окулу" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
			<div class="small_pic"><img src="img/toys/ohota_na_okulu3.jpg" alt="Трек охота на окулу" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
			<div class="small_pic"><img src="img/toys/ohota_na_okulu4.jpg" alt="Трек охота на окулу" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
		</div>

		<script>
		function myFunction(imgs) {
		    var expandImg = document.getElementById("expandedImg");
		    expandImg.src = imgs.src;
		    expandImg.parentElement.style.display = "block";
		}
		</script>

		<div class="info">
			<?php 
				include "database.php";
				/*include "search.php";*/
				$query = "select toy_id, toyname, toyprice, toypicture, (select categoryname from category where category.category_id = assort.toycategory) as toycategory, toyage, toysex, page, discription from assort where toy_id=1011;"; 
				$result = mysqli_query($induction, $query);
				$assort = mysqli_fetch_assoc($result);
					echo '
					<div class="general">
						<p class="move-off">'.$assort["toycategory"].'</p>
						<p class="move-off">Артикул: '.$assort["toy_id"].'</p>
						<div class="price">'.$assort["toyprice"].' грн</div>
						<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m" class="buy-button">Купить</a>
						<p>После нажатия вы попадете на наш Инстаграмм @toysforkids_kiev и сможете сделать заказ в Директ</p>
					</div>
					';
				?>
			

			<div class="delivery">
				<ul>
					<li><img src="img/novaposhta.png" alt="Логотип Новой Почты">Доставка в отделение по тарифам Новой Почты</li>
					<hr>
					<li><img src="img/ukrposhta.png" alt="Логотип УкрПочты">Доставка в отделение по тарифам УкрПочты</li>
					<hr>
					<li><img src="img/delivery-icon2.svg" alt="Иконка доставка">Самовывоз из Троещины бесплатно</li>
					<hr><hr>
					<li><img src="img/payment-icon2.svg" alt="Иконка оплата">100% предоплата на карту или наложенный платеж (с небольшой предоплатой)</li>
				</ul>
			</div>

			<div class="about">
				<script type="text/javascript">
					$(document).ready(function(){
					$('.spoiler-body').hide();
					$('.spoiler-title').click(function(){
					    $(this).toggleClass('opened').toggleClass('closed').next().slideToggle();
					});
					});
				</script>

				<?php 
				include "database.php";
				/*include "search.php";*/
				$query = "select toy_id, toyname, toyprice, toypicture, (select categoryname from category where category.category_id = assort.toycategory) as toycategory, (select agename from age where age.age_id = assort.toyage) as toyage, (select sexname from sex where sex.sex_id = assort.toysex) as toysex, page, discription from assort where toy_id=1011;"; 
				$result = mysqli_query($induction, $query);
				$assort = mysqli_fetch_assoc($result);
					echo '
					<hr class="hr2">
					<b class="spoiler-title closed">Описание</b>
					<div class="spoiler-body"><hr class="hr">'.$assort["discription"].'</div>
					<hr class="hr2">
					<b class="spoiler-title closed">Характеристики</b>
					<div class="spoiler-body"><hr class="hr">
						<table width="100%" cellpadding="5">
							<tr>
							<td>Артикул</th>
							<td>'.$assort["toy_id"].'</th>
							</tr>
							<tr>
							<td>Категория</td>
							<td>'.$assort["toycategory"].'</td>
							</tr>
							<tr>
							<td>Возраст</td>
							<td>'.$assort["toyage"].'</td>
							</tr>
							<tr>
							<td>Пол</td>
							<td>'.$assort["toysex"].'</td>
							</tr>
						</table>
					</div>
					<hr class="hr2">
					';
				 ?>
			</div>
		</div>

		<div class="similar-goods">
			<div class="similar-goods-title">
				<img src="img/shopping.png" alt="shopping-icon">
				<span class="similar-text">Похожие товары</span>
			</div>
			<div class="similar-goods-cards">
				<?php 
				include "database.php";
				/*include "search.php";*/
				$inputval = $_REQUEST['poisk'];
				$query = "select * from `assort` where toycategory = 2"; 
				$result = mysqli_query($induction, $query);
				$i = 1; 

				while ( $i<6  && $assort = mysqli_fetch_assoc($result)){
					echo '
					<div class="card">
					<a href="'.$assort["page"].'" class="cardlink">
					<div class="picture">
						<img src="img/toys/'.$assort['toypicture'].'" alt="avtomoika">
					</div>
					</a>
					<p class="name">'.$assort["toyname"].'</p>
					<p class="price-similar">'.$assort["toyprice"].' грн</p>
					<a href="'.$assort["page"].'" class="button"><img src="img/cart.svg" alt="Корзина" class="cart"><span class="buy-text">Купить</span></a>
					</div>
					';
					 $i++;
				}
				?>
			</div>
		</div>
	</section>

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
	
	<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>-->
	<script src="js/main.js"></script>
</body>
</html>