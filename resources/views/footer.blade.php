<footer class="footer">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-4 order-4 order-md-1 order-lg-4 order-xl-1">
                <div class="footer__logo">
                    <img src="{{asset('img/logo.png')}}" alt="logo">
                </div>
                <p class="footer__tagline">{{__('index.footer.seo_text')}}</p>


            </div>

            <div class="col-6 col-md-4 col-lg-4 col-xl-2 order-1 order-md-2 order-lg-2 order-xl-3">
                <h6 class="footer__title">{{__('index.footer.menu.title1')}}</h6>
                <div class="footer__nav">
                    <a href="#">{{__('index.footer.menu.link1')}}</a>
                    <a href="#">{{__('index.footer.menu.link2')}}</a>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-4 col-xl-2 order-1 order-md-2 order-lg-2 order-xl-3">
                <h6 class="footer__title">{{__('index.footer.menu.title2')}}</h6>
                <div class="footer__nav">
                    <a href="#">{{__('index.footer.menu.link3')}}</a>
                    <a href="#">{{__('index.footer.menu.link4')}}</a>
                </div>
            </div>

            <div class="col-6 col-md-4 col-lg-4 col-xl-2 order-1 order-md-2 order-lg-2 order-xl-3">
                <h6 class="footer__title">{{__('index.footer.menu.title3')}}</h6>
                <div class="footer__nav">
                    <a href="tel:{{$setts->phone1}}">{{$setts->phone1}}</a>
                    <a href="#">info@americancars.az</a>
                </div>
            </div>


        </div>

        <div class="row">
            <div class="col-12">
                <div class="footer__content">
                    <div class="footer__social">
                        <a href="https://facebook.com/{{$setts->facebook}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20.9,2H3.1A1.1,1.1,0,0,0,2,3.1V20.9A1.1,1.1,0,0,0,3.1,22h9.58V14.25h-2.6v-3h2.6V9a3.64,3.64,0,0,1,3.88-4,20.26,20.26,0,0,1,2.33.12v2.7H17.3c-1.26,0-1.5.6-1.5,1.47v1.93h3l-.39,3H15.8V22h5.1A1.1,1.1,0,0,0,22,20.9V3.1A1.1,1.1,0,0,0,20.9,2Z"/></svg></a>

                        <a href="https://instagram.com/{{$setts->instagram}}" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M17.34,5.46h0a1.2,1.2,0,1,0,1.2,1.2A1.2,1.2,0,0,0,17.34,5.46Zm4.6,2.42a7.59,7.59,0,0,0-.46-2.43,4.94,4.94,0,0,0-1.16-1.77,4.7,4.7,0,0,0-1.77-1.15,7.3,7.3,0,0,0-2.43-.47C15.06,2,14.72,2,12,2s-3.06,0-4.12.06a7.3,7.3,0,0,0-2.43.47A4.78,4.78,0,0,0,3.68,3.68,4.7,4.7,0,0,0,2.53,5.45a7.3,7.3,0,0,0-.47,2.43C2,8.94,2,9.28,2,12s0,3.06.06,4.12a7.3,7.3,0,0,0,.47,2.43,4.7,4.7,0,0,0,1.15,1.77,4.78,4.78,0,0,0,1.77,1.15,7.3,7.3,0,0,0,2.43.47C8.94,22,9.28,22,12,22s3.06,0,4.12-.06a7.3,7.3,0,0,0,2.43-.47,4.7,4.7,0,0,0,1.77-1.15,4.85,4.85,0,0,0,1.16-1.77,7.59,7.59,0,0,0,.46-2.43c0-1.06.06-1.4.06-4.12S22,8.94,21.94,7.88ZM20.14,16a5.61,5.61,0,0,1-.34,1.86,3.06,3.06,0,0,1-.75,1.15,3.19,3.19,0,0,1-1.15.75,5.61,5.61,0,0,1-1.86.34c-1,.05-1.37.06-4,.06s-3,0-4-.06A5.73,5.73,0,0,1,6.1,19.8,3.27,3.27,0,0,1,5,19.05a3,3,0,0,1-.74-1.15A5.54,5.54,0,0,1,3.86,16c0-1-.06-1.37-.06-4s0-3,.06-4A5.54,5.54,0,0,1,4.21,6.1,3,3,0,0,1,5,5,3.14,3.14,0,0,1,6.1,4.2,5.73,5.73,0,0,1,8,3.86c1,0,1.37-.06,4-.06s3,0,4,.06a5.61,5.61,0,0,1,1.86.34A3.06,3.06,0,0,1,19.05,5,3.06,3.06,0,0,1,19.8,6.1,5.61,5.61,0,0,1,20.14,8c.05,1,.06,1.37.06,4S20.19,15,20.14,16ZM12,6.87A5.13,5.13,0,1,0,17.14,12,5.12,5.12,0,0,0,12,6.87Zm0,8.46A3.33,3.33,0,1,1,15.33,12,3.33,3.33,0,0,1,12,15.33Z"/></svg></a>
                    </div>

                    <small class="footer__copyright">© American Cars, {{now()->year}}. {{__('index.footer.copyright')}}</small>
                </div>
            </div>
        </div>
    </div>
</footer>