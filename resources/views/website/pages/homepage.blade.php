@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))

@section('content')

    <x-slider/>
    <x-counter/>
    <section class="container my-3">
        <div class="home-about-us">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img style="border-radius: 15px" width="450" src="{{asset(Voyager::image($meta->image()))}}" alt="{{$meta->get('heading') }}">
                </div>
                <div class="col-12 col-md-6 pt-5 pt-md-0 ps-0 ps-md-5">
                    <h1 class="home-about-us-title">{!! $meta->get('heading') !!}</h1>
                    <h5 class="home-about-us-subtitle">{!! $meta->get('excerpt') !!}</h5>
                    <p class="home-about-us-text">
                        {!! $meta->get('body') !!}
                    </p>
                    <br>
                    <a href="{{route('about')}}" class="btn-black">@lang('translates.details')</a>
                </div>
            </div>
        </div>
    </section>
    <x-services/>
    <x-brands/>
    <x-solution/>

    </main>
    <!-- Messenger Sohbet Eklentisi Code -->
    <div id="fb-root"></div>

    <!-- Your Sohbet Eklentisi code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
        var chatbox = document.getElementById('fb-customer-chat');
        chatbox.setAttribute("page_id", "105103251176603");
        chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v13.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
@endsection
