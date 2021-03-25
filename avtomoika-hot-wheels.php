<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Toys for Boys - Автомойка Hot Wheels</title>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/toypage.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="icon" type="image/png" href="img/minilogo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

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

	<section class="section">
		<?php 
			include "database.php";
			/*include "search.php";*/
			$query = "select toy_id, toyname, toyprice, toypicture, (select categoryname from category where category.category_id = assort.toycategory) as toycategory, toyage, toysex, page, discription from assort where toy_id=1002;"; 
			$result = mysqli_query($induction, $query);
			$assort = mysqli_fetch_assoc($result);
				echo '
				<div class="path">
					<a href="index.html">Главная</a> > <a href="catalogue.html">Игрушки</a> > <a href="avtomoika-hot-wheels.php">'.$assort["toyname"].'</a>
				</div>
				<h1>'.$assort["toyname"].'</h1>
				';
		?>

		<div class="gallery">
			<div class="big_pic">
				<img src="img/toys/avtomoika.jpg" id="expandedImg" style="width:100%">
			</div>
			<img src="img/toys/avtomoika.jpg" alt="Автомойка Hot Wheels1" style="width:100%" onclick="myFunction(this);" class="small-img">
			<img src="img/toys/avtomoika-hot-wheels2.jpg" alt="Автомойка Hot Wheels2" style="width:100%" onclick="myFunction(this);" class="small-img">
			<img src="img/toys/avtomoika-hot-wheels3.jpg" alt="Автомойка Hot Wheels3" style="width:100%" onclick="myFunction(this);" class="small-img">
			<img src="img/toys/avtomoika-hot-wheels4.jpg" alt="Автомойка Hot Wheels3" style="width:100%" onclick="myFunction(this);" class="small-img">
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
				$query = "select toy_id, toyname, toyprice, toypicture, (select categoryname from category where category.category_id = assort.toycategory) as toycategory, toyage, toysex, page, discription from assort where toy_id=1002;"; 
				$result = mysqli_query($induction, $query);
				$assort = mysqli_fetch_assoc($result);
					echo '
					<div class="general">
						<p>'.$assort["toycategory"].'</p>
						<p>Артикул: '.$assort["toy_id"].'</p>
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
				$query = "select toy_id, toyname, toyprice, toypicture, (select categoryname from category where category.category_id = assort.toycategory) as toycategory, toyage, toysex, page, discription from assort where toy_id=1002;"; 
				$result = mysqli_query($induction, $query);
				$assort = mysqli_fetch_assoc($result);
					echo '
					<hr class="hr2">
					<b class="spoiler-title closed">Описание</b>
					<div class="spoiler-body"><hr class="hr">'.$assort["discription"].'</div>
					<hr class="hr2">
					<b class="spoiler-title closed">Характеристики</b>
					<div class="spoiler-body"><hr class="hr">
					Lorem Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus modi mollitia soluta ad ratione sed, itaque optio eligendi sequi alias vel nisi eos ab asperiores assumenda quo libero cumque odio!
					</div>
					<hr class="hr2">
					';
				 ?>
			</div>
		</div>
	</section>

	<footer id="footer" class="footer">
		<div class="section">
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
	
</body>
</html>
