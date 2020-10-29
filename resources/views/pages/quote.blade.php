@extends('welcome')


@section('content')

<div class="container pt-5">
    <h2 class="pt-5">Get Quote<span class="text-muted"></span></h2>
   <div class="row justify-content-center">

    <div class="col-md-10">

        <div class="row pb-2">
            <a href="{{ asset('images/homesb1.jpg') }}" data-toggle="lightbox" data-title="&copy; Suzy Bing Handmade Pictures" data-gallery="still-gallery" class="col-sm-4">
            <img src="{{ asset('images/homesb1.jpg') }}" class="img-fluid"></a>
            <a href="{{ asset('images/mothersb3.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
            <img src="{{ asset('images/mothersb3.jpg') }}" class="img-fluid"></a>
            <a href="{{ asset('images/homesb3.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
            <img src="{{ asset('images/homesb3.jpg') }}" class="img-fluid"></a>
        </div>
      </div>


   <div class="col-md-10">

   <div class="row pb-2">
       <a href="{{ asset('images/mothersb3.jpg') }}" data-toggle="lightbox" data-title="&copy; Suzy Bing Handmade Pictures" data-gallery="still-gallery" class="col-sm-4">
       <img src="{{ asset('images/mothersb3.jpg') }}" class="img-fluid"></a>
       <a href="{{ asset('images/homesb2.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
       <img src="{{ asset('images/homesb2.jpg') }}" class="img-fluid"></a>
       <a href="{{ asset('images/mothersb3.jpg') }}" data-toggle="lightbox" data-gallery="still-gallery" class="col-sm-4">
       <img src="{{ asset('images/mothersb3.jpg') }}" class="img-fluid"></a>
   </div>
 </div>
</div>

<h4 class="pt-5">Quote Price<span class="text-muted"></span></h4>

    <form id="quote-form" onsubmit="getQuote()" role="form">

        <div class="messages"></div>

        <div class="controls">

            <div class="row pt-4">
                <div class="col-md-8">

                        <div class="input-group mb-3">
                            <label for="frame" class="font-weight-bold pr-2">Frame Type</label>
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-secondary pl-3" type="button">Type</button>
                            </div>
                            <select class="custom-select" id="frame" required>
                              <option selected>Choose...</option>
                              <option value="1">White</option>
                              <option value="2">Black</option>
                              <option value="3">Oak</option>
                            </select>
                          </div>

                          <div class="input-group mb-3">
                            <label for="size" class="font-weight-bold pr-2">Required Size</label>
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-secondary pl-3" type="button">Frame Size</button>
                            </div>
                            <select class="custom-select" id="size" required>
                              <option selected>Choose...</option>
                              <option value="1">5 x 7</option>
                              <option value="2">6 x 4</option>
                              <option value="3">10 x 8</option>
                            </select>
                          </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="amount" class="font-weight-bold pr-3">Amount</label>
                        <input id="amount" type="number" name="amount" class="form-control" placeholder="Please Enter Amount Required*" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>

        </div>

                <div class="col-md-12">
                    <input type="submit" class="btn btn-success btn-send" value="Get Quote">
                </div>

            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted font-weight-bold" >* These fields are required.</p>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
