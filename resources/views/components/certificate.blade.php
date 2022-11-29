<style>

    .certificate {
        padding: 1rem 0;
    }
    .certificate .item {
        padding: 0 1rem;

    }
    .certificate img {
      max-width: 100%;
    }
    .certificate .owl-carousel {
        display: flex;
        align-items: center;
        padding-top: 6rem;
        padding-bottom: 4rem;
    }

</style>
<div class="col-12" style="background-color: #111f6e">
    <h1  class="text-center p-2" style="font-size: 2.25rem; color: #99cd08;">@lang('translates.certificates')</h1>
</div>
<div style="background-color: rgba(172,174,194,0.94)">
<section class="container certificates mb-2 ">

    <div class="certificate owl-carousel mt-1" >
        @foreach($certificates as $certificate)
            <div class="item" >
                    <img data-bs-toggle="modal" data-bs-target="#exampleModal" data-certificate='@json($certificate)' id="id1" class="certificate2"  src="{{asset(Voyager::image($certificate->getAttribute('image')))}}" alt="{{$certificate->getAttribute('title')}}">
            </div>
        @endforeach
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    <img class="modal-image" src="">
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@section('scripts')
<script>
    $('.certificate2').click (function (){
        var certificate = $(this).data('certificate')
        var src = certificate.image

        $('.modal-image').attr('src', "http://mobilbroker.az/storage/" + src);
        console.log(id);
    })
</script>
@endsection


