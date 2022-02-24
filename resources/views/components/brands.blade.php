<section class="container brands">
    <h1 class="text-center">@lang('translates.partners')</h1>
    <div class="owl-carousel">
        @foreach($brands as $brand)
            <div class="item">
                <img src="{{asset(Voyager::image($brand->getAttribute('image')))}}" height="125" alt="{{$brand->getAttribute('title')}}">
            </div>
        @endforeach
    </div>
</section>
