@extends('layouts.app')
@section('content')
    <style>
        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }
    </style>

    <div class="row mx-auto d-flex align-items-center p-5 text-center">
        <div id="map-container-google-1" class="z-depth-1-half map-container col-12 mt-5">
            <iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
        </div>
        <div class="blue">
            <div class="mt-5">
                <h3>Банковские реквизиты</h3>
                <p>ТОО «Petya.KZ»<br>БИН 00000000000<br>ИИК KZ0000000000000<br>БИК HSBKKZKX<br>Банк АО «Арыстанбек Банк
                    Казахстана»<br>Казахстан, 100026,<br>г. Алматы, ул. Жердын-Биржерова 9/2<br>КБЕ 17, КНП 710</p>
                <p>Свидетельство по делам президента<br>№ 568-1930-01–ТОО выдано 5 сентября 2023</p></div>
        </div>
    </div>
@endsection


