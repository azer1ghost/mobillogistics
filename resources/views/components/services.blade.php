<section class="services" style="background-image: url('{{asset('assets/images/home-services-bg.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="title">@lang('translates.services')</h1>
            </div>
            @foreach($services as $service)
                <div class="col-12 col-md-6 col-lg-4">
                    <a href="{{route('service', $service)}}"
                       class="service-card d-flex flex-column align-items-center justify-content-between">
                        <img src="{{asset(Voyager::image($service->icon))}}" alt="{{$service->getTranslatedAttribute('title')}}">
                        <div>
                            <h4 class="service-card-title">
                                {{$service->getTranslatedAttribute('title')}}
                            </h4>
                            <p class="service-card-text">
                                {{$service->getTranslatedAttribute('meta_description')}}
                            </p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
