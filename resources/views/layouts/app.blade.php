<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOICASHBACK</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('fa/fontawesome-all.min.css') }}">
    <!-- Bootstrap Rebbot CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}"><!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">       <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<header class="header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-4 col-lg-2">
                <a href="/" class="logo">Moicashback</a>
            </div><!-- col-lg-2 -->
            <div class="col-lg-7 d-none d-lg-block menu-collapse">
                <ul class="menu d-flex justify-content-between">
                    <li class="menu__item">
                        <a href="#">Все магазины</a>
                    </li>
                    <li class="menu__item">
                        <a href="#">С повышенным кэшбэком</a>
                    </li>
                    <li class="menu__item menu__item_last">
                        <a href="{{ route('referral') }}">Реферальная програма</a>
                    </li>
                </ul>
            </div><!-- col-lg-7 -->
            <div class="col-6 col-sm-6 col-md-7 col-lg-3  col-xl-3">
                <div class="enter text-right">
                    <a href="#" class="log-in">Войти</a>
                    <a href="#" class="register">Регистрация</a>
                </div>
            </div><!-- col-lg-3 -->
            <div class="col-2 col-md-1 d-lg-none text-right menu-order">
                <button class="menu-open">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
        </div><!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="offer">
                    <h1 class="offer__title"><span class="hello">Салют!</span>У нас самый выгодный кэшбэк, <br> убедись в этом сам</h1>
                    <p class="offer__text"> <span class="bold-text">С нами работают более 1500 магазинов,</span> так что мы верены,
                        что ты найдешь абсолютно все, о чем мечтал и по лучшим ценам</p>
                    <div class="offer__search-wrapper">
                        <input type="search" class="offer__search" placeholder="Найти магазин с кэшбэком">
                        <button name="search" type="submit" class="offer__search__btn"><i class="fas fa-search"></i></button>
                    </div><!-- offer__search-wrapper -->
                </div><!-- offer -->
            </div><!-- col-lg-12 -->
        </div><!-- row -->
    </div><!-- container -->
    <div class="products">
        <div class="container">
            <div class="row text-center">
                <div class="col-6 col-md-4 col-lg-2 mb-4 mb-sm-5">
                    <a href="#" class="product__item">
                        <img src="{{ asset('img/camera.png') }}" alt="Зеркальная камера" class="product__img">
                        <div class="product__info">
                            <span class="product__price">27 000 р.</span>
                            <span class="product__cashback">кэшбэк до 5%</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="product__item">
                        <img src="{{ asset('img/camera.png') }}" alt="Зеркальная камера" class="product__img">
                        <div class="product__info">
                            <span class="product__price">27 000 р.</span>
                            <span class="product__cashback">кэшбэк до 5%</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 mb-4  col-lg-2">
                    <a href="#" class="product__item">
                        <img src="{{ asset('img/camera.png') }}" alt="Зеркальная камера" class="product__img">
                        <div class="product__info">
                            <span class="product__price">27 000 р.</span>
                            <span class="product__cashback">кэшбэк до 5%</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="product__item">
                        <img src="{{ asset('img/camera.png') }}" alt="Зеркальная камера" class="product__img">
                        <div class="product__info">
                            <span class="product__price">27 000 р.</span>
                            <span class="product__cashback">кэшбэк до 5%</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="product__item">
                        <img src="{{ asset('img/camera.png') }}" alt="Зеркальная камера" class="product__img">
                        <div class="product__info">
                            <span class="product__price">27 000 р.</span>
                            <span class="product__cashback">кэшбэк до 5%</span>
                        </div>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <a href="#" class="product__item">
                        <img src="{{ asset('img/camera.png') }}" alt="Зеркальная камера" class="product__img">
                        <div class="product__info">
                            <span class="product__price">27 000 р.</span>
                            <span class="product__cashback">кэшбэк до 5%</span>
                        </div>
                    </a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- products -->
</header>

@yield('content')

@include('pattern.footer')