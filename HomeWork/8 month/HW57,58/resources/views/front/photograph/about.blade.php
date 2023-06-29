@extends('layouts.front')
@section('content')

    <section class="u-clearfix u-image u-shading u-section-5 py-5" style="height: 100vh" id="sec-a7bd"
             data-image-width="1896"
             data-image-height="1080">
        <div class="container text-center">
            <h2>Компания:{{$company->name}}</h2>
            <div class="contact-map">
                <div class="container">
                    <div class="map-area d-flex justify-content-center">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;um=constructor%3Abb4a500b12d2df7176f3d6bbb575d914f71784d70800323e7a5207d2aba08fc4"
                            frameborder="0" allowfullscreen="true" width="60%" height="360px"
                            style="display: block;"></iframe>
                    </div>
                </div>
            </div>
            <p>Сотовый номер компании: <a href="#">{{$company->number}}</a></p>
            <p>Электронная почта компании: <a href="#">{{$company->email}}</a></p>
        </div>
    </section>

@endsection
