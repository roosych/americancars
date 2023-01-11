<header class="header header--page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__content">
                    <div class="header__logo">
                        <a href="{{route('index')}}">
                            <img src="{{asset('img/logo.png')}}" alt="" style="height: 30px;">
                        </a>
                    </div>

                    <div class="header__menu">
                        <ul class="header__nav">
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="#">
                                    {{__('index.header.menu.link1')}}
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a class="header__nav-link" href="#">
                                    {{__('index.header.menu.link2')}}
                                </a>
                            </li>
                            <li class="header__nav-item">
                                <a href="#" class="header__nav-link">{{__('index.header.menu.link3')}}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header__actions">
                        <div class="header__phone">
                            <a href="tel:{{config('contacts.phone1')}}" class="mb-0">{{config('contacts.phone1')}}</a>
                        </div>

                        {{--<div class="header__action">
                            <a class="header__action-btn" href="#">
                                <span>{{__('index.header.all_cars_btn')}}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.62,13.08a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33A.84.84,0,0,0,8,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,6.62,13.08Zm13.14-4L18.4,5.05a3,3,0,0,0-2.84-2H8.44A3,3,0,0,0,5.6,5.05L4.24,9.11A3,3,0,0,0,2,12v4a3,3,0,0,0,2,2.82V20a1,1,0,0,0,2,0V19H18v1a1,1,0,0,0,2,0V18.82A3,3,0,0,0,22,16V12A3,3,0,0,0,19.76,9.11ZM7.49,5.68A1,1,0,0,1,8.44,5h7.12a1,1,0,0,1,1,.68L17.61,9H6.39ZM20,16a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V12a1,1,0,0,1,1-1H19a1,1,0,0,1,1,1Zm-3.38-2.92a.9.9,0,0,0-.54.54,1,1,0,0,0,1.3,1.3.9.9,0,0,0,.54-.54A.84.84,0,0,0,18,14a1.05,1.05,0,0,0-.29-.71A1,1,0,0,0,16.62,13.08ZM13,13H11a1,1,0,0,0,0,2h2a1,1,0,0,0,0-2Z"/></svg>
                            </a>
                        </div>--}}

                        <div class="ml-4 mt-1">
                            <a class="footer__lang-btn" href="#" role="button" id="dropdownLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('img/flags/'.app()->getLocale().'.svg')}}" alt="" style="border: 1px solid #e1e1e1;">
                            </a>

                            <ul class="dropdown-menu footer__lang-dropdown" aria-labelledby="dropdownLang">
                                <li><a href="/lang/change?lang=az"><img src="{{asset('img/flags/az.svg')}}" alt=""><span>Azərbaycanca</span></a></li>
                                <li><a href="/lang/change?lang=ru"><img src="{{asset('img/flags/ru.svg')}}" alt=""><span>Русский</span></a></li>
                            </ul>
                        </div>
                    </div>

                    <button class="header__btn" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

{{--
{{dd(config())}}--}}
