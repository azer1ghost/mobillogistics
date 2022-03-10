<section class="results container">
    <div class="row">
        @foreach($counters as $counter)
            <div class="col-6 col-md-6 col-lg-3 py-5">
                <div class="result-card d-flex flex-column">
                    <span style="font-size: 60px" class="{{$counter->getAttribute('icon')}}"></span>
                    <div class="result-card-content">
                        <div class="counter-result d-flex ">
                            +
                            <span class="counter" data-count="{{$counter->getAttribute('count')}}">0</span>
                        </div>
                        <p class="text">{{$counter->getTranslatedAttribute('title')}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
