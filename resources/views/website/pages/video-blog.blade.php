@extends('website.layout')

@section('title', 'Blog')

@section('content')
    @include('website.components.banner', ['title' => 'Video-Blog'])
    <main id="blog">
        <div class="container py-4">
            <div class="row mt-2">
                @foreach($posts as $post)
                    <div class="col-12 col-md-4 col-lg-4 my-2">
                        <div class="card overflow-hidden">
                            <iframe height="220" src="{{$post->getAttribute('video_url')}}"
                                    title="YouTube video player"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            <div class="card-body">
                                <h6 class="card-title text-center">{{$post->getTranslatedAttribute('title')}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

@endsection
