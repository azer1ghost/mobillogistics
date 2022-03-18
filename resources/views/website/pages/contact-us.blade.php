@extends('website.layout')

@section('title', trans('translates.contact'))

@section('content')
    @include('website.components.banner', ['title' => trans('translates.contact')])
    <main id="contact">
        <div class="container pt-4">
            <div class="row my-2 flex-md-row-reverse">
                <div class="col-12 col-md-6 mb-4">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <input type="text" aria-label="" placeholder="@lang('translates.name')" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="email" aria-label="" placeholder="@lang('translates.email')" class="form-control">
                        </div>
                        <div class="col-6">
                            <input type="number" aria-label="" placeholder="@lang('translates.phone')" class="form-control">
                        </div>
                        <div class="col-6">
                            <input type="text" aria-label="" class="form-control" placeholder="@lang('translates.subject')">
                        </div>
                        <div class="col--12">
                            <textarea rows="5" aria-label="" placeholder="@lang('translates.note')" type="text" class="form-control" ></textarea>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn-green">@lang('translates.send')</button>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <iframe src="{{setting('site.location')}}" height="320" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </main>

@endsection
