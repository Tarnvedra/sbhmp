<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
   <a class="navbar-brand" href="#">Suzy Bing Handmade Pictures <!--<img src="{{ asset('images/logo.png') }}" alt="Generic placeholder image" width="100" height="50"> --></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        
      </ul>
      </div>
  </nav>

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