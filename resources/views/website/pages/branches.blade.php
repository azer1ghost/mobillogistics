@extends('website.layout')

@section('title', trans('translates.branches'))

@section('content')
    @include('website.components.banner', ['title' => trans('translates.branches')])
    <main id="blog">
        <div class="container py-4">
            <div class="row my-2">
                @foreach($branches as $branch)
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <div class="card" style="height: 370px">
                            <img class="card-img-top" width="300" height="200" src="{{asset(Voyager::image($branch->getAttribute('image')))}}" alt="">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{$branch->getTranslatedAttribute('title')}}</h5>
                                <p class="card-text" style="height: 40px">{{$branch->getTranslatedAttribute('body')}}</p>
                                <a href="{{$branch->getAttribute('location')}}" target="_blank"
                                   class="btn-green">@lang('translates.look_at_map')</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
