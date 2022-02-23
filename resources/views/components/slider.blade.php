<section id="homeSlide" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        @foreach($slides as $slide)
        <button type="button" data-bs-target="#homeSlide" data-bs-slide-to="{{$loop->index}}" @if($loop->first) class="active" @endif ></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($slides as $slide)
        <div class="carousel-item @if($loop->first) active @endif" data-bs-interval="3000">
            <img src="{{asset(Voyager::image($slide->image))}}" class="d-block w-100 slide-image" alt="{{$slide->getTranslatedAttribute('title')}}">
            <div class="carousel-caption">
                <h1>{{$slide->getTranslatedAttribute('title')}}</h1>
            </div>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeSlide" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeSlide" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
