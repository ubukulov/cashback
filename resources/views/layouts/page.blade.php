<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOICASHBACK</title>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('fa/fontawesome-all.min.css') }}">
    <!-- Bootstrap Rebbot CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">     <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body id="refferal_page" class="page">
<header class="header" id="header">
    <div class="container">
        <div class="row">
            <div class="col-4 col-sm-4 col-lg-2">
                <a href="{{ route('home') }}" class="logo">Moicashback</a>
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
    </div><!-- container -->
</header>
<section class="register" id="register">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-xl-12">
                <h2 class="register__title">Зарегистрируйся или войди в аккаунт, чтобы воспользоваться
                    реферальной программой</h2>
            </div><!-- col-9 -->
        </div><!-- row -->
    </div><!-- container -->
</section>
<section class="breadcrumbs" id="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="breadcrumb-nav d-flex">
                    <li><a href="{{ route('home') }}">MOICASHBACK</a></li>
                    <li><a href="#" class="active">Реферальная програма</a></li>
                </ul><!-- breadcrumb -->
            </div><!-- col-12 -->
        </div><!-- row -->
    </div><!-- container -->
</section>

@yield('content')

@include('pattern.footer')