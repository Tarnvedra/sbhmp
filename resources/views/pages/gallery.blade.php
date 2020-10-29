@extends('welcome')


@section('content')
<div class="jumbotron bg-light">
    <div class="col-md-8">
        <h2 class="featurette-heading">Gallery<span class="text-muted"></span></h2>
        <hr>
  </div>

  <div class="stillgallery pt-5">


    <div class="row justify-content-center">

        <div class="col-md-10">
            <h4 class="featurette-heading">Home<span class="text-muted pb-3"></span></h4>
            <div class="row pb-2">
                <a href="{{ asset('images/homesb1.jpg') }}" data-toggle="lightbox" data-title="&copy; Suzy Bing Handmade Pictures" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/homesb1.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/homesb2.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/homesb2.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/homesb3.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/homesb3.jpg') }}" class="img-fluid"></a>
            </div>
            <h4 class="featurette-heading">Mother<span class="text-muted pt-3"></span></h4>
            <div class="row pt-2">
                <a href="{{ asset('images/mothersb1.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/mothersb1.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/mothersb2.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/mothersb2.jpg') }}" class="img-fluid"></a>
                <a href="{{ asset('images/mothersb2.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
                <img src="{{ asset('images/mothersb3.jpg') }}" class="img-fluid"></a>
            </div>

        </div>
    </div>
<p class="row justify-content-center pt-3"> All images &copy; Suzy Bing Handmade Pictures </p>
</div>
</div>

@endsection
