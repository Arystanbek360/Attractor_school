@extends('layouts.front')
@section('content')

    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://kotstudio.kz/upload/images/11359_969617_17.jpg" class="d-block w-100"
                     style="max-height: 700px" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="https://p2.zoon.ru/preview/EuUT8Iy3j84IM1H6wGIkbQ/640x402x85/1/1/7/original_5e58d59438eb8470d7004fb6_5e58d644ef799.jpg"
                    class="d-block w-100" style="max-height: 700px" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="https://ru-ru.learn.canva.com/wp-content/uploads/sites/19/2020/03/photo-1553102674-af685bb5fe40-e1583710318684.jpeg"
                    class="d-block w-100" style="max-height: 700px" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-7 py-5" id="carousel_916b">
        <div class="container">
            <div class="u-size-31-sm u-size-31-xs u-size-33-lg u-size-33-xl u-size-60-md">
                <div class="u-layout-col">
                    <div
                        class="u-container-align-left u-container-style u-layout-cell u-size-60 u-layout-cell-1 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h2 class="u-align-left u-text u-text-default u-text-1 animated customAnimationOut"
                                data-animation-name="customAnimationIn" data-animation-duration="1500"
                                data-animation-delay="500"
                                style="will-change: transform, opacity; animation-duration: 1500ms;">
                                ФОТОСТУДИЯ КОТ</h2>
                            <p class="u-align-left u-text u-text-default u-text-2">Профессиональная
                                фотостудия в Алматы. Лучшая студия, где Вы можете заказать фотосессию «Под
                                ключ» с профессиональным фотографом или арендовать фотостудию.
                                <br>
                                К Вашим услугам в нашей фотостудии «КОТ» два просторных съемочных зала –
                                Интерьерный и Творческий с циклорамой. Вы можете арендовать студию для
                                проведения фото и видеосъемок, мастер-классов и воркшопов. <br>
                                Для удобства наших любимых гостей у нас есть бар для ожидания, гримерка
                                (beauty-room) с душем и санузлом. <br>
                                Фотостудия «КОТ» - территория творческих и креативных людей, которые всегда
                                в движении. У нас комфортные условия для работы и творчества. Вас ждет
                                чистота и уют, атмосфера легкости и удобства.
                                <br>
                                В студии работает профессиональный фотограф, который проведет для вас
                                фотосессию мечты.
                                <br>
                                Мы стараемся для вас, поэтому цены у нас демократичные. И есть разные пакеты
                                услуг от бюджетных до эксклюзивных, где «Все включено». Закажите у нас
                                детские, семейные и индивидуальные фотосессии и останетесь довольны выбором,
                                ведь работа профессионалов всегда вызывает восхищение.
                            </p>
                            <h5 class="u-align-left u-text u-text-default u-text-4"> С кем мы
                                сотрудничаем</h5>
                            <div class="u-expanded-width-xs u-list u-list-1">
                                <div class="u-repeater u-repeater-1">
                                    <div
                                        class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                        <div
                                            class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                                            <img alt=""
                                                 class="u-expanded-width u-image u-image-contain u-image-default u-image-1"
                                                 data-image-width="300" data-image-height="90"
                                                 src="{{asset('image/logo-amazon.svg')}}">
                                        </div>
                                    </div>
                                    <div
                                        class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                        <div
                                            class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                                            <img alt=""
                                                 class="u-expanded-width u-image u-image-contain u-image-default u-image-2"
                                                 data-image-width="300" data-image-height="90"
                                                 src="{{asset('image/1.svg')}}">
                                        </div>
                                    </div>
                                    <div
                                        class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                        <div
                                            class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                                            <img alt=""
                                                 class="u-expanded-width u-image u-image-contain u-image-default u-image-3"
                                                 data-image-width="300" data-image-height="63"
                                                 {{--                                                             src="../../../About_files/evga.svg">--}}
                                                 src="{{asset('image/evga.svg')}}">
                                        </div>
                                    </div>
                                    <div
                                        class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                        <div
                                            class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
                                            <img alt=""
                                                 class="u-expanded-width u-image u-image-contain u-image-default u-image-4"
                                                 data-image-width="300" data-image-height="39"
                                                 {{--                                                             src="../../../About_files/tesla-9.svg">--}}
                                                 src="{{asset('image/tesla-9.svg')}}">
                                        </div>
                                    </div>
                                    <div class="u-container-style u-list-item u-repeater-item">
                                        <div
                                            class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
                                            <img alt=""
                                                 class="u-expanded-width u-image u-image-contain u-image-default u-image-5"
                                                 data-image-width="300" data-image-height="54"
                                                 {{--                                                             src="../../../About_files/sony-logo.svg">--}}
                                                 src="{{asset('image/sony-logo.svg')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-7">
        <div class="container">
            <h1 class="u-align-right me-4" data-image-width="864" data-image-height="1080"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="500"
                style="will-change: transform, opacity; animation-duration: 1500ms;">Наши Фотографы</h1>
        </div>
        @foreach($photographs as $photograph)
            @if(($photograph->id%2))
                <div class="col-12 py-5 bg-warning text-center align-items-center"
                     data-animation-name="customAnimationIn"
                     data-animation-duration="1500" data-animation-delay="250"
                     style="will-change: transform, opacity; animation-duration: 1500ms;">
                    <div class="container">
                        <div class="row">
                            <div class="col-5 column-flex ">
                                <img src="{{asset('/storage/' . $photograph->picture)}}" alt="" class="col-12 rounded-5"
                                >
                                <p>{{$photograph->experience}}</p>
                            </div>
                            <div class="col-7">
                                <h3>{{$photograph->name}}</h3>
                                <p>{{$photograph->about}}</p>
                                <a href="{{route('photographs.show',$photograph)}}"
                                   class="btn btn-dark text-warning">Узнать больше</a>
                                <h4>Работы фотографа</h4>
                                <div id="carouselExampleCaptions{{$photograph->id}}" class="carousel slide my-5">
                                    <div class="carousel-inner">

                                        @foreach($photograph->works as $work)
                                            @if($photograph->works[0]==$work)
                                                <div class="carousel-item active">
                                                    <img src="{{asset('/storage/' . $work->picture)}}"
                                                         class="d-block w-100 rounded-5"
                                                         alt="Photograph works">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5 class="text-warning">Работа {{$photograph->name}}</h5>
                                                    </div>
                                                </div>
                                            @else
                                                @if($work->rating>=2)
                                                    <div class="carousel-item">
                                                        <img src="{{asset('/storage/' . $work->picture)}}"
                                                             class="d-block w-100 rounded-5"
                                                             alt="Photograph works">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="text-warning">Работа {{$photograph->name}}</h5>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach

                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleCaptions{{$photograph->id}}"
                                            data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Предыдущее</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleCaptions{{$photograph->id}}"
                                            data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Следующее</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-12 py-5 text-center align-items-center text-light"
                     data-animation-name="customAnimationIn"
                     data-animation-duration="1500" data-animation-delay="250"
                     style="will-change: transform, opacity; animation-duration: 1500ms;">
                    <div class="container">
                        <div class="row text-light">
                            <div class="col-7">
                                <h3>{{$photograph->name}}</h3>
                                <p>{{$photograph->about}}</p>
                                <a href="{{route('photographs.show',$photograph)}}"
                                   class="btn btn btn-light text-dark">Узнать больше</a>
                                <h4>Работы фотографа</h4>

                                <div id="carouselExampleCaptions{{$photograph->id}}" class="carousel slide my-5">
                                    <div class="carousel-inner">

                                        @foreach($photograph->works as $work)
                                            @if($photograph->works[0]==$work)
                                                <div class="carousel-item active">
                                                    <img src="{{asset('/storage/' . $work->picture)}}"
                                                         class="d-block w-100 rounded-5"
                                                         alt="Photograph works">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5 class="text-warning">Работа {{$photograph->name}}</h5>
                                                    </div>
                                                </div>
                                            @else
                                                @if($work->rating>=2)
                                                    <div class="carousel-item">
                                                        <img src="{{asset('/storage/' . $work->picture)}}"
                                                             class="d-block w-100 rounded-5"
                                                             alt="Photograph works">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5 class="text-warning">Работа {{$photograph->name}}</h5>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach

                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carouselExampleCaptions{{$photograph->id}}"
                                            data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Предыдущее</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                            data-bs-target="#carouselExampleCaptions{{$photograph->id}}"
                                            data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Следующее</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-5 column-flex ">
                                <img src="{{asset('/storage/' . $photograph->picture)}}" alt="" class="col-12 rounded-5"
                                >
                                <p>{{$photograph->experience}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </section>

@endsection
