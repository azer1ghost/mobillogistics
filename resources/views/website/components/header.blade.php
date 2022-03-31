<header>
    <div class="header-top" style=" background-color: white; color:black;font-size: 18px">
        <div class="container d-flex justify-content-between align-items-center py-2" >
            <a class="navbar-brand header-logo" href="{{route('homepage')}}">
                <img src="{{asset( Voyager::image(setting('site.logo')) ?? '/assets/images/logo-white.png') }}" width="150" alt="{{config('app.name')}}" >
            </a>
            <div class="header-top-right d-flex header-icons">

                <div class="header-call">
                    <a style="color: #111f6e;font-size: 25px" class="icon-tel" href="tel:{{setting('site.short_phone')}}"></a>
                </div>

                <div class="header-whatsapp">
                    <a href="https://api.whatsapp.com/send?phone={{setting('site.phone')}}" target="_blank"><span style="font-size: 23px;color: #111f6e" class="fab fa-whatsapp me-2"></span></a>
                </div>

                <div class="dropdown head-lang">
                    <div class="dropdown-toggle" id="language" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ucfirst(app()->getLocale())}}
                    </div>
                    <div class="dropdown-menu" aria-labelledby="language" style="min-width: auto !important;color: #111f6e">
                        @foreach(config('voyager.multilingual.locales') as $locale)
                            <li>
                                <a class="dropdown-item" href="{{route('locale', $locale)}}">
                                    {{ucfirst($locale)}}
                                </a>
                            </li>
                        @endforeach
                    </div>
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
