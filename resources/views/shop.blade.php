@extends('layouts.shop')
@section('content')
<section class="shop-page-content" id="shop-page-content">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-3 mb-5">
                <div class="shop d-flex">
                    <img src="{!! $shop->image !!}" alt="{{ $shop->title }}" class="shop__logo">
                    <div class="shop__cashback d-flex">
                        <span class="shop__text">Кэшбэк до</span>
                        <span class="shop__percent">
                            @if($shop->sale)
                                {{ $shop->sale->payment_size }}
                            @else
                                {{ $shop->lead->payment_size }}
                            @endif
                        </span>
                    </div><!-- cashback -->
                    <a href="#" class="shop__btn">Перейти в магазин →</a>
                </div>
                <div class="shop-rating">
                    <h3 class="shop-rating__title">Общая оценка магазина ({{ $shop->rating }})</h3>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star unchecked"></span>
                    <small class="rules">*Ознакомься <a href="#" class="rules__link">с правилами покупок с кэшбэком</a></small>
                </div>
            </div><!-- col-3 -->
            <div class="col-12 col-xl-9">
                <h2 class="shop-page__title shop-page__title_first">Покупки в {{ $shop->title }} с кэшбэком в Казахстане</h2>
                <div class="cashback__time">
                    <h3 class="shop-page__subtitle">Время начисления кэшбэка</h3>
                    <div class="cashback-wrap d-flex">
                        <p>Среднее время ожидания кэшбэка: <span class="bold">{{ $shop->avg_money_transfer_time }} дня</span></p>
                        <p>Максимальное время ожидания кэшбэка: <span class="bold">60 дней</span></p>
                    </div>
                </div>
                <div class="cashback__info">
                    <h3 class="shop-page__subtitle">Информация и условия</h3>
                    {!! $shop->raw_description !!}
                </div>
                <div class="shop-page__testimonials">
                    <h2 class="shop-page__title mt-5">Отзывы о {{ $shop->title }} (7150)</h2>
                    <div class="testimonials d-flex">
                        <div class="testimonial d-flex">
                            <img src="img/img.jpg" alt="">
                            <div class="testimonial-info ">
                                <div class="testimonial__rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                </div>
                                <h4 class="testimonial__name">Валерий</h4>
                                <p class="testimonial__date">23.03.2019</p>
                                <p class="testimonial__text">Стал выводить деньги,было написано что получите их через 5-6 дней,но на деле получил через 20 минут,а до последнего не верил. Так что всё работает, и ОГРОМНОЕ СПАСИБО!!!!!</p>
                            </div>
                        </div><!-- testimonial -->
                        <div class="testimonial d-flex">
                            <img src="img/img.jpg" alt="">
                            <div class="testimonial-info ">
                                <div class="testimonial__rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                </div>
                                <h4 class="testimonial__name">Валерий</h4>
                                <p class="testimonial__date">23.03.2019</p>
                                <p class="testimonial__text">Стал выводить деньги,было написано что получите их через 5-6 дней,но на деле получил через 20 минут,а до последнего не верил. Так что всё работает, и ОГРОМНОЕ СПАСИБО!!!!!</p>
                            </div>
                        </div><!-- testimonial -->
                        <div class="testimonial d-flex">
                            <img src="img/img.jpg" alt="">
                            <div class="testimonial-info ">
                                <div class="testimonial__rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                </div>
                                <h4 class="testimonial__name">Валерий</h4>
                                <p class="testimonial__date">23.03.2019</p>
                                <p class="testimonial__text">Стал выводить деньги,было написано что получите их через 5-6 дней,но на деле получил через 20 минут,а до последнего не верил. Так что всё работает, и ОГРОМНОЕ СПАСИБО!!!!!</p>
                            </div>
                        </div><!-- testimonial -->
                        <div class="testimonial d-flex">
                            <img src="img/img.jpg" alt="">
                            <div class="testimonial-info ">
                                <div class="testimonial__rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star unchecked"></span>
                                </div>
                                <h4 class="testimonial__name">Валерий</h4>
                                <p class="testimonial__date">23.03.2019</p>
                                <p class="testimonial__text">Стал выводить деньги,было написано что получите их через 5-6 дней,но на деле получил через 20 минут,а до последнего не верил. Так что всё работает, и ОГРОМНОЕ СПАСИБО!!!!!</p>
                            </div>
                        </div><!-- testimonial -->
                    </div><!-- testimonials -->
                    <div class="pagination d-flex">
                        <a href="#"><i class="fas fa-angle-left"></i></a>
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#" class="active"><i class="fas fa-angle-right"></i></a>
                    </div><!-- pagination -->
                </div><!-- shop-page__testimonials -->
            </div><!-- col-9 -->
        </div><!-- row -->
    </div><!-- container -->
</section>
@stop