@extends('website.layout')

@section('title', $meta->get('title'))

@section('content')
    @include('website.components.banner', ['title' => trans('translates.news')])
    <main id="news">
        <div class="container py-4">
            <div class="row my-2">
                @foreach($posts as $post)
                    <div class="col-12 col-md-4 col-lg-3 my-2">
                        <div class="card shadow-sm" style="height: 460px">
                            <img src="{{asset(Voyager::image($post->getAttribute('image')))}}" height="304" class="card-img-top" alt="{{$post->getTranslatedAttribute('title')}}">
                            <div class="card-body">
                                <a href="{{route('article', $post)}}">
                                    <h6 class="card-title">{{$post->getTranslatedAttribute('title')}}</h6>
                                </a>
                                <p class="card-text">{{$post->getTranslatedAttribute('excerpt')}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-12 mt-5">
                  {{$posts->links()}}
                </div>
            </div>
        </div>
    </main>

@endsection
