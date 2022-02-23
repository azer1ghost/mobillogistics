@extends('website.layout')

@section('title', trans('translates.faqs'))

@section('content')
    @include('website.components.banner', ['title' => trans('translates.faqs')])
    <main id="faqs">
        <div class="container py-4">
            <div class="row my-2">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        @foreach($faqs as $faq)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="false" aria-controls="collapse{{$loop->iteration}}">
                                    {{$faq->getTranslatedAttribute('question')}}
                                </button>
                            </h2>
                            <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    {{$faq->getTranslatedAttribute('answer')}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
