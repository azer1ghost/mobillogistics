<header>
    <div class="header-top">
        <div class="container d-flex justify-content-between align-items-center py-2">
            <div class="header-top-left d-flex ">
                <span class="address"><i class="far fa-map-marker-alt"></i> {{setting('site.address')}}</span>
            </div>
            <div class="header-top-right d-flex">
{{--                <form class="search-form d-flex" action="#">--}}
{{--                    <input type="text" placeholder="Axtar...">--}}
{{--                    <button><i class="far fa-search"></i></button>--}}
{{--                </form>--}}
                <div class="dropdown language-dropdown">
                    <div class="dropdown-toggle" id="language" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="flag-icon flag-icon-{{app()->getLocale()}}"></span> {{ucfirst(app()->getLocale())}}
                    </div>
                    <div class="dropdown-menu" aria-labelledby="language" style="min-width: auto !important;">
                        @foreach(config('voyager.multilingual.locales') as $locale)
                            <li>
                                <a class="dropdown-item" href="{{route('locale', $locale)}}">
                                    <span class="flag-icon flag-icon-{{$locale}}"></span>
                                    {{ucfirst($locale)}}
                                </a>
                            </li>
                        @endforeach
                    </div>
                </div>
                <div>
                    <a href="{{setting('site.linkedin')}}" target="_blank"><i class="fab fa-linkedin-in mx-3"></i></a>
                    <a href="https://api.whatsapp.com/send?phone={{setting('site.phone')}}" target="_blank"><i class="fab fa-whatsapp me-2"></i></a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{route('homepage')}}">
                <img src="{{asset( Voyager::image(setting('site.logo')) ?? '/assets/images/logo-white.png') }}"  alt="{{config('app.name')}}" >
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                {!! menu('website', 'website.components.menu') !!}
            </div>
        </div>
    </nav>
</header>
