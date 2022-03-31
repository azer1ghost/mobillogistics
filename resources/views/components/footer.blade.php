<footer>
    <div class="footer-top">
        <div class="container d-flex justify-content-between align-items-center">
            <h3>@lang('translates.join_us')</h3>
            <a class="btn-black" href="{{route('contactUs')}}">@lang('translates.online_contact')</a>
        </div>
    </div>
    <div class="footer-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-4">
                    <img src="{{Voyager::image(setting('site.footer_logo'))}}" alt="">
                    <p class="footer-text">
                        @lang('translates.footer_description')
                    </p>
                    <div class="mb-3 sosial-icons d-flex align-items-center">
                        @foreach($socials as $social)
                            <a href="{{$social->link}}" target="_blank" class="{{$social->name}}-icon">
                                <i class="fab fa-{{$social->name}} fa-2x"></i>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-2" style="margin-top: 33px">
                    <h4 class="footer-title">@lang('translates.menu')</h4>
                    <ul>
                        @foreach($menuItems as $item)
                            <li><a class="footer-link" href="{{ $item->link() }}">{{ $item->getTranslatedAttribute('title') }}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-8 col-lg-3" style="margin-top: 33px">
                    <h4 class="footer-title">@lang('translates.services')</h4>
                    <ul>
                        @foreach($services as $service)
                            <li>
                                <a class="footer-link" href="{{route('service', $service)}}">
                                    {{$service->getTranslatedAttribute('title')}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-md-4 col-lg-3" style="margin-top: 33px">
                    <h4 class="footer-title">@lang('translates.communication')</h4>
                    <ul class="contact-info">
                        <li><a class="footer-link" href="tel:{{setting('site.short_phone')}}"><i class="icon-zeng"></i>
                            {{setting('site.short_phone')}}</a></li>
                        <li><a class="footer-link" href="tel:{{setting('site.phone')}}"><i class="far fa-phone-alt"></i>
                            {{setting('site.phone')}}</a></li>
                        <li><a class="footer-link" href="https://mobilbroker.az"><i class="far fa-globe"></i>
                            {{setting('site.website')}}</a></li>
                        <li><a class="footer-link" href="mailto:{{setting('site.email')}}"><i class="far fa-envelope"></i>
                            {{setting('site.email')}}</a></li>
                        <li><a class="footer-link" href="#"><i class="far fa-map-marker-alt"></i> {{setting('site.address')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <p>@lang('translates.rights') © 2022 | Mobil Logistics</p>
        </div>
    </div>
</footer>
