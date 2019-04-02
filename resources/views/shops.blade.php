@extends('layouts.shop')
@section('content')
<section class="shop-page-content" id="shop-page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 mb-5 d-none d-lg-block">
                <div class="menu-nav">
                    <ul class="all-shops">
                        <li class="all-shops__item">
                            <a href="" class="active">Все магазины</a>
                        </li>
                        <li class="all-shops__item">
                            <a href="">С повышенным кэшбэком (5)</a>
                        </li>
                        <li class="all-shops__item">
                            <a href="">Новые магазины (24)</a>
                        </li>
                    </ul>
                    <ul class="categories">
                        <li class="categories__item">
                            <a href="">Одежда и обувь (26)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Украшения и аксессуары (1)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Красота и здоровье (7)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Электроника и техника (19)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Путешествия (59)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Дети (3)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Все для дома (8)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Досуг и развлечения (18)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Услуги (26)</a>
                        </li>
                        <li class="categories__item">
                            <a href="">Страхование и финансы (1)</a>
                        </li>
                    </ul>
                    <ul class="shop-type">
                        <li class="shop-type__item">
                            <a href="">Китайские магазины (67)</a>
                        </li>
                        <li class="shop-type__item">
                            <a href="">Иностранные магазины (154)</a>
                        </li>
                    </ul>
                </div><!-- menu-nav -->
            </div><!-- col-3 -->
            <div class="col-12 col-lg-9 col-xl-9">
                <h2 class="shop-page__title shop-page__title_first">Все магазины в Казахстане с кэшбэком</h2>
                <div class="all-shops_page__centent d-flex">
                    @foreach($offers as $offer)
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
                    @endforeach
                </div><!-- all-shops_page__content -->
                {{ $offers->links() }}
            </div><!-- col-9 -->
        </div><!-- row -->
    </div><!-- container -->
</section>
@stop