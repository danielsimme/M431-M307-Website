<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font import -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="stylesheet.css">
    <title>Hello, world!</title>
  </head>
  <body>
  <div>
        <div class="header-white">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid"><a class="navbar-brand" href="index.php">dandrew</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="forms.php">Contact</a></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Services</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Logo design</a><a class="dropdown-item" role="presentation" href="#">Banner design</a><a class="dropdown-item" role="presentation" href="#">content writing</a></div>
                            </li>
                        </ul>
                </div>
            </nav>
        </div>
    </div>
    

    <!-- CAROUSEL 1 -->
    <!-- Title -->
    <h1>Andrew Angst</h1>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <div class="row">
                <div class="col-md-4">
                    <img src="moses.jpg" alt="Image 1">
                </div>
                <div class="col-md-4">
                    <img src="poster 1.jpg" alt="Image 2">
                </div>
                <div class="col-md-4">
                    <img src="moses.jpg" alt="Image 3">
                </div>
            </div>
        </div>
        <div class="item">
            <div class="row">
                <div class="col-md-4">
                    <img src="poster 1.jpg" alt="Image 4">
                </div>
                <div class="col-md-4">
                    <img src="poster 1.jpg" alt="Image 5">
                </div>
                <div class="col-md-4">
                    <img src="moses.jpg" alt="Image 6">
                </div>
            </div>
        </div>
        <!-- Add more items as needed -->
    </div>

    
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-fire"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-fire"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>