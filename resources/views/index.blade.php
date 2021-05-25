@extends('layout.main')
@section('content')


<div class="container">
    <div class="row">
        @foreach($images as $image)
        <div class="col-md-4 mb-2"><img src="{{asset($image->image_1)}}" class="img-fluid" alt="..."></div>
        <div class="col-md-4 mb-2"><img src="{{asset($image->image_2)}}" class="img-fluid" alt="..."></div>
        <div class="col-md-4 mb-2"><img src="{{asset($image->image_3)}}" class="img-fluid" alt="..."></div>
        @endforeach

    </div>
    <div class="row">
            <a href="{{route('convert.small')}}"  class="btn btn-block btn-success mt-5">Convert</a>
    </div>
</div>


@endsection
