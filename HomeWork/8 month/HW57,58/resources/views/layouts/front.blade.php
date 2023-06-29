<!DOCTYPE html>
<html style="font-size: 16px;" lang="ru" class="u-responsive-xl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Фотосалон Кот</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <meta name="generator" content="Nicepage 5.3.5, nicepage.com">
    <meta name="referrer" content="origin">
    <meta name="theme-color" content="#f06e49">
    <meta property="og:title" content="About">
    <meta property="og:type" content="website">
    <script>
        function gdprConfirmed() {
            return true;
        }
    </script>
    <script>
        if (gdprConfirmed()) {
            document.write("<sc" + "ript src=\"https://www.google.com/recaptcha/api.js?render=6Lc2HDEiAAAAALpe1yqNarK-BmlyYl_MNPZx7_AB\"></sc" + "ript>");
        }
    </script>
    <script>
        if (gdprConfirmed()) {
            (function (grecaptcha, sitekey, actions) {
                var recaptcha = {
                    execute: function (action, submitFormCb) {
                        try {
                            grecaptcha.execute(
                                sitekey,
                                {action: action}
                            ).then(function (token) {
                                var forms = document.getElementsByTagName('form');

                                for (var i = 0; i < forms.length; i++) {
                                    var fields = forms[i].getElementsByTagName('input');

                                    for (var j = 0; j < fields.length; j++) {
                                        var field = fields[j];

                                        if ('recaptchaResponse' === field.getAttribute('name')) {
                                            field.setAttribute('value', token);
                                            break;
                                        }
                                    }
                                }
                                submitFormCb();
                            });
                        } catch (e) {
                            var formError = document.querySelector('.u-form-send-error');

                            if (formError) {
                                formError.innerText = 'Site Owner Error: ' + e.message.replace(/:[\s\S]*/, '');
                                formError.style.display = 'block';
                            }
                        }
                    },

                    executeContact: function (submitFormCb) {
                        recaptcha.execute(actions['contact'], submitFormCb);
                    }
                };

                window.recaptchaObject = recaptcha;
            })(
                grecaptcha,

                '6Lc2HDEiAAAAALpe1yqNarK-BmlyYl_MNPZx7_AB',
                {'contact': 'contact'}
            );
        }
    </script>
</head>

<body class="u-body u-palette-1-base u-xl-mode" data-lang="en">

<header class="u-clearfix u-header u-palette-5-dark-3 u-header" id="sec-48dd">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="{{route('home')}}" class="u-image u-logo u-image-1" data-image-width="80"
           data-image-height="40">
            <img src="https://cdn-icons-png.flaticon.com/512/2809/2809658.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-hamburger u-offcanvas u-menu-1 u-enable-responsive" data-responsive-from="XL">
            <div class="menu-collapse"
                 style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
                <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="https://website3847926.nicepage.io/About.html?version=bc38cdff-e963-431f-83de-b9a20bdd3b56#">
                    <svg class="u-svg-link" viewBox="0 0 24 24">
                        <use xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px"
                         xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <rect y="1" width="16" height="2"></rect>
                            <rect y="7" width="16" height="2"></rect>
                            <rect y="13" width="16" height="2"></rect>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link active"
                                                      href="{{route('home')}}">Главная</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                      href="
                                                      {{route('front.about')}}
                                                      ">О нас</a>
                            </li>

                            @guest
                                @if (Route::has('login'))
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link"
                                           href="{{ route('login') }}">{{ __('Войти') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li class="u-nav-item">
                                        <a class="u-button-style u-nav-link"
                                           href="{{ route('register') }}">{{ __('Зарегестрироваться') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                       role="button"
                                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end bg-dark text-white"
                                         aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item text-white" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Выйти') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link"
                                                          href="{{route('admin.dashboard',['user'=>Auth::user()])}}">Перейти
                                        в панель админа</a>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
            <style class="offcanvas-style">
                .u-offcanvas .u-sidenav {
                    flex-basis: 250px !important;
                }

                .u-offcanvas:not(.u-menu-open-right) .u-sidenav {
                    margin-left: -250px;
                }

                .u-offcanvas.u-menu-open-right .u-sidenav {
                    margin-right: -250px;
                }

                @keyframes menu-shift-left {
                    from {
                        left: 0;
                    }

                    to {
                        left: 250px;
                    }
                }

                @keyframes menu-unshift-left {
                    from {
                        left: 250px;
                    }

                    to {
                        left: 0;
                    }
                }

                @keyframes menu-shift-right {
                    from {
                        right: 0;
                    }

                    to {
                        right: 250px;
                    }
                }

                @keyframes menu-unshift-right {
                    from {
                        right: 250px;
                    }

                    to {
                        right: 0;
                    }
                }
            </style>
        </nav>
    </div>
</header>

@yield('content')

<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-68bd">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Сайт был разработан мной лично)</p>
    </div>
</footer>

<section class="u-backlink u-clearfix u-grey-80">
    <a class="u-link" href="#" target="_blank">
        <span>Сделал</span>
    </a>
    <p class="u-text">
        <span>сайт</span>
    </p>
    <a class="u-link"
       href="#"
       target="_blank">
        <span>Есалинов Арыстанбек</span>
    </a>.
</section>

</body>

</html>
