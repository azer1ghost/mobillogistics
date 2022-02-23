@extends('website.layout')

@section('title', $post->getTranslatedAttribute('seo_title'))
@section('description',  $post->getTranslatedAttribute('meta_description'))
@section('meta')
    <!-- Facebook -->
    <meta property="og:url"           content="{{route('article', $post)}}" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="{{$post->getTranslatedAttribute('seo_title')}}" />
    <meta property="og:description"   content="{{$post->getTranslatedAttribute('excerpt')}}" />
    <meta property="og:image"         content="{{asset(Voyager::image($post->getAttribute('image')))}}" />
@endsection

@section('content')
    @include('website.components.banner', ['title' => $post->getTranslatedAttribute('title')])
    <main id="blog">
        <div class="container py-4">
            <div class="row my-2">
                <div class="col-12">
                    <div class="news-detail-container">
                        <div class="news-detail-header">
                            <h3 class="news-detail-title">{{$post->getTranslatedAttribute('title')}}</h3>
                            <p class="news-date">{{$post->created_at->translatedFormat('d M, Y')}}</p>
                        </div>
                        <div class="news-detail-img">
                            <img src="{{asset(Voyager::image($post->getAttribute('image')))}}" alt="{{$post->getTranslatedAttribute('title')}}">
                        </div>
                        <div class="news-detail-body">
                            <h5>{{$post->getTranslatedAttribute('seo_title')}}</h5>
                            {!! $post->getTranslatedAttribute('body') !!}
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <ul class="d-flex share-icons mt-4">
                        <li>@lang('translates.share'): </li>
                        @foreach($shares as $share)
                            <li><a href="{{$share['url']}}"><i class="fab fa-{{$share['icon']}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
