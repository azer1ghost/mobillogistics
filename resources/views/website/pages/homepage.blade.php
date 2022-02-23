@extends('website.layout')

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))

@section('content')

    <x-slider/>
    <x-counter/>
    <section class="container my-3">
        <div class="home-about-us">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="{{asset(Voyager::image($meta->image()))}}" alt="{{$meta->get('heading') }}">
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
@endsection
