<section class="container brands">
    <h1 class="text-center" style=" font-size: 2.6rem; color: #99cd08;" >@lang('translates.partners')</h1>
    <div class="owl-carousel">
        @foreach($brands as $brand)
            <div class="item">
                <img src="{{asset(Voyager::image($brand->getAttribute('image')))}}" height="125" alt="{{$brand->getAttribute('title')}}">
            </div>
        @endforeach
    </div>
</section>
