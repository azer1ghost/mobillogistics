@extends('website.layout')

@section('title', 'Policy' )
@section('description', 'Policy')

@section('content')
    <div class="row my-2">
        <div class="col-12" style="text-align: center">

             <img style="border-radius: 15px" height="800" alt="Policy image" src=
                  @if(app()->getLocale() == 'az')
                  "{{Voyager::image(setting('site.policy'))}}"
                  @elseif(app()->getLocale() == 'ru')
                    "{{Voyager::image(setting('site.policy_ru'))}}"
                  @else
                  "{{Voyager::image(setting('site.policy_en'))}}"
                  @endif
                 >
        </div>
    </div>
@endsection
