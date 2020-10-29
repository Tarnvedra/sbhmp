@extends('welcome')


@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
             <div class="carousel-inner">
                   <div class="carousel-item active">
                         <img class="first-slide img-fluid" src="{{ asset('images/homesb3.jpg') }}" alt="First slide">
                 <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="desktop">Suzy Bing Handmade Pictures</h1>
                       </div>
               </div>
            </div>
             <div class="carousel-item">
                   <img class="second-slide img-fluid" src="{{ asset('images/homesb2.jpg') }}" alt="Second slide">
                  <div class="container">
              <div class="carousel-caption">
                <h1 class="desktop">Suzy Bing Handmade Pictures</h1>
             </div>
            </div>
          </div>
      <div class="carousel-item">
        <img class="third-slide img-fluid" src="{{ asset('images/mothersb3.jpg') }}" alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1 class="desktop">Suzy Bing Handmade Pictures</h1>
         </div>
        </div>
      </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<div class="container marketing pt-4">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-3">
        <img class="rounded-circle" src="{{ asset('images/homesb1.jpg') }}" alt="Generic placeholder image" width="200" height="200">
       <!-- <h2>About</h2> -->
        <p class="pt-2">Celebration of your new home personalised to you</p>
       <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>  -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="rounded-circle" src="{{ asset('images/mothersb1.jpg') }}" alt="Generic placeholder image" width="200" height="200">
      <!--  <h2>Heading</h2> -->
        <p class="pt-2">Giving thanks to a much loved relative</p>
       <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="rounded-circle" src="{{ asset('images/homesb2.jpg') }}" alt="Generic placeholder image" width="200" height="200">
        <!-- <h2>Heading</h2> -->
        <p class="pt-2">What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="rounded-circle" src="{{ asset('images/homesb2.jpg') }}" alt="Generic placeholder image" width="200" height="200">
        <!-- <h2>Heading</h2> -->
        <p class="pt-2">What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        <!-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"> <span class="text-muted"></span></h2>
        <p class="lead">What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
      </div>
      <div class="col-md-5">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/homesb4.jpg') }}" data-src="holder.js/500x500/aut" alt="Generic placeholder image">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette pb-5">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><span class="text-muted"></span></h2>
        <p class="lead"> What is Lorem Ipsum?
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/homesb4.jpg') }}" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
      </div>
    </div>




@endsection
