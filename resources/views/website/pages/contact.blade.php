@extends('website.layout')

@section('title', trans('translates.contact'))

@section('content')
    @include('website.components.banner', ['title' => trans('translates.contact')])
    <main id="contact">
        <div class="container pt-4">
            <div class="row my-2 flex-md-row-reverse">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top"  src="https://my.mobilgroup.az/assets/images/logo.svg" alt="Card image cap">
                        <h4 class="footer-title">@lang('translates.communication')</h4>
                        <ul class="contact-info">
                            <li class="m-2"><a class="footer-link text-primary" href="tel:{{setting('site.short_phone')}}"><i
                                        class="fal fa-user-headset"></i>
                                    {{setting('site.short_phone')}}</a></li>
                            <li class="m-2"><a class="footer-link text-primary" href="tel:{{setting('site.phone')}}"><i
                                        class="far fa-phone-alt"></i>
                                    {{setting('site.phone')}}</a></li>
                            <li class="m-2"><a class="footer-link text-primary" href="https://mobilbroker.az"><i
                                        class="far fa-globe"></i>
                                    {{setting('site.website')}}</a></li>
                            <li class="m-2"><a class="footer-link text-primary" href="mailto:{{setting('site.email')}}"><i
                                        class="far fa-envelope"></i>
                                    {{setting('site.email')}}</a></li>
                            <li class="m-2"><a class="footer-link text-primary" href="#"><i
                                        class="far fa-map-marker-alt"></i> {{setting('site.address')}}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <iframe src="{{setting('site.location')}}" height="500" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection
