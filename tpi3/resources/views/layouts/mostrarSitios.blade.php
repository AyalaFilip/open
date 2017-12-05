 

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>OPEN ADVERTISING</title>
    
                    
<!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                      <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-expanded"href="{{ url('/') }}">Open Advertising</a></li>
                    </ul>
                    

    

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">

      <div class="bg-faded p-4 my-4">
        <!-- Image Carousel -->
        @if(isset($sitios))
         @foreach($sitios as $s)
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid w-100" src="imgSitios/{{ $s->imgUrl}}" alt="" >
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Logo</h3>
                <p class="text-shadow"></p>
              </div>
            </div>

          @foreach($s->imagen as $i)
            <div class="carousel-item">
              <img class="d-block img-fluid w-100" src="imgSitios/{{ $i->imgUrl}}" alt="">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="text-shadow">Slide</h3>
                <p class="text-shadow">{{ $s->nombreSitio }}</p>
              </div>
            </div>
            @endforeach
             
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        @endforeach
        @endif
        <!-- Welcome Message -->
        
      </div>

      


    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
