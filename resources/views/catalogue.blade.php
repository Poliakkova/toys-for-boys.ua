@extends('layout')

@section('content')
    <title>Toys for Boys - каталог игрушек</title>
    <link rel="stylesheet" href="{{ asset('../css/catalogue.css') }}">
    <script src="{{ asset('../js/sort.js') }}"></script>

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
               if (empty($assort)){
                    echo "0";
                } else {
                    echo count($assort);
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
               if (empty($assort)){
                   echo "<p>Ничего не найдено.</p>";
               }
               ?>

                @foreach ($assort as $assor)
					<div class="card" data-price="{{$assor->toyprice}}" data-name="{{$assor->toyname}}" data-id="{{$assor->toy_id}}">
					<a href="{{$assor->page}}" class="cardlink">
					<div class="picture">
						<img src="img/toys/{{$assor->toypicture}}" alt="avtomoika">
					</div>
					</a>
					<p class="name">{{$assor->toyname}}</p>
					<p class="price">{{$assor->toyprice}} грн</p>
					<a href="{{$assor->page}}" class="button"><img src="img/cart.svg" alt="Корзина" class="cart"><span class="buy-text">Купить</span></a>
					</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
