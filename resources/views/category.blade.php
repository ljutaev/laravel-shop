
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Интернет Магазин: Категория Портативная техника</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://internet-shop.tmweb.ru">Интернет Магазин</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="http://internet-shop.tmweb.ru">Все товары</a></li>
                <li class="active"><a href="http://internet-shop.tmweb.ru/categories">Категории</a>
                </li>
                <li ><a href="http://internet-shop.tmweb.ru/basket">В корзину</a></li>
                <li><a href="http://internet-shop.tmweb.ru/reset">Сбросить проект в начальное состояние</a></li>
                <li><a href="http://internet-shop.tmweb.ru/locale/en">en</a></li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">₽<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/RUB">₽</a></li>
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/USD">$</a></li>
                                                    <li><a href="http://internet-shop.tmweb.ru/currency/EUR">€</a></li>
                                            </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                                    <li><a href="http://internet-shop.tmweb.ru/login">Войти</a></li>
                
                            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="starter-template">
        <h1>{{$category->name}}</h1>
        <p>
            {{$category->description}}
        </p>
    <div class="row">
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/beats.jpg" alt="Наушники Beats Audio">
        <div class="caption">
            <h3>Наушники Beats Audio</h3>
            <p>20221 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/5" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/portable/beats_audio"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="EGkyNXb2ZQ6fwlk7vqmo72aCQcqNkXfihs2a65lG">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/gopro.jpg" alt="Камера GoPro">
        <div class="caption">
            <h3>Камера GoPro</h3>
            <p>12000 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/6" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/portable/gopro"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="EGkyNXb2ZQ6fwlk7vqmo72aCQcqNkXfihs2a65lG">            </form>
            </p>
        </div>
    </div>
</div>
                    <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <div class="labels">
            
            
                    </div>
        <img src="http://internet-shop.tmweb.ru/storage/products/video_panasonic.jpg" alt="Камера Panasonic HC-V770">
        <div class="caption">
            <h3>Камера Panasonic HC-V770</h3>
            <p>27900 ₽</p>
            <p>
            <form action="http://internet-shop.tmweb.ru/basket/add/7" method="POST">
                                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                                <a href="http://internet-shop.tmweb.ru/portable/panasonic_hc-v770"
                   class="btn btn-default"
                   role="button">Подробнее</a>
                <input type="hidden" name="_token" value="EGkyNXb2ZQ6fwlk7vqmo72aCQcqNkXfihs2a65lG">            </form>
            </p>
        </div>
    </div>
</div>
            </div>
    </div>
</div>
</body>
</html>
