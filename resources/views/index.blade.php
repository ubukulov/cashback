@extends('layouts.app')
@section('content')
    <section class="buy" id="buy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="buy__title">Как покупать с кэшбэком?</h2>
                </div><!-- col-lg-12 -->
            </div><!-- row -->
            <div class="row justify-content-between">
                <div class="col-lg-4">
                    <div class="buy__item d-flex">
                        <img src="{{ asset('img/choose.png') }}" alt="Выбери магазин" class="buy__icon">
                        <h3 class="buy__heading">Выбери магазин</h3>
                        <p class="buy__text">Переходи в любой из +1500 магазинов</p>
                    </div><!-- buy__item -->
                </div><!-- col-lg-4 -->
                <div class="col-lg-4">
                    <div class="buy__item d-flex">
                        <img src="{{ asset('img/buy.png') }}" alt="Сделай покупку" class="buy__icon">
                        <h3 class="buy__heading">Сделай покупку</h3>
                        <p class="buy__text">Покупай товары и услуги легко и просто</p>
                    </div><!-- buy__item -->
                </div><!-- col-lg-4 -->
                <div class="col-lg-4">
                    <div class="buy__item d-flex">
                        <img src="{{ asset('img/cashback.png') }}" alt="Получи кэшбэк" class="buy__icon">
                        <h3 class="buy__heading">Получи кэшбэк</h3>
                        <p class="buy__text">Получай обратно деньги с покупок</p>
                    </div><!-- buy__item -->
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="our-shops" id="our-shops">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="our-shops__title">{{ count($offers) }} магазинов с кэшбэком</h2>
                </div><!-- col-lg-12 -->
            </div><!-- row -->
            <div class="row">
                @foreach($offers as $offer)
                    <div class="col-6 col-lg-3">
                        <div class="our-shops__item d-flex">
                            <img src="{{ $offer['image'] }}" alt="{{ $offer['title'] }}" class="our-shops__logo">
                            <span class="our-shops__cashback our-shops__cashback_text">Кэшбэк до</span>
                            <span class="our-shops__cashback our-shops__cashback_percent">
                                @if($offer->sale)
                                    {{ $offer->sale->payment_size }}
                                @else
                                    {{ $offer->lead->payment_size }}
                                @endif
                                <a href="{{ url('shop/'.$offer->id) }}"><i class="far fa-angle-right"></i></a>
                    </span>
                        </div>
                    </div><!-- col-lg-3 -->
                @endforeach
            </div><!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <a href="{{ route('shops') }}" class="our-shops__btn button">Посмотреть все магазины →</a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="discount" id="discount">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="discount__title">Товары со <span class="blue-text">скидкой</span> до <span class="blue-text">80%</span></h2>
                </div><!-- col-lg-12 -->
            </div><!-- row -->
            <div class="row">
                <div class="col-6 col-lg-3">

                    <div class="discount__image">
                        <img src="img/phone2.png" alt="" class="discount__img">
                    </div>
                    <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                        <span class="discount__price_discount">
                                18 000 р.
                            </span>
                    </a>

                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="discount__item d-flex justify-content-center">
                        <div class="discount__image">
                            <img src="img/phone2.png" alt="" class="discount__img">
                        </div>
                        <a href="#" class="discount__price d-flex justify-content-between">
                            <span class="discount__price_original">
                                27 000 р
                            </span>
                            <span class="discount__price_discount">
                                18 000 р.
                            </span>
                        </a>
                    </div>
                </div>
            </div><!-- row -->
            <div class="row">
                <div class="col-6 col-lg-12">
                    <a href="#" class="discount__btn button">Больше товаров со скидками →</a>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="cards" id="cards">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6">
                    <div class="browser-extension">
                        <h2 class="browser-extension__title">Расширение <br>
                            для браузера</h2>
                        <p class="browser-extension__text">Скоро появится возможность установть расширение <span class="bold-text">MOICASHBACK</span> и активируй кэшбэк в 1 клик на сайте магазина.
                            Мы позаботились, чтобы расширение подошло под твой браузер:</p>
                        <div class="browser-extension__browsers d-flex mt-4 pb-4 pb-md-0">
                            <img src="img/chrome.png" alt="" class="mr-2 mr-lg-4">
                            <img src="img/yandex.png" alt="" class="mr-2 mr-lg-4">
                            <img src="img/safari.png" alt="" class="mr-2 mr-lg-4">
                            <img src="img/opera.png" alt="" class="mr-2 mr-lg-4">
                            <img src="img/firefox.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="mobile-app pb-4 pb-md-0">
                        <h2 class="mobile-app__title">Установите мобильное <br>приложение</h2>
                        <p class="mobile-app__text">Уже скоро станут доступными удобные покупки с кэшбэком в твоем смартфоне. Будет доступно в Google Play и App Store</p>
                        <img src="img/app.png" alt="" class="mt-3 d-none d-sm-block">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="friends pb-4 pb-md-0">
                        <h2 class="friends__title">Приглашай  друзей - <br>
                            получай кэшбэк!</h2>
                        <p class="friends__text">С ней ты сможешь получать кэшбэк, приглашая друзей или рекомендуя товары.</p>
                        <a href="#" class="button mt-3 d-block">Подробнее</a>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
    <section class="one-year" id="one-year">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="one-year__title">MOICASHBACK за 1 год</h2>
                </div><!-- col-lg-12 -->
            </div><!-- row -->
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="stats d-flex">
                        <div class="one-year__item mb-5 mb-lg-0">
                            <div class="one-year__digits d-flex">
                                <span class="yellow-text">10</span>
                                <span class="yellow-text">200</span>
                            </div>
                            <h4 class="one-year__heading">Пользователей</h4>
                            <p class="one-year__text">Используют наш сервис</p>
                        </div>
                        <div class="one-year__item mb-5 mb-lg-0">
                            <div class="one-year__digits d-flex">
                                <span class="yellow-text">748</span>
                                <span class="yellow-text">658</span>
                            </div>
                            <h4 class="one-year__heading">Покупок с кэшбэком</h4>
                            <p class="one-year__text">Совершены нашими клиентами</p>
                        </div>
                        <div class="one-year__item">
                            <div class="one-year__digits d-flex">
                                <span class="yellow-text">1528</span>
                            </div>
                            <h4 class="one-year__heading">Отзывов</h4>
                            <p class="one-year__text">Написано о нас</p>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- container -->
    </section>
@stop