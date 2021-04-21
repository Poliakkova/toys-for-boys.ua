@extends('layout')

@section('content')

<link rel="stylesheet" href="{{ asset('../css/toypage.css') }}">
<title>Toys for Boys - Атака дракона</title>

<section class="section">
        @foreach($assort as $assor)
        <div class="path">
            <a href="index.html">Главная</a> > <a href="catalogue.html">Игрушки</a> > <a href="avtomoika-hot-wheels.php">{{$assor->toyname}}</a>
        </div>
        <h1>{{$assor->toyname}}</h1>
        <p class="move">{{$assor->toycategory}}</p>
        <p class="move">Артикул: {{$assor->toy_id}}</p>
        @endforeach

		<div class="gallery">
			<div class="big_pic">
				<img src="img/toys/ataka_dracona.jpg" id="expandedImg" style="width:100%">
			</div>

			<div class="small_pic"><img src="img/toys/ataka_dracona.jpg" alt="Атака Дракона" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
			<div class="small_pic"><img src="img/toys/ataka_dracona2.jpg" alt="Атака Дракона" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
			<div class="small_pic"><img src="img/toys/ataka_dracona3.jpg" alt="Атака Дракона" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
			<div class="small_pic"><img src="img/toys/ataka_dracona4.jpg" alt="Атака Дракона" style="width:100%" onclick="myFunction(this);" class="small-img"></div>
		</div>

		<script>
		function myFunction(imgs) {
		    var expandImg = document.getElementById("expandedImg");
		    expandImg.src = imgs.src;
		    expandImg.parentElement.style.display = "block";
		}
		</script>

		<div class="info">
            @foreach($assort as $assor)
			<div class="general">
				<p class="move-off">{{$assor->toycategory}}</p>
				<p class="move-off">Артикул: {{$assor->toy_id}}</p>
				<div class="price">{{$assor->toyprice}} грн</div>
				<a href="https://instagram.com/toysforkids_kiev?igshid=1mqhtjbhmwr9m" class="buy-button">Купить</a>
				<p>После нажатия вы попадете на наш Инстаграмм @toysforkids_kiev и сможете сделать заказ в Директ</p>
			</div>
            @endforeach

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

		<hr class="hr2">
		<b class="spoiler-title closed">Описание</b>
		<div class="spoiler-body"><hr class="hr">{{$assor->discription}}</div>
		<hr class="hr2">
		<b class="spoiler-title closed">Характеристики</b>
		<div class="spoiler-body"><hr class="hr">
			<table width="100%" cellpadding="5">
				<tr>
				<td>Артикул</th>
				<td>{{$assor->toy_id}}</th>
				</tr>
				<tr>
				<td>Категория</td>
				<td>{{$assor->toycategory}}</td>
                </tr>
                <tr>
				<td>Возраст</td>
				<td>{{$assor->toyage}}</td>
				</tr>
                <tr>
				<td>Пол</td>
				<td>{{$assor->toysex}}</td>
					</tr>
			</table>
		</div>
		<hr class="hr2">

			</div>
		</div>

		<div class="similar-goods">
			<div class="similar-goods-title">
				<img src="img/shopping.png" alt="shopping-icon">
				<span class="similar-text">Похожие товары</span>
			</div>
			<div class="similar-goods-cards">
<!--				--><?php //
//				include "database.php";
//				/*include "search.php";*/
//				$inputval = $_REQUEST['poisk'];
//				$query = "select * from `assort` where toycategory = 2";
//				$result = mysqli_query($induction, $query);
//				$i = 1;
//
//				while ( $i<6  && $assort = mysqli_fetch_assoc($result)){
//					echo '
//					<div class="card">
//					<a href="'.$assort["page"].'" class="cardlink">
//					<div class="picture">
//						<img src="img/toys/'.$assort['toypicture'].'" alt="avtomoika">
//					</div>
//					</a>
//					<p class="name">'.$assort["toyname"].'</p>
//					<p class="price-similar">'.$assort["toyprice"].' грн</p>
//					<a href="'.$assort["page"].'" class="button"><img src="img/cart.svg" alt="Корзина" class="cart"><span class="buy-text">Купить</span></a>
//					</div>
//					';
//					 $i++;
//				}
//				?>
			</div>
		</div>
	</section>

@endsection
