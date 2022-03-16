<div class="page-header-banner" style="background-image: url('{{asset('assets/images/logistics1.jpg')}}');">
    <div class="page-header-content">
        <h1 class="page-header-title">{{$title}}</h1>
        <ol class="breadcrumb align-items-center">
            <li class="breadcrumb-item"><a href="{{route('index')}}"><i class="fal fa-home"></i></a></li>
            @if(!empty($segments))
                @foreach($segments as $url => $segment)
                    <li class="breadcrumb-item active"><a href="{{$url}}">{{$segment}}</a></li>
                @endforeach
            @endif
            <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$title}}</a></li>
        </ol>
    </div>
</div>
