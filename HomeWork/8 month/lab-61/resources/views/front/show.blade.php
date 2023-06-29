@extends('layouts.app');
@section('content')
    <div class="container">
        <section class="cafe-card">
            <div class="card-prev">
                <div class="card--background" style="
                        background: linear-gradient(to top, rgba(0, 0, 0, .9), rgba(0, 0, 0, .1)), url(''), no-repeat center, #10A497;
                        background-size: cover;
                    ">
                </div>

                <div class="card-prev--wrap">
                    <div class="prev--thumb" style="background-color:#FFFFFF">
                        @if($institution->picture)
                            <img src="{{asset('/storage/' . $institution->picture)}}" alt="">
                        @else
                            <img
                                src="data:image/png;base64,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"
                                alt="Нету картинки">
                        @endif
                    </div>

                    <!-- Информация о ресторане -->
                    <div class="prev--information">
                        <div class="cafe-item--title">
                            <h1 class="cafe--name" style="margin:0 11px 0 0;font-weight: normal;">
                                {{$institution->category->name}} «{{$institution->name}}»
                            </h1>
                        </div>
                        <!-- Информация о ресторане -->

                        <!-- categories -->
                        <div class="categories">
                            <div class="original-tag-list">
                                @foreach($institution->dishes()->with('kitchen')->get()->pluck('kitchen.name')->unique() as $type)
                                    <a class="tag-list__tag"
                                       href="https://nambafood.kg/cafe/kitaiskaia-kukhnia?language=ru">
                                        {{$type}} кухня</a>
                                @endforeach
                            </div>

                            <div class="tag-list">
                                @foreach($kitchens = $institution->dishes()->with('kitchen')->get()->pluck('kitchen.name')->unique() as $type)
                                    <a class="tag-list__tag"
                                       href="https://nambafood.kg/cafe/kitaiskaia-kukhnia?language=ru">
                                        {{$type}} кухня</a>
                                @endforeach
                            </div>
                        </div>
                        <!-- /categories -->

                        <!-- information -->
                        <div class="information">
                            <div class="information--item">
                                <div class="information--item--title">
                                    Средний чек:
                                </div>
                                <div class="information--item--description">{{$institution->averageCheck()}}</div>
                            </div>
                            <div class="information--item">
                                <div class="information--item--title">
                                    Доставка:
                                </div>
                                <div class="information--item--description">
                                    {{$institution->delivery}} сом
                                    <a href="https://nambafood.kg/delivery.html?language=ru" class="delivery">?</a>
                                </div>
                            </div>
                            <div class="information--item">
                                <div class="information--item--title">
                                    Время работы:
                                </div>
                                <div class="information--item--description">
                                    11:00 – 23:00
                                    <i class="work-time">
                                        Без выходных
                                    </i>
                                </div>
                            </div>

                            <div class="information--item">
                                <div class="information--item--title">
                                    Способы оплаты:
                                </div>
                                <div class="information--item--description">
                                    <i class="information--item--icon information--payment--icon">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/icon-visa.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/icon-visa(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/icon-mastercard.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/icon-mastercard(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/icon-maestro.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/icon-maestro(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/icon-elcard.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/icon-elcard(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon"
                                       style="padding-left: 2px; padding-right: 2px;">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/mbank-5.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/mbank-5(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon"
                                       style="padding-left: 2px; padding-right: 2px;">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/o-dengi-1.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/o-dengi-1(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon"
                                       style="padding-left: 2px; padding-right: 2px;">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/icon-balance.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/icon-balance(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon"
                                       style="padding-left: 2px; padding-right: 2px;">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/icon_namba_one.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/icon_namba_one(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                    <i class="information--item--icon information--payment--icon"
                                       style="padding-left: 2px; padding-right: 2px;">
                                        <object type="image/svg+xml"
                                                data="{{asset('img/megapay.svg')}}"
                                                width="100%" height="100%">
                                            <img
                                                src="{{asset('img/megapay(1).svg')}}"
                                                alt="">
                                        </object>
                                    </i>
                                </div>
                            </div>

                            <div class="information--item rating-information--item">
                                <div class="information--item--title">
                                    Рейтинг:
                                </div>
                                <div class="information--item--description">

                                    <div class="raiting-container
                    rating-result one-star-rating one-star-rating__2
            ">
                                        <label for="rating_5_1546975300" class="hover-area hover-area__5"></label>
                                        <input id="rating_5_1546975300" class="hide rating-input rating_5" type="radio"
                                               name="rating" value="5">
                                        <label for="rating_4_1546975300" class="hover-area hover-area__4"></label>
                                        <input id="rating_4_1546975300" class="hide rating-input rating_4" type="radio"
                                               name="rating" value="4">
                                        <label for="rating_3_1546975300" class="hover-area hover-area__3"></label>
                                        <input id="rating_3_1546975300" class="hide rating-input rating_3" type="radio"
                                               name="rating" value="3">
                                        <label for="rating_2_1546975300" class="hover-area hover-area__2"></label>
                                        <input id="rating_2_1546975300" class="hide rating-input rating_2" type="radio"
                                               name="rating" value="2">
                                        <label for="rating_1_1546975300" class="hover-area hover-area__1"></label>
                                        <input id="rating_1_1546975300" class="hide rating-input rating_1" type="radio"
                                               name="rating" value="1">
                                        <div class="stars-container"></div>
                                        <div class="rating-value rating-value__0">0</div>
                                        <div class="rating-value rating-value__1">1</div>
                                        <div class="rating-value rating-value__2">2</div>
                                        <div class="rating-value rating-value__3">3</div>
                                        <div class="rating-value rating-value__4">4</div>
                                        <div class="rating-value rating-value__5">5</div>
                                    </div>
                                    5.0
                                </div>
                            </div>
                        </div>
                        <!-- /information -->

                    </div>
                </div>
            </div>

            <!-- информация о фотографиях -->
            <div class="card-information">
                <div class="card-information--item">
                    <img class="card-information--item_icon"
                         src="{{asset('img/Photo26.png')}}" alt="">
                    <div class="card-information--item_text">
                        <div class="card-information--item_title">Фото</div>
                        <div class="card-information--item_description">Фотографии блюд могут не соответствовать их виду
                            в действительности
                        </div>
                    </div>
                </div>
            </div>
            <!-- /информация о фотографиях -->
        </section>

        <!-- Основная секция с карточками-->
        <section class="switchers ui-tabs ui-corner-all ui-widget ui-widget-content" id="tabs">

            <!-- Информация меню и отзывы -->
            <ul class="switchers--wrap ui-tabs-nav ui-corner-all ui-helper-reset ui-helper-clearfix ui-widget-header"
                role="tablist">
                <li role="tab" tabindex="0"
                    class="ui-tabs-tab ui-corner-top ui-state-default ui-tab ui-tabs-active ui-state-active"
                    aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true" aria-expanded="true">
                    <a href="#" role="presentation" tabindex="-1"
                       class="ui-tabs-anchor" id="ui-id-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path id="menu-icn"
                                  d="M12.978.994a1 1 0 0 1 1 1v12.006a1 1 0 0 1-1 1h-9.983a1 1 0 0 1-1-1v-12a1 1 0 0 1 1-1h9.983m0-1h-9.983a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h9.983a2 2 0 0 0 2-2v-12a2 2 0 0 0-2-2zm-4.993 3a3 3 0 1 1-2.994 3 3 3 0 0 1 2.994-3m0-1a4 4 0 1 0 3.994 4 4 4 0 0 0-3.994-4zm3.994 10h-7.986v-1h7.986v1zm-2 2h-3.989v-1h3.993v1z">
                            </path>
                        </svg>
                        <button class="" type="button" data-toggle="collapse"
                                data-target="#multiCollapseExample1" aria-expanded="false"
                                aria-controls="multiCollapseExample2">Меню
                        </button>
                    </a>
                </li>
                <li id="information-tab" role="tab" tabindex="-1"
                    class="ui-tabs-tab ui-corner-top ui-state-default ui-tab" aria-controls="tabs-2"
                    aria-labelledby="ui-id-2" aria-selected="false" aria-expanded="false">
                    <a href="#" role="presentation" tabindex="-1"
                       class="ui-tabs-anchor" id="ui-id-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path id="info-icn"
                                  d="M38.979.974a7.1 7.1 0 0 1 7.021 7.026 7 7 0 0 1-14 0 7.067 7.067 0 0 1 6.979-7.026m0-.98a8.051 8.051 0 0 0-7.979 8.006 8 8 0 0 0 16 0 8.085 8.085 0 0 0-8.02-8zm1.021 7.006h-2v5h2v-5zm1 4h-4v1h4v-1zm-1-7h-2v2h2v-2z"
                                  transform="translate(-31)"></path>
                        </svg>
                        <button class="" type="button" data-toggle="collapse"
                                data-target="#multiCollapseExample2" aria-expanded="false"
                                aria-controls="multiCollapseExample2">
                            Информация
                        </button>
                    </a>
                </li>
                <li role="tab" tabindex="-1" class="ui-tabs-tab ui-corner-top ui-state-default ui-tab"
                    aria-controls="tabs-3" aria-labelledby="ui-id-3" aria-selected="false" aria-expanded="false">
                    <a href="#" role="presentation" tabindex="-1"
                       class="ui-tabs-anchor" id="ui-id-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path id="review-icn"
                                  d="M8 1.995c3.794 0 7 2.061 7 4.5 0 1.6-1.845 3.193-2.554 3.67l-.587.39.171.684.47 1.889-4.054-2.028-.212-.1h-.234c-3.6 0-7-2.188-7-4.5 0-2.437 3.205-4.5 7-4.5m0-1c-4.419 0-8 2.464-8 5.5s4 5.5 8 5.5l6 3-1-4s3-2 3-4.5c0-3.035-3.581-5.5-8-5.5z">
                            </path>
                        </svg>
                        <button class="" type="button" data-toggle="collapse"
                                data-target="#multiCollapseExample3"
                                aria-expanded="false" aria-controls="multiCollapseExample3">
                            Отзывы
                        </button>
                    </a>
                </li>
            </ul>
            <!-- /Информация меню и отзывы -->

            {{--Интерактивные--}}
            <div class="collapse multi-collapse" id="multiCollapseExample1">

                {{--                Карточки--}}
                @include('front.cards')
                {{--                /Карточки--}}

            </div>

            <div class="collapse multi-collapse" id="multiCollapseExample2">

                <!-- кнопка Контакты и информация -->

                <div class="info__text-title">
                    Хочешь вкусно поесть?
                </div>
                <div class="tab-content--info-wrap">
                    <div class="tab-content--info__text">
                        <div class="social--share">
                            <div class="row">
                                <div class="social--share-title">
                                    Вам нравится "{{$institution->category->name.' '.$institution->name}}"?
                                    <p>{{$institution->description}}</p>
                                </div>
                                <div class="flex-column">
                                    <div class="social--share-description">
                                <span>
                                    Рассказать друзьям:
                                </span>
                                        <div class="social-likes social-likes_visible social-likes_ready">
                                            <div class="social-likes__widget social-likes__widget_facebook"
                                                 title="Поделиться ссылкой на Фейсбуке"><span
                                                    class="social-likes__button social-likes__button_facebook"><span
                                                        class="social-likes__icon social-likes__icon_facebook"></span>Facebook</span><span
                                                    class="social-likes__counter social-likes__counter_facebook social-likes__counter_empty"></span>
                                            </div>
                                            <div class="social-likes__widget social-likes__widget_vkontakte"
                                                 title="Поделиться ссылкой во Вконтакте"><span
                                                    class="social-likes__button social-likes__button_vkontakte"><span
                                                        class="social-likes__icon social-likes__icon_vkontakte"></span>Вконтакте</span><span
                                                    class="social-likes__counter social-likes__counter_vkontakte social-likes__counter_empty"></span>
                                            </div>
                                            <div class="social-likes__widget social-likes__widget_twitter"
                                                 title="Поделиться ссылкой в Твиттере"><span
                                                    class="social-likes__button social-likes__button_twitter"><span
                                                        class="social-likes__icon social-likes__icon_twitter"></span>Twitter</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="map col-4" id="google_map"
                                         style="position: relative; overflow: hidden; max-height: 200px">
                                        <div
                                            style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                                            <div class="gm-style"
                                                 style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                                <div>
                                                    <button draggable="false" aria-label="Быстрые клавиши"
                                                            title="Быстрые клавиши" type="button"
                                                            style="background: none transparent; display: block; border: none; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; z-index: 1000002; outline-offset: 3px; right: 0px; bottom: 0px; transform: translateX(100%);"></button>
                                                </div>
                                                <div tabindex="0" aria-label="Карта" aria-roledescription="карта"
                                                     role="region"
                                                     style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"
                                                     aria-describedby="04DDDF70-F8AD-4A00-9603-ADB11A5F330F">
                                                    <div
                                                        style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                                <div
                                                                    style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -133, -8);">
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                    <div
                                                                        style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                                        <div style="width: 256px; height: 256px;"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                                                <div
                                                                    style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -133, -8);">
                                                                    <div
                                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                                    <div
                                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                                    <div
                                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                                                    <div
                                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                                    <div
                                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                                    <div
                                                                        style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="width: 26px; height: 37px; overflow: hidden; position: absolute; left: 11px; top: 35px; z-index: 72;">
                                                                <img alt=""
                                                                     src="https://maps.gstatic.com/mapfiles/api-3/images/spotlight-poi3_hdpi.png"
                                                                     draggable="false"
                                                                     style="position: absolute; left: 0px; top: 0px; width: 26px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                            </div>
                                                        </div>
                                                        <div
                                                            style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                            <div
                                                                style="position: absolute; z-index: 988; transform: matrix(1, 0, 0, 1, -133, -8);">
                                                                <div
                                                                    style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                    <img draggable="false" alt="" role="presentation"
                                                                         src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2896!3i1507!4i256!2m3!1e0!2sm!3i645384417!3m12!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1379903&amp;key=AIzaSyBCwH8qbrTTfQFirYELtPl7CMJ8DNJN5Sc&amp;token=64410"
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                    <img draggable="false" alt="" role="presentation"
                                                                         src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2895!3i1506!4i256!2m3!1e0!2sm!3i645384417!3m12!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1379903&amp;key=AIzaSyBCwH8qbrTTfQFirYELtPl7CMJ8DNJN5Sc&amp;token=86858"
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                    <img draggable="false" alt="" role="presentation"
                                                                         src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2896!3i1506!4i256!2m3!1e0!2sm!3i645384417!3m12!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1379903&amp;key=AIzaSyBCwH8qbrTTfQFirYELtPl7CMJ8DNJN5Sc&amp;token=83925"
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                    <img draggable="false" alt="" role="presentation"
                                                                         src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2897!3i1507!4i256!2m3!1e0!2sm!3i645384417!3m12!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1379903&amp;key=AIzaSyBCwH8qbrTTfQFirYELtPl7CMJ8DNJN5Sc&amp;token=61477"
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                    <img draggable="false" alt="" role="presentation"
                                                                         src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2895!3i1507!4i256!2m3!1e0!2sm!3i645384417!3m12!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1379903&amp;key=AIzaSyBCwH8qbrTTfQFirYELtPl7CMJ8DNJN5Sc&amp;token=67343"
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                                <div
                                                                    style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                                    <img draggable="false" alt="" role="presentation"
                                                                         src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i12!2i2897!3i1506!4i256!2m3!1e0!2sm!3i645384417!3m12!2sru-RU!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2!23i1379903&amp;key=AIzaSyBCwH8qbrTTfQFirYELtPl7CMJ8DNJN5Sc&amp;token=80992"
                                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                                        <div
                                                            style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; will-change: transform; transform: translate(0px, 0px);">
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                                        <span id="9B487BA9-3D54-473C-A131-BD54CA463A96"
                                                              style="display: none;">Для навигации используйте клавиши со стрелками.</span>
                                                                <div
                                                                    style="width: 26px; height: 37px; overflow: hidden; position: absolute; left: 11px; top: 35px; z-index: 72;"
                                                                    tabindex="-1"><img alt=""
                                                                                       src="https://maps.gstatic.com/mapfiles/transparent.png"
                                                                                       draggable="false"
                                                                                       usemap="#gmimap0"
                                                                                       style="width: 26px; height: 37px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                                    <map name="gmimap0" id="gmimap0">
                                                                        <area log="miw"
                                                                              coords="13,0,4,3.5,0,12,2.75,21,13,37,23.5,21,26,12,22,3.5"
                                                                              shape="poly" tabindex="-1" title=""
                                                                              style="display: inline; position: absolute; left: 0px; top: 0px; cursor: pointer; touch-action: none;">
                                                                    </map>
                                                                </div>
                                                            </div>
                                                            <div
                                                                style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                                        </div>
                                                    </div>
                                                    <div class="gm-style-moc"
                                                         style="z-index: 4; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                                        <p class="gm-style-mot"></p></div>
                                                    <div class="LGLeeN-keyboard-shortcuts-view"
                                                         id="04DDDF70-F8AD-4A00-9603-ADB11A5F330F"
                                                         style="display: none;">
                                                        <table>
                                                            <tbody>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                                                        aria-label="Стрелка влево">←</kbd></td>
                                                                <td aria-label="Переместить влево.">Переместить влево
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                                                        aria-label="Стрелка вправо">→</kbd></td>
                                                                <td aria-label="Переместить вправо.">Переместить
                                                                    вправо
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                                                        aria-label="Стрелка вверх">↑</kbd></td>
                                                                <td aria-label="Переместить вверх.">Переместить вверх
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key"
                                                                        aria-label="Стрелка вниз">↓</kbd></td>
                                                                <td aria-label="Переместить вниз.">Переместить вниз</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key">+</kbd>
                                                                </td>
                                                                <td aria-label="Приблизить.">Приблизить</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key">-</kbd>
                                                                </td>
                                                                <td aria-label="Уменьшить.">Уменьшить</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Home</kbd>
                                                                </td>
                                                                <td aria-label="Переместить влево на 75 %.">Переместить
                                                                    влево на
                                                                    75 %
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key">End</kbd>
                                                                </td>
                                                                <td aria-label="Переместить вправо на 75 %.">Переместить
                                                                    вправо
                                                                    на 75 %
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Предыдущая
                                                                        страница</kbd></td>
                                                                <td aria-label="Переместить вверх на 75 %.">Переместить
                                                                    вверх на
                                                                    75 %
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td style="text-align: right;"><kbd
                                                                        class="VdnQmO-keyboard-shortcuts-view--shortcut-key">Следующая
                                                                        страница</kbd></td>
                                                                <td aria-label="Переместить вниз на 75 %.">Переместить
                                                                    вниз
                                                                    на
                                                                    75 %
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <iframe aria-hidden="true" frameborder="0" tabindex="-1"
                                                        style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                                                <div
                                                    style="pointer-events: none; width: 100%; height: 100%; box-sizing: border-box; position: absolute; z-index: 1000002; opacity: 0; border: 2px solid rgb(26, 115, 232);"></div>
                                                <div>
                                                    <div class="gmnoprint" role="menubar"
                                                         style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                                        <div class="gm-style-mtc"
                                                             style="float: left; position: relative;">
                                                            <button draggable="false"
                                                                    aria-label="Показать карту с названиями объектов"
                                                                    title="Показать карту с названиями объектов"
                                                                    type="button"
                                                                    role="menuitemradio" aria-checked="true"
                                                                    aria-haspopup="true"
                                                                    style="background: none padding-box rgb(255, 255, 255); display: table-cell; border: 0px; margin: 0px; padding: 0px 17px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; direction: ltr; overflow: hidden; text-align: center; height: 40px; vertical-align: middle; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; font-size: 18px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 48px; font-weight: 500;"
                                                                    id="30B7F70D-540C-4843-B080-BA5300A55CFA">Карта
                                                            </button>
                                                            <ul role="menu"
                                                                aria-labelledby="30B7F70D-540C-4843-B080-BA5300A55CFA"
                                                                style="background-color: white; list-style: none; padding: 2px; margin: 0px; z-index: -1; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 40px; text-align: left; display: none;">
                                                                <li tabindex="-1" role="menuitemcheckbox"
                                                                    aria-label="Рельеф"
                                                                    draggable="false"
                                                                    title="Показать карту рельефа с названиями объектов"
                                                                    aria-checked="false"
                                                                    class="ssQIHO-checkbox-menu-item"
                                                                    style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px 8px 5px 5px; direction: ltr; text-align: left; white-space: nowrap;">
                                                            <span><span
                                                                    style="-webkit-mask-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22/%3E%3C/svg%3E&quot;); height: 1em; width: 1em; transform: translateY(0.15em); display: none;"></span><span
                                                                    style="-webkit-mask-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E&quot;); height: 1em; width: 1em; transform: translateY(0.15em);"></span></span><label
                                                                        style="cursor: inherit;">Рельеф</label></li>
                                                            </ul>
                                                        </div>
                                                        <div class="gm-style-mtc"
                                                             style="float: left; position: relative;">
                                                            <button draggable="false"
                                                                    aria-label="Показать спутниковую карту"
                                                                    title="Показать спутниковую карту" type="button"
                                                                    role="menuitemradio" aria-checked="false"
                                                                    aria-haspopup="true"
                                                                    style="background: none padding-box rgb(255, 255, 255); display: table-cell; border: 0px; margin: 0px; padding: 0px 17px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; direction: ltr; overflow: hidden; text-align: center; height: 40px; vertical-align: middle; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; font-size: 18px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 68px;"
                                                                    id="94016875-160B-468F-AA62-5C99CFBAFB79">Спутник
                                                            </button>
                                                            <ul role="menu"
                                                                aria-labelledby="94016875-160B-468F-AA62-5C99CFBAFB79"
                                                                style="background-color: white; list-style: none; padding: 2px; margin: 0px; z-index: -1; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 40px; text-align: left; display: none;">
                                                                <li tabindex="-1" role="menuitemcheckbox"
                                                                    aria-label="Названия объектов" draggable="false"
                                                                    title="Показать спутниковую карту с названиями объектов"
                                                                    aria-checked="true"
                                                                    class="ssQIHO-checkbox-menu-item"
                                                                    style="color: black; font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 5px 8px 5px 5px; direction: ltr; text-align: left; white-space: nowrap;">
                                                            <span><span
                                                                    style="-webkit-mask-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3Cpath%20d%3D%22M19%203H5c-1.11%200-2%20.9-2%202v14c0%201.1.89%202%202%202h14c1.11%200%202-.9%202-2V5c0-1.1-.89-2-2-2zm-9%2014l-5-5%201.41-1.41L10%2014.17l7.59-7.59L19%208l-9%209z%22/%3E%3C/svg%3E&quot;); height: 1em; width: 1em; transform: translateY(0.15em);"></span><span
                                                                    style="-webkit-mask-image: url(&quot;data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20d%3D%22M19%205v14H5V5h14m0-2H5c-1.1%200-2%20.9-2%202v14c0%201.1.9%202%202%202h14c1.1%200%202-.9%202-2V5c0-1.1-.9-2-2-2z%22/%3E%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22/%3E%3C/svg%3E&quot;); height: 1em; width: 1em; transform: translateY(0.15em); display: none;"></span></span><label
                                                                        style="cursor: inherit;">Названия
                                                                        объектов</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div>
                                                    <button draggable="false" aria-label="Включить полноэкранный режим"
                                                            title="Включить полноэкранный режим" type="button"
                                                            aria-pressed="false"
                                                            class="gm-control-active gm-fullscreen-control"
                                                            style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                                                        <img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                            alt="" style="height: 18px; width: 18px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                            alt="" style="height: 18px; width: 18px;"><img
                                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%200v6h2V2h4V0H0zm16%200h-4v2h4v4h2V0h-2zm0%2016h-4v2h6v-6h-2v4zM2%2012H0v6h6v-2H2v-4z%22/%3E%3C/svg%3E"
                                                            alt="" style="height: 18px; width: 18px;"></button>
                                                </div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div></div>
                                                <div>
                                                    <div
                                                        class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom"
                                                        draggable="false" data-control-width="40"
                                                        data-control-height="153"
                                                        style="margin: 10px; user-select: none; position: absolute; bottom: 167px; right: 40px;">
                                                        <div class="gmnoprint" data-control-width="40"
                                                             data-control-height="40"
                                                             style="display: none; position: absolute;">
                                                            <div
                                                                style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px;">
                                                                <button draggable="false"
                                                                        aria-label="Повернуть карту по часовой стрелке"
                                                                        title="Повернуть карту по часовой стрелке"
                                                                        type="button"
                                                                        class="gm-control-active"
                                                                        style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px;">
                                                                    <img alt=""
                                                                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                         style="width: 20px; height: 20px;"><img alt=""
                                                                                                                 src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                                                                 style="width: 20px; height: 20px;"><img
                                                                        alt=""
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                        style="width: 20px; height: 20px;"></button>
                                                                <div
                                                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                                                <button draggable="false"
                                                                        aria-label="Повернуть карту против часовой стрелки"
                                                                        title="Повернуть карту против часовой стрелки"
                                                                        type="button" class="gm-control-active"
                                                                        style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; left: 0px; top: 0px; overflow: hidden; width: 40px; height: 40px; transform: scaleX(-1);">
                                                                    <img alt=""
                                                                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                         style="width: 20px; height: 20px;"><img alt=""
                                                                                                                 src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                                                                 style="width: 20px; height: 20px;"><img
                                                                        alt=""
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2024%22%3E%3Cpath%20fill%3D%22none%22%20d%3D%22M0%200h24v24H0V0z%22/%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M12.06%209.06l4-4-4-4-1.41%201.41%201.59%201.59h-.18c-2.3%200-4.6.88-6.35%202.64-3.52%203.51-3.52%209.21%200%2012.72%201.5%201.5%203.4%202.36%205.36%202.58v-2.02c-1.44-.21-2.84-.86-3.95-1.97-2.73-2.73-2.73-7.17%200-9.9%201.37-1.37%203.16-2.05%204.95-2.05h.17l-1.59%201.59%201.41%201.41zm8.94%203c-.19-1.74-.88-3.32-1.91-4.61l-1.43%201.43c.69.92%201.15%202%201.32%203.18H21zm-7.94%207.92V22c1.74-.19%203.32-.88%204.61-1.91l-1.43-1.43c-.91.68-2%201.15-3.18%201.32zm4.6-2.74l1.43%201.43c1.04-1.29%201.72-2.88%201.91-4.61h-2.02c-.17%201.18-.64%202.27-1.32%203.18z%22/%3E%3C/svg%3E"
                                                                        style="width: 20px; height: 20px;"></button>
                                                                <div
                                                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); display: none;"></div>
                                                                <button draggable="false"
                                                                        aria-label="Изменить угол обзора"
                                                                        title="Изменить угол обзора" type="button"
                                                                        class="gm-tilt gm-control-active"
                                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; top: 0px; left: 0px; overflow: hidden; width: 40px; height: 40px;">
                                                                    <img alt=""
                                                                         src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                         style="width: 18px;"><img alt=""
                                                                                                   src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                                                   style="width: 18px;"><img
                                                                        alt=""
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2016%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2016h8V9H0v7zm10%200h8V9h-8v7zM0%207h8V0H0v7zm10-7v7h8V0h-8z%22/%3E%3C/svg%3E"
                                                                        style="width: 18px;"></button>
                                                            </div>
                                                        </div>
                                                        <button draggable="false"
                                                                aria-label="Перетащите человечка на карту, чтобы перейти в режим просмотра улиц"
                                                                title="Перетащите человечка на карту, чтобы перейти в режим просмотра улиц"
                                                                type="button" class="gm-svpc" dir="ltr"
                                                                data-control-width="40"
                                                                data-control-height="40"
                                                                style="background: rgb(255, 255, 255); border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: absolute; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 40px; height: 40px; touch-action: none; left: 0px; top: 0px;">
                                                            <div style="position: absolute; left: 50%; top: 50%;"></div>
                                                            <div style="position: absolute; left: 50%; top: 50%;"><img
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2023%2038%22%3E%3Cpath%20d%3D%22M16.6%2038.1h-5.5l-.2-2.9-.2%202.9h-5.5L5%2025.3l-.8%202a1.53%201.53%200%2001-1.9.9l-1.2-.4a1.58%201.58%200%2001-1-1.9v-.1c.3-.9%203.1-11.2%203.1-11.2a2.66%202.66%200%20012.3-2l.6-.5a6.93%206.93%200%20014.7-12%206.8%206.8%200%20014.9%202%207%207%200%20012%204.9%206.65%206.65%200%2001-2.2%205l.7.5a2.78%202.78%200%20012.4%202s2.9%2011.2%202.9%2011.3a1.53%201.53%200%2001-.9%201.9l-1.3.4a1.63%201.63%200%2001-1.9-.9l-.7-1.8-.1%2012.7zm-3.6-2h1.7L14.9%2020.3l1.9-.3%202.4%206.3.3-.1c-.2-.8-.8-3.2-2.8-10.9a.63.63%200%2000-.6-.5h-.6l-1.1-.9h-1.9l-.3-2a4.83%204.83%200%20003.5-4.7A4.78%204.78%200%200011%202.3H10.8a4.9%204.9%200%2000-1.4%209.6l-.3%202h-1.9l-1%20.9h-.6a.74.74%200%2000-.6.5c-2%207.5-2.7%2010-3%2010.9l.3.1L4.8%2020l1.9.3.2%2015.8h1.6l.6-8.4a1.52%201.52%200%20011.5-1.4%201.5%201.5%200%20011.5%201.4l.9%208.4zm-10.9-9.6zm17.5-.1z%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23333%22%20opacity%3D%22.7%22/%3E%3Cpath%20d%3D%22M5.9%2013.6l1.1-.9h7.8l1.2.9%22%20fill%3D%22%23ce592c%22/%3E%3Cellipse%20cx%3D%2210.9%22%20cy%3D%2213.1%22%20rx%3D%222.7%22%20ry%3D%22.3%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23ce592c%22%20opacity%3D%22.5%22/%3E%3Cpath%20d%3D%22M20.6%2026.1l-2.9-11.3a1.71%201.71%200%2000-1.6-1.2H5.699999999999999a1.69%201.69%200%2000-1.5%201.3l-3.1%2011.3a.61.61%200%2000.3.7l1.1.4a.61.61%200%2000.7-.3l2.7-6.7.2%2016.8h3.6l.6-9.3a.47.47%200%2001.44-.5h.06c.4%200%20.4.2.5.5l.6%209.3h3.6L15.7%2020.3l2.5%206.6a.52.52%200%2000.66.31l1.2-.4a.57.57%200%2000.5-.7z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M7%2013.6l3.9%206.7%203.9-6.7%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23cf572e%22%20opacity%3D%22.6%22/%3E%3Ccircle%20cx%3D%2210.9%22%20cy%3D%227%22%20r%3D%225.9%22%20fill%3D%22%23fdbf2d%22/%3E%3C/svg%3E"
                                                                    alt="Управление человечком в режиме просмотра улиц"
                                                                    style="height: 30px; width: 30px; position: absolute; transform: translate(-50%, -50%); pointer-events: none;"><img
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2024%2038%22%3E%3Cpath%20d%3D%22M22%2026.6l-2.9-11.3a2.78%202.78%200%2000-2.4-2l-.7-.5a6.82%206.82%200%20002.2-5%206.9%206.9%200%2000-13.8%200%207%207%200%20002.2%205.1l-.6.5a2.55%202.55%200%2000-2.3%202s-3%2011.1-3%2011.2v.1a1.58%201.58%200%20001%201.9l1.2.4a1.63%201.63%200%20001.9-.9l.8-2%20.2%2012.8h11.3l.2-12.6.7%201.8a1.54%201.54%200%20001.5%201%201.09%201.09%200%2000.5-.1l1.3-.4a1.85%201.85%200%2000.7-2zm-1.2.9l-1.2.4a.61.61%200%2001-.7-.3l-2.5-6.6-.2%2016.8h-9.4L6.6%2021l-2.7%206.7a.52.52%200%2001-.66.31l-1.1-.4a.52.52%200%2001-.31-.66l3.1-11.3a1.69%201.69%200%20011.5-1.3h.2l1-.9h2.3a5.9%205.9%200%20113.2%200h2.3l1.1.9h.2a1.71%201.71%200%20011.6%201.2l2.9%2011.3a.84.84%200%2001-.4.7z%22%20fill%3D%22%23333%22%20fill-opacity%3D%22.2%22/%3E%26quot%3B%3C/svg%3E"
                                                                    alt="Человечек находится над картой"
                                                                    style="height: 30px; width: 30px; position: absolute; transform: translate(-50%, -50%); pointer-events: none; display: none;"><img
                                                                    alt="Управление человечком в режиме просмотра улиц"
                                                                    src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2040%2050%22%3E%3Cpath%20d%3D%22M34-30.4l-2.9-11.3a2.78%202.78%200%2000-2.4-2l-.7-.5a6.82%206.82%200%20002.2-5%206.9%206.9%200%2000-13.8%200%207%207%200%20002.2%205.1l-.6.5a2.55%202.55%200%2000-2.3%202s-3%2011.1-3%2011.2v.1a1.58%201.58%200%20001%201.9l1.2.4a1.63%201.63%200%20001.9-.9l.8-2%20.2%2012.8h11.3l.2-12.6.7%201.8a1.54%201.54%200%20001.5%201%201.09%201.09%200%2000.5-.1l1.3-.4a1.85%201.85%200%2000.7-2zm-1.2.9l-1.2.4a.61.61%200%2001-.7-.3L28.4-36l-.2%2016.8h-9.4L18.6-36l-2.7%206.7a.52.52%200%2001-.66.31l-1.1-.4a.52.52%200%2001-.31-.66l3.1-11.3a1.69%201.69%200%20011.5-1.3h.2l1-.9h2.3a5.9%205.9%200%20113.2%200h2.3l1.1.9h.2a1.71%201.71%200%20011.6%201.2l2.9%2011.3a.84.84%200%2001-.4.7zM34%2029.6l-2.9-11.3a2.78%202.78%200%2000-2.4-2l-.7-.5a6.82%206.82%200%20002.2-5%206.9%206.9%200%2000-13.8%200%207%207%200%20002.2%205.1l-.6.5a2.55%202.55%200%2000-2.3%202s-3%2011.1-3%2011.2v.1a1.58%201.58%200%20001%201.9l1.2.4a1.63%201.63%200%20001.9-.9l.8-2%20.2%2012.8h11.3l.2-12.6.7%201.8a1.54%201.54%200%20001.5%201%201.09%201.09%200%2000.5-.1l1.3-.4a1.85%201.85%200%2000.7-2zm-1.2.9l-1.2.4a.61.61%200%2001-.7-.3L28.4%2024l-.2%2016.8h-9.4L18.6%2024l-2.7%206.7a.52.52%200%2001-.66.31l-1.1-.4a.52.52%200%2001-.31-.66l3.1-11.3a1.69%201.69%200%20011.5-1.3h.2l1-.9h2.3a5.9%205.9%200%20113.2%200h2.3l1.1.9h.2a1.71%201.71%200%20011.6%201.2l2.9%2011.3a.84.84%200%2001-.4.7z%22%20fill%3D%22%23333%22%20fill-opacity%3D%22.2%22/%3E%3Cpath%20d%3D%22M15.4%2038.8h-4a1.64%201.64%200%2001-1.4-1.1l-3.1-8a.9.9%200%2001-.5.1l-1.4.1a1.62%201.62%200%2001-1.6-1.4L2.3%2015.4l1.6-1.3a6.87%206.87%200%2001-3-4.6A7.14%207.14%200%20012%204a7.6%207.6%200%20014.7-3.1A7.14%207.14%200%200112.2%202a7.28%207.28%200%20012.3%209.6l2.1-.1.1%201c0%20.2.1.5.1.8a2.41%202.41%200%20011%201s1.9%203.2%202.8%204.9c.7%201.2%202.1%204.2%202.8%205.9a2.1%202.1%200%2001-.8%202.6l-.6.4a1.63%201.63%200%2001-1.5.2l-.6-.3a8.93%208.93%200%2000.5%201.3%207.91%207.91%200%20001.8%202.6l.6.3v4.6l-4.5-.1a7.32%207.32%200%2001-2.5-1.5l-.4%203.6zm-10-19.2l3.5%209.8%202.9%207.5h1.6V35l-1.9-9.4%203.1%205.4a8.24%208.24%200%20003.8%203.8h2.1v-1.4a14%2014%200%2001-2.2-3.1%2044.55%2044.55%200%2001-2.2-8l-1.3-6.3%203.2%205.6c.6%201.1%202.1%203.6%202.8%204.9l.6-.4c-.8-1.6-2.1-4.6-2.8-5.8-.9-1.7-2.8-4.9-2.8-4.9a.54.54%200%2000-.4-.3l-.7-.1-.1-.7a4.33%204.33%200%2000-.1-.5l-5.3.3%202.2-1.9a4.3%204.3%200%2000.9-1%205.17%205.17%200%2000.8-4%205.67%205.67%200%2000-2.2-3.4%205.09%205.09%200%2000-4-.8%205.67%205.67%200%2000-3.4%202.2%205.17%205.17%200%2000-.8%204%205.67%205.67%200%20002.2%203.4%203.13%203.13%200%20001%20.5l1.6.6-3.2%202.6%201%2011.5h.4l-.3-8.2z%22%20fill%3D%22%23333%22/%3E%3Cpath%20d%3D%22M3.35%2015.9l1.1%2012.5a.39.39%200%2000.36.42h.14l1.4-.1a.66.66%200%2000.5-.4l-.2-3.8-3.3-8.6z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M5.2%2028.8l1.1-.1a.66.66%200%2000.5-.4l-.2-3.8-1.2-3.1z%22%20fill%3D%22%23ce592b%22%20fill-opacity%3D%22.25%22/%3E%3Cpath%20d%3D%22M21.4%2035.7l-3.8-1.2-2.7-7.8L12%2015.5l3.4-2.9c.2%202.4%202.2%2014.1%203.7%2017.1%200%200%201.3%202.6%202.3%203.1v2.9m-8.4-8.1l-2-.3%202.5%2010.1.9.4v-2.9%22%20fill%3D%22%23e5892b%22/%3E%3Cpath%20d%3D%22M17.8%2025.4c-.4-1.5-.7-3.1-1.1-4.8-.1-.4-.1-.7-.2-1.1l-1.1-2-1.7-1.6s.9%205%202.4%207.1a19.12%2019.12%200%20001.7%202.4z%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23cf572e%22%20opacity%3D%22.6%22/%3E%3Cpath%20d%3D%22M14.4%2037.8h-3a.43.43%200%2001-.4-.4l-3-7.8-1.7-4.8-3-9%208.9-.4s2.9%2011.3%204.3%2014.4c1.9%204.1%203.1%204.7%205%205.8h-3.2s-4.1-1.2-5.9-7.7a.59.59%200%2000-.6-.4.62.62%200%2000-.3.7s.5%202.4.9%203.6a34.87%2034.87%200%20002%206z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M15.4%2012.7l-3.3%202.9-8.9.4%203.3-2.7%22%20fill%3D%22%23ce592b%22/%3E%3Cpath%20d%3D%22M9.1%2021.1l1.4-6.2-5.9.5%22%20style%3D%22isolation%3Aisolate%22%20fill%3D%22%23cf572e%22%20opacity%3D%22.6%22/%3E%3Cpath%20d%3D%22M12%2013.5a4.75%204.75%200%2001-2.6%201.1c-1.5.3-2.9.2-2.9%200s1.1-.6%202.7-1%22%20fill%3D%22%23bb3d19%22/%3E%3Ccircle%20cx%3D%227.92%22%20cy%3D%228.19%22%20r%3D%226.3%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M4.7%2013.6a6.21%206.21%200%20008.4-1.9v-.1a8.89%208.89%200%2001-8.4%202z%22%20fill%3D%22%23ce592b%22%20fill-opacity%3D%22.25%22/%3E%3Cpath%20d%3D%22M21.2%2027.2l.6-.4a1.09%201.09%200%2000.4-1.3c-.7-1.5-2.1-4.6-2.8-5.8-.9-1.7-2.8-4.9-2.8-4.9a1.6%201.6%200%2000-2.17-.65l-.23.15a1.68%201.68%200%2000-.4%202.1s2.3%203.9%203.1%205.3c.6%201%202.1%203.7%202.9%205.1a.94.94%200%20001.24.49l.16-.09z%22%20fill%3D%22%23fdbf2d%22/%3E%3Cpath%20d%3D%22M19.4%2019.8c-.9-1.7-2.8-4.9-2.8-4.9a1.6%201.6%200%2000-2.17-.65l-.23.15-.3.3c1.1%201.5%202.9%203.8%203.9%205.4%201.1%201.8%202.9%205%203.8%206.7l.1-.1a1.09%201.09%200%2000.4-1.3%2057.67%2057.67%200%2000-2.7-5.6z%22%20fill%3D%22%23ce592b%22%20fill-opacity%3D%22.25%22/%3E%3C/svg%3E"
                                                                    style="display: none; height: 40px; width: 40px; position: absolute; transform: translate(-60%, -45%); pointer-events: none;">
                                                            </div>
                                                        </button>
                                                        <div class="gmnoprint" data-control-width="40"
                                                             data-control-height="81"
                                                             style="position: absolute; left: 0px; top: 72px;">
                                                            <div draggable="false"
                                                                 style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                                                <button draggable="false" aria-label="Увеличить"
                                                                        title="Увеличить" type="button"
                                                                        class="gm-control-active"
                                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                                    <img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M18%207h-7V0H7v7H0v4h7v7h4v-7h7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;">
                                                                </button>
                                                                <div
                                                                    style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                                                <button draggable="false" aria-label="Уменьшить"
                                                                        title="Уменьшить" type="button"
                                                                        class="gm-control-active"
                                                                        style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                                    <img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;"><img
                                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2018%2018%22%3E%3Cpath%20fill%3D%22%23d1d1d1%22%20d%3D%22M0%207h18v4H0V7z%22/%3E%3C/svg%3E"
                                                                        alt="" style="height: 18px; width: 18px;">
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div
                                                        style="margin: 0px 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                                        <a target="_blank" rel="noopener"
                                                           title="Открыть эту область в Google Картах (в новом окне)"
                                                           aria-label="Открыть эту область в Google Картах (в новом окне)"
                                                           href="https://maps.google.com/maps?ll=42.873833,74.576809&amp;z=12&amp;t=m&amp;hl=ru-RU&amp;gl=US&amp;mapclient=apiv3"
                                                           style="display: inline;">
                                                            <div style="width: 66px; height: 26px;"><img alt="Google"
                                                                                                         src="data:image/svg+xml,%3Csvg%20fill%3D%22none%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20viewBox%3D%220%200%2069%2029%22%3E%3Cg%20opacity%3D%22.6%22%20fill%3D%22%23fff%22%20stroke%3D%22%23fff%22%20stroke-width%3D%221.5%22%3E%3Cpath%20d%3D%22M17.4706%207.33616L18.0118%206.79504%2017.4599%206.26493C16.0963%204.95519%2014.2582%203.94522%2011.7008%203.94522c-4.613699999999999%200-8.50262%203.7551699999999997-8.50262%208.395779999999998C3.19818%2016.9817%207.0871%2020.7368%2011.7008%2020.7368%2014.1712%2020.7368%2016.0773%2019.918%2017.574%2018.3689%2019.1435%2016.796%2019.5956%2014.6326%2019.5956%2012.957%2019.5956%2012.4338%2019.5516%2011.9316%2019.4661%2011.5041L19.3455%2010.9012H10.9508V14.4954H15.7809C15.6085%2015.092%2015.3488%2015.524%2015.0318%2015.8415%2014.403%2016.4629%2013.4495%2017.1509%2011.7008%2017.1509%209.04835%2017.1509%206.96482%2015.0197%206.96482%2012.341%206.96482%209.66239%209.04835%207.53119%2011.7008%207.53119%2013.137%207.53119%2014.176%208.09189%2014.9578%208.82348L15.4876%209.31922%2016.0006%208.80619%2017.4706%207.33616z%22/%3E%3Cpath%20d%3D%22M24.8656%2020.7286C27.9546%2020.7286%2030.4692%2018.3094%2030.4692%2015.0594%2030.4692%2011.7913%2027.953%209.39011%2024.8656%209.39011%2021.7783%209.39011%2019.2621%2011.7913%2019.2621%2015.0594c0%203.25%202.514499999999998%205.6692%205.6035%205.6692zM24.8656%2012.8282C25.8796%2012.8282%2026.8422%2013.6652%2026.8422%2015.0594%2026.8422%2016.4399%2025.8769%2017.2905%2024.8656%2017.2905%2023.8557%2017.2905%2022.8891%2016.4331%2022.8891%2015.0594%2022.8891%2013.672%2023.853%2012.8282%2024.8656%2012.8282z%22/%3E%3Cpath%20d%3D%22M35.7511%2017.2905v0H35.7469C34.737%2017.2905%2033.7703%2016.4331%2033.7703%2015.0594%2033.7703%2013.672%2034.7343%2012.8282%2035.7469%2012.8282%2036.7608%2012.8282%2037.7234%2013.6652%2037.7234%2015.0594%2037.7234%2016.4439%2036.7554%2017.2962%2035.7511%2017.2905zM35.7387%2020.7286C38.8277%2020.7286%2041.3422%2018.3094%2041.3422%2015.0594%2041.3422%2011.7913%2038.826%209.39011%2035.7387%209.39011%2032.6513%209.39011%2030.1351%2011.7913%2030.1351%2015.0594%2030.1351%2018.3102%2032.6587%2020.7286%2035.7387%2020.7286z%22/%3E%3Cpath%20d%3D%22M51.953%2010.4357V9.68573H48.3999V9.80826C47.8499%209.54648%2047.1977%209.38187%2046.4808%209.38187%2043.5971%209.38187%2041.0168%2011.8998%2041.0168%2015.0758%2041.0168%2017.2027%2042.1808%2019.0237%2043.8201%2019.9895L43.7543%2020.0168%2041.8737%2020.797%2041.1808%2021.0844%2041.4684%2021.7772C42.0912%2023.2776%2043.746%2025.1469%2046.5219%2025.1469%2047.9324%2025.1469%2049.3089%2024.7324%2050.3359%2023.7376%2051.3691%2022.7367%2051.953%2021.2411%2051.953%2019.2723v-8.8366zm-7.2194%209.9844L44.7334%2020.4196C45.2886%2020.6201%2045.878%2020.7286%2046.4808%2020.7286%2047.1616%2020.7286%2047.7866%2020.5819%2048.3218%2020.3395%2048.2342%2020.7286%2048.0801%2021.0105%2047.8966%2021.2077%2047.6154%2021.5099%2047.1764%2021.7088%2046.5219%2021.7088%2045.61%2021.7088%2045.0018%2021.0612%2044.7336%2020.4201zM46.6697%2012.8282C47.6419%2012.8282%2048.5477%2013.6765%2048.5477%2015.084%2048.5477%2016.4636%2047.6521%2017.2987%2046.6697%2017.2987%2045.6269%2017.2987%2044.6767%2016.4249%2044.6767%2015.084%2044.6767%2013.7086%2045.6362%2012.8282%2046.6697%2012.8282zM55.7387%205.22083v-.75H52.0788V20.4412H55.7387V5.220829999999999z%22/%3E%3Cpath%20d%3D%22M63.9128%2016.0614L63.2945%2015.6492%2062.8766%2016.2637C62.4204%2016.9346%2061.8664%2017.3069%2061.0741%2017.3069%2060.6435%2017.3069%2060.3146%2017.2088%2060.0544%2017.0447%2059.9844%2017.0006%2059.9161%2016.9496%2059.8498%2016.8911L65.5497%2014.5286%2066.2322%2014.2456%2065.9596%2013.5589%2065.7406%2013.0075C65.2878%2011.8%2063.8507%209.39832%2060.8278%209.39832%2057.8445%209.39832%2055.5034%2011.7619%2055.5034%2015.0676%2055.5034%2018.2151%2057.8256%2020.7369%2061.0659%2020.7369%2063.6702%2020.7369%2065.177%2019.1378%2065.7942%2018.2213L66.2152%2017.5963%2065.5882%2017.1783%2063.9128%2016.0614zM61.3461%2012.8511L59.4108%2013.6526C59.7903%2013.0783%2060.4215%2012.7954%2060.9017%2012.7954%2061.067%2012.7954%2061.2153%2012.8161%2061.3461%2012.8511z%22/%3E%3C/g%3E%3Cpath%20d%3D%22M11.7008%2019.9868C7.48776%2019.9868%203.94818%2016.554%203.94818%2012.341%203.94818%208.12803%207.48776%204.69522%2011.7008%204.69522%2014.0331%204.69522%2015.692%205.60681%2016.9403%206.80583L15.4703%208.27586C14.5751%207.43819%2013.3597%206.78119%2011.7008%206.78119%208.62108%206.78119%206.21482%209.26135%206.21482%2012.341%206.21482%2015.4207%208.62108%2017.9009%2011.7008%2017.9009%2013.6964%2017.9009%2014.8297%2017.0961%2015.5606%2016.3734%2016.1601%2015.7738%2016.5461%2014.9197%2016.6939%2013.7454h-4.9931V11.6512h7.0298C18.8045%2012.0207%2018.8456%2012.4724%2018.8456%2012.957%2018.8456%2014.5255%2018.4186%2016.4637%2017.0389%2017.8434%2015.692%2019.2395%2013.9838%2019.9868%2011.7008%2019.9868z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M29.7192%2015.0594C29.7192%2017.8927%2027.5429%2019.9786%2024.8656%2019.9786%2022.1884%2019.9786%2020.0121%2017.8927%2020.0121%2015.0594%2020.0121%2012.2096%2022.1884%2010.1401%2024.8656%2010.1401%2027.5429%2010.1401%2029.7192%2012.2096%2029.7192%2015.0594zM27.5922%2015.0594C27.5922%2013.2855%2026.3274%2012.0782%2024.8656%2012.0782S22.1391%2013.2937%2022.1391%2015.0594C22.1391%2016.8086%2023.4038%2018.0405%2024.8656%2018.0405S27.5922%2016.8168%2027.5922%2015.0594z%22%20fill%3D%22%23E94235%22/%3E%3Cpath%20d%3D%22M40.5922%2015.0594C40.5922%2017.8927%2038.4159%2019.9786%2035.7387%2019.9786%2033.0696%2019.9786%2030.8851%2017.8927%2030.8851%2015.0594%2030.8851%2012.2096%2033.0614%2010.1401%2035.7387%2010.1401%2038.4159%2010.1401%2040.5922%2012.2096%2040.5922%2015.0594zM38.4734%2015.0594C38.4734%2013.2855%2037.2087%2012.0782%2035.7469%2012.0782%2034.2851%2012.0782%2033.0203%2013.2937%2033.0203%2015.0594%2033.0203%2016.8086%2034.2851%2018.0405%2035.7469%2018.0405%2037.2087%2018.0487%2038.4734%2016.8168%2038.4734%2015.0594z%22%20fill%3D%22%23FABB05%22/%3E%3Cpath%20d%3D%22M51.203%2010.4357v8.8366C51.203%2022.9105%2049.0595%2024.3969%2046.5219%2024.3969%2044.132%2024.3969%2042.7031%2022.7955%2042.161%2021.4897L44.0417%2020.7095C44.3784%2021.5143%2045.1997%2022.4588%2046.5219%2022.4588%2048.1479%2022.4588%2049.1499%2021.4487%2049.1499%2019.568V18.8617H49.0759C48.5914%2019.4612%2047.6552%2019.9786%2046.4808%2019.9786%2044.0171%2019.9786%2041.7668%2017.8352%2041.7668%2015.0758%2041.7668%2012.3%2044.0253%2010.1319%2046.4808%2010.1319%2047.6552%2010.1319%2048.5914%2010.6575%2049.0759%2011.2323H49.1499V10.4357H51.203zM49.2977%2015.084C49.2977%2013.3512%2048.1397%2012.0782%2046.6697%2012.0782%2045.175%2012.0782%2043.9267%2013.3429%2043.9267%2015.084%2043.9267%2016.8004%2045.175%2018.0487%2046.6697%2018.0487%2048.1397%2018.0487%2049.2977%2016.8004%2049.2977%2015.084z%22%20fill%3D%22%234285F4%22/%3E%3Cpath%20d%3D%22M54.9887%205.22083V19.6912H52.8288V5.220829999999999H54.9887z%22%20fill%3D%22%2334A853%22/%3E%3Cpath%20d%3D%22M63.4968%2016.6854L65.1722%2017.8023C64.6301%2018.6072%2063.3244%2019.9869%2061.0659%2019.9869%2058.2655%2019.9869%2056.2534%2017.827%2056.2534%2015.0676%2056.2534%2012.1439%2058.2901%2010.1483%2060.8278%2010.1483%2063.3818%2010.1483%2064.6301%2012.1768%2065.0408%2013.2773L65.2625%2013.8357%2058.6843%2016.5623C59.1853%2017.5478%2059.9737%2018.0569%2061.0741%2018.0569%2062.1746%2018.0569%2062.9384%2017.5067%2063.4968%2016.6854zM58.3312%2014.9115L62.7331%2013.0884C62.4867%2012.4724%2061.764%2012.0454%2060.9017%2012.0454%2059.8012%2012.0454%2058.2737%2013.0145%2058.3312%2014.9115z%22%20fill%3D%22%23E94235%22/%3E%3C/svg%3E"
                                                                                                         draggable="false"
                                                                                                         style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                                            </div>
                                                        </a></div>
                                                </div>
                                                <div>
                                                    <div
                                                        style="display: inline-flex; position: absolute; right: 0px; bottom: 0px;">
                                                        <div class="gmnoprint" style="z-index: 1000001;">
                                                            <div draggable="false" class="gm-style-cc"
                                                                 style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                                <div
                                                                    style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                    <div style="width: 1px;"></div>
                                                                    <div
                                                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                </div>
                                                                <div
                                                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                    <button draggable="false"
                                                                            aria-label="Быстрые клавиши"
                                                                            title="Быстрые клавиши" type="button"
                                                                            style="background: none; display: inline-block; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit;">
                                                                        Быстрые клавиши
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoprint" style="z-index: 1000001;">
                                                            <div draggable="false" class="gm-style-cc"
                                                                 style="user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                                <div
                                                                    style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                    <div style="width: 1px;"></div>
                                                                    <div
                                                                        style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                                </div>
                                                                <div
                                                                    style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                    <button draggable="false"
                                                                            aria-label="Картографические данные"
                                                                            title="Картографические данные"
                                                                            type="button"
                                                                            style="background: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; color: rgb(0, 0, 0); font-family: inherit; line-height: inherit; display: none;">
                                                                        Картографические данные
                                                                    </button>
                                                                    <span
                                                                        style="">Картографические данные © 2023 Google</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="gmnoscreen">
                                                            <div
                                                                style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(0, 0, 0); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                                                Картографические данные © 2023 Google
                                                            </div>
                                                        </div>
                                                        <button draggable="false"
                                                                aria-label="Масштаб карты: 2&nbsp;км на 71 пкс"
                                                                title="Масштаб карты: 2&nbsp;км на 71 пкс" type="button"
                                                                class="gm-style-cc"
                                                                aria-describedby="F1A440A5-6785-4C5B-BA79-8234EDC36C66"
                                                                style="background: none; display: none; border: 0px; margin: 0px; padding: 0px; text-transform: none; appearance: none; position: relative; cursor: pointer; user-select: none; height: 14px; line-height: 14px;">
                                                            <div
                                                                style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div
                                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <span>2 км&nbsp;</span>
                                                                <div
                                                                    style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 75px;">
                                                                    <div
                                                                        style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                                                                    <div
                                                                        style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
                                                                    <div
                                                                        style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
                                                                    <div
                                                                        style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                                                                    <div
                                                                        style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
                                                                    <div
                                                                        style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
                                                                </div>
                                                            </div>
                                                            <span id="F1A440A5-6785-4C5B-BA79-8234EDC36C66"
                                                                  style="display: none;">Нажимайте, чтобы переключаться между метрической и британской системами измерения.</span>
                                                        </button>
                                                        <div class="gmnoprint gm-style-cc" draggable="false"
                                                             style="z-index: 1000001; user-select: none; position: relative; height: 14px; line-height: 14px;">
                                                            <div
                                                                style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div
                                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <a href="https://www.google.com/intl/ru-RU_US/help/terms_maps.html"
                                                                   target="_blank" rel="noopener"
                                                                   style="text-decoration: none; cursor: pointer; color: rgb(0, 0, 0);">Условия
                                                                    использования</a></div>
                                                        </div>
                                                        <div draggable="false" class="gm-style-cc"
                                                             style="user-select: none; position: relative; height: 14px; line-height: 14px; display: none;">
                                                            <div
                                                                style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                                                <div style="width: 1px;"></div>
                                                                <div
                                                                    style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                                            </div>
                                                            <div
                                                                style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                                                <a target="_blank" rel="noopener"
                                                                   title="Сообщить об ошибке на карте или снимке"
                                                                   dir="ltr"
                                                                   href="https://www.google.com/maps/@42.873833,74.576809,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                                                   style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(0, 0, 0); text-decoration: none; position: relative;">Сообщить
                                                                    об ошибке на карте</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /кнопка Контакты и информация -->
            <div class="collapse multi-collapse" id="multiCollapseExample3">

                <!-- Отзывы -->
                <div class="tab-content--feedback ui-tabs-panel ui-corner-bottom" id="tabs-3"
                     aria-labelledby="ui-id-3" role="tabpanel" aria-hidden="true" style="display: none;">
                    <div class="feedback--list">
                        <div class="feedback--title">Отзывы наших пользователей:</div>
                        <div class="feedback--comment-wrap">
                            <div class="comment--text">
                                О данном заведении ещё не оставлено отзывов
                            </div>
                        </div>
                    </div>
                    <div class="feedback--new">
                        <div class="feedback--title">Оставить отзыв:</div>
                        <div class="logout--user">
                            <a href="https://nambafood.kg/user/login?language=ru"> Войдите</a> или <a
                                href="https://nambafood.kg/register/?language=ru"> зарегистрируйтесь </a> чтобы оставить
                            свой отзыв
                        </div>
                        <div class="feedback__stats">
                            <div class="feedback--title">Детализация по отзывам</div>
                            <div class="feedback__body">
                                <div class="feedback__desc">Общее количество оставленных отзывов и рейтинг:</div>
                                <div class="feedback__average-rating">
                                    5.0
                                </div>
                                <div class="feedback__chart">
                                    <div class="chart-line">

                                        <div class="raiting-container
                    rating-result rating-result__5
            ">
                                            <label for="rating_5_1468920673" class="hover-area hover-area__5"></label>
                                            <input id="rating_5_1468920673" class="hide rating-input rating_5"
                                                   type="radio"
                                                   name="rating" value="5">
                                            <label for="rating_4_1468920673" class="hover-area hover-area__4"></label>
                                            <input id="rating_4_1468920673" class="hide rating-input rating_4"
                                                   type="radio"
                                                   name="rating" value="4">
                                            <label for="rating_3_1468920673" class="hover-area hover-area__3"></label>
                                            <input id="rating_3_1468920673" class="hide rating-input rating_3"
                                                   type="radio"
                                                   name="rating" value="3">
                                            <label for="rating_2_1468920673" class="hover-area hover-area__2"></label>
                                            <input id="rating_2_1468920673" class="hide rating-input rating_2"
                                                   type="radio"
                                                   name="rating" value="2">
                                            <label for="rating_1_1468920673" class="hover-area hover-area__1"></label>
                                            <input id="rating_1_1468920673" class="hide rating-input rating_1"
                                                   type="radio"
                                                   name="rating" value="1">
                                            <div class="stars-container"></div>
                                            <div class="rating-value rating-value__0">0</div>
                                            <div class="rating-value rating-value__1">1</div>
                                            <div class="rating-value rating-value__2">2</div>
                                            <div class="rating-value rating-value__3">3</div>
                                            <div class="rating-value rating-value__4">4</div>
                                            <div class="rating-value rating-value__5">5</div>
                                        </div>
                                        <div class="chart-line__container">
                                            <div style="width: 0%" class="chart-line chart-line__5"></div>
                                        </div>
                                        <span class="chart-line__value">0</span>
                                    </div>
                                    <div class="chart-line">

                                        <div class="raiting-container
                    rating-result rating-result__4
            ">
                                            <label for="rating_5_1472982001" class="hover-area hover-area__5"></label>
                                            <input id="rating_5_1472982001" class="hide rating-input rating_5"
                                                   type="radio"
                                                   name="rating" value="5">
                                            <label for="rating_4_1472982001" class="hover-area hover-area__4"></label>
                                            <input id="rating_4_1472982001" class="hide rating-input rating_4"
                                                   type="radio"
                                                   name="rating" value="4">
                                            <label for="rating_3_1472982001" class="hover-area hover-area__3"></label>
                                            <input id="rating_3_1472982001" class="hide rating-input rating_3"
                                                   type="radio"
                                                   name="rating" value="3">
                                            <label for="rating_2_1472982001" class="hover-area hover-area__2"></label>
                                            <input id="rating_2_1472982001" class="hide rating-input rating_2"
                                                   type="radio"
                                                   name="rating" value="2">
                                            <label for="rating_1_1472982001" class="hover-area hover-area__1"></label>
                                            <input id="rating_1_1472982001" class="hide rating-input rating_1"
                                                   type="radio"
                                                   name="rating" value="1">
                                            <div class="stars-container"></div>
                                            <div class="rating-value rating-value__0">0</div>
                                            <div class="rating-value rating-value__1">1</div>
                                            <div class="rating-value rating-value__2">2</div>
                                            <div class="rating-value rating-value__3">3</div>
                                            <div class="rating-value rating-value__4">4</div>
                                            <div class="rating-value rating-value__5">5</div>
                                        </div>
                                        <div class="chart-line__container">
                                            <div style="width: 0%" class="chart-line chart-line__4"></div>
                                        </div>
                                        <span class="chart-line__value">0</span>
                                    </div>
                                    <div class="chart-line">

                                        <div class="raiting-container
                    rating-result rating-result__3
            ">
                                            <label for="rating_5_1509187335" class="hover-area hover-area__5"></label>
                                            <input id="rating_5_1509187335" class="hide rating-input rating_5"
                                                   type="radio"
                                                   name="rating" value="5">
                                            <label for="rating_4_1509187335" class="hover-area hover-area__4"></label>
                                            <input id="rating_4_1509187335" class="hide rating-input rating_4"
                                                   type="radio"
                                                   name="rating" value="4">
                                            <label for="rating_3_1509187335" class="hover-area hover-area__3"></label>
                                            <input id="rating_3_1509187335" class="hide rating-input rating_3"
                                                   type="radio"
                                                   name="rating" value="3">
                                            <label for="rating_2_1509187335" class="hover-area hover-area__2"></label>
                                            <input id="rating_2_1509187335" class="hide rating-input rating_2"
                                                   type="radio"
                                                   name="rating" value="2">
                                            <label for="rating_1_1509187335" class="hover-area hover-area__1"></label>
                                            <input id="rating_1_1509187335" class="hide rating-input rating_1"
                                                   type="radio"
                                                   name="rating" value="1">
                                            <div class="stars-container"></div>
                                            <div class="rating-value rating-value__0">0</div>
                                            <div class="rating-value rating-value__1">1</div>
                                            <div class="rating-value rating-value__2">2</div>
                                            <div class="rating-value rating-value__3">3</div>
                                            <div class="rating-value rating-value__4">4</div>
                                            <div class="rating-value rating-value__5">5</div>
                                        </div>
                                        <div class="chart-line__container">
                                            <div style="width: 0%" class="chart-line chart-line__3"></div>
                                        </div>
                                        <span class="chart-line__value">0</span>
                                    </div>
                                    <div class="chart-line">

                                        <div class="raiting-container
                    rating-result rating-result__2
            ">
                                            <label for="rating_5_278749794" class="hover-area hover-area__5"></label>
                                            <input id="rating_5_278749794" class="hide rating-input rating_5"
                                                   type="radio"
                                                   name="rating" value="5">
                                            <label for="rating_4_278749794" class="hover-area hover-area__4"></label>
                                            <input id="rating_4_278749794" class="hide rating-input rating_4"
                                                   type="radio"
                                                   name="rating" value="4">
                                            <label for="rating_3_278749794" class="hover-area hover-area__3"></label>
                                            <input id="rating_3_278749794" class="hide rating-input rating_3"
                                                   type="radio"
                                                   name="rating" value="3">
                                            <label for="rating_2_278749794" class="hover-area hover-area__2"></label>
                                            <input id="rating_2_278749794" class="hide rating-input rating_2"
                                                   type="radio"
                                                   name="rating" value="2">
                                            <label for="rating_1_278749794" class="hover-area hover-area__1"></label>
                                            <input id="rating_1_278749794" class="hide rating-input rating_1"
                                                   type="radio"
                                                   name="rating" value="1">
                                            <div class="stars-container"></div>
                                            <div class="rating-value rating-value__0">0</div>
                                            <div class="rating-value rating-value__1">1</div>
                                            <div class="rating-value rating-value__2">2</div>
                                            <div class="rating-value rating-value__3">3</div>
                                            <div class="rating-value rating-value__4">4</div>
                                            <div class="rating-value rating-value__5">5</div>
                                        </div>
                                        <div class="chart-line__container">
                                            <div style="width: 0%" class="chart-line chart-line__2"></div>
                                        </div>
                                        <span class="chart-line__value">0</span>
                                    </div>
                                    <div class="chart-line">

                                        <div class="raiting-container
                    rating-result rating-result__1
            ">
                                            <label for="rating_5_999266444" class="hover-area hover-area__5"></label>
                                            <input id="rating_5_999266444" class="hide rating-input rating_5"
                                                   type="radio"
                                                   name="rating" value="5">
                                            <label for="rating_4_999266444" class="hover-area hover-area__4"></label>
                                            <input id="rating_4_999266444" class="hide rating-input rating_4"
                                                   type="radio"
                                                   name="rating" value="4">
                                            <label for="rating_3_999266444" class="hover-area hover-area__3"></label>
                                            <input id="rating_3_999266444" class="hide rating-input rating_3"
                                                   type="radio"
                                                   name="rating" value="3">
                                            <label for="rating_2_999266444" class="hover-area hover-area__2"></label>
                                            <input id="rating_2_999266444" class="hide rating-input rating_2"
                                                   type="radio"
                                                   name="rating" value="2">
                                            <label for="rating_1_999266444" class="hover-area hover-area__1"></label>
                                            <input id="rating_1_999266444" class="hide rating-input rating_1"
                                                   type="radio"
                                                   name="rating" value="1">
                                            <div class="stars-container"></div>
                                            <div class="rating-value rating-value__0">0</div>
                                            <div class="rating-value rating-value__1">1</div>
                                            <div class="rating-value rating-value__2">2</div>
                                            <div class="rating-value rating-value__3">3</div>
                                            <div class="rating-value rating-value__4">4</div>
                                            <div class="rating-value rating-value__5">5</div>
                                        </div>
                                        <div class="chart-line__container">
                                            <div style="width: 0%" class="chart-line chart-line__1"></div>
                                        </div>
                                        <span class="chart-line__value">0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Отзывы -->

            </div>
        </section>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById("multiCollapseExample1").classList.add("show");
        const buttons = document.querySelectorAll('[data-toggle="collapse"]');

        buttons.forEach((button) => {
            button.addEventListener('click', function () {
                const target = document.querySelector(button.getAttribute('data-target'));

                document.querySelectorAll('.multi-collapse').forEach((collapse) => {
                    if (collapse !== target) {
                        collapse.classList.remove('show');
                    }
                });

                target.classList.toggle('show');
            });
        });
    </script>
@endsection
