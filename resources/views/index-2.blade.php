@extends('layout.main')
@section('content')


<div class="container">
    <div class="row ">

        @foreach($images as $image)

        <div class="col-md-4 mb-2"><img src="{{asset($image->image_thumb_1)}}" class="img-fluid" alt="...">
            <form action="{{route('image1.delete')}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
            </form>
        </div>


        <div class="col-md-4 mb-2 "><img src="{{asset($image->image_thumb_2)}}" class="img-fluid" alt="...">
            <form action="{{route('image2.delete')}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
            </form>
        </div>

        <div class="col-md-4 mb-2"><img src="{{asset($image->image_thumb_3)}}" class="img-fluid" alt="...">
            <form action="{{route('image3.delete')}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
            </form>
        </div>

        @endforeach

    </div>

</div>


@endsection
