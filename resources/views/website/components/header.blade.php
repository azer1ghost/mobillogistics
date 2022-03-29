<header>
    <div class="header-top" style=" background-color: white; color:black;font-size: 18px">
        <div class="container d-flex justify-content-between align-items-center py-2" >
            {{--            <div class="header-top-left d-flex ">--}}
            {{--                <span class="address" style="color: black"><i class="far fa-map-marker-alt"></i> {{setting('site.address')}}</span>--}}
            {{--            </div>--}}
            <a class="navbar-brand" style="margin-left: 115px" href="{{route('homepage')}}">
                <img src="{{asset( Voyager::image(setting('site.logo')) ?? '/assets/images/logo-white.png') }}" width="150" alt="{{config('app.name')}}" >
            </a>
            <div class="header-top-right d-flex" style="margin-right: 108px;color: #111f6e">
                <div class="dropdown" style="margin-right: 76px">
                    <div class="dropdown-toggle"  id="language" data-bs-toggle="dropdown" aria-expanded="false">
                        {{--                        <span class="flag-icon flag-icon-{{app()->getLocale()}}"></span>--}}
                        {{ucfirst(app()->getLocale())}}
                    </div>
                    <div class="dropdown-menu" aria-labelledby="language" style="min-width: auto !important;color: #111f6e">
                        @foreach(config('voyager.multilingual.locales') as $locale)
                            <li>
                                <a class="dropdown-item"  href="{{route('locale', $locale)}}">
                                    {{--                                    <span class="flag-icon flag-icon-{{$locale}}"></span>--}}
                                    {{ucfirst($locale)}}
                                </a>
                            </li>
                        @endforeach
                    </div>
                </div>

                <div style="margin-right: 40px">
                    <a style="color: #111f6e;font-size: 23px" class="icon-call-center-1" href="tel:{{setting('site.short_phone')}}"></a>
                    {{--                    <a class="icon-call-center-1" style="color: black" href="tel:{{setting('site.short_phone')}}"></a>--}}
                </div>

                <div>
                    <a href="https://api.whatsapp.com/send?phone={{setting('site.phone')}}" target="_blank"><span style="font-size: 23px;color:#99cd08;color: #111f6e" class="fab fa-whatsapp me-2"></span></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="collapse navbar-collapse" id="navbarMenu">
                    {!! menu('website', 'website.components.menu') !!}
                </div>
            </div>
        </div>
    </nav>
</header>
