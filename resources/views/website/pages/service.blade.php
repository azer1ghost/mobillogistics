@extends('website.layout')

@section('title', $service->getTranslatedAttribute('meta_title'))
@section('description', $service->getTranslatedAttribute('meta_description'))

@section('content')

    @include('website.components.banner', [
        'title' => $service->getTranslatedAttribute('title'),
        'segments' => [
            'javascript:void(0)' => 'Xidmətlər'
        ]
    ])

    <main id="service-detail">
        <div class="container py-4">
            <div class="row my-2">
                <div class="col-12 col-md-8 pb-2">
                    <div class="service-detail-content">
                        <h2>{{$service->getTranslatedAttribute('title')}}</h2>
                        <div class="service-detail-body">
                            <p>{!! $service->getTranslatedAttribute('detail') !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="list-group">
                        @foreach($services as $service)
                            <a href="{{route('service', $service)}}"
                               class="list-group-item list-group-item-action @if(request()->fullUrlIs(route('service', $service))) active @endif">
                                <i class="far fa-chevron-right"></i> {{$service->getTranslatedAttribute('title')}}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
