<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meine Webseite</title>
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

    <!-- External CSS -->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="logo">dandrew</div>
        <div class="nav-container">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="form-page-1.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="title-section">
        <h1>ALL OUR <span>PROJECTS</span></h1>
    </div>


    <!-- CAROUSEL ANDREW -->
    <!-- Title -->
    <div class="projects-section">
        <h2>GRAFFITI <span>/ drew</span></h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 1">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 2">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 3">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 4">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 5">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 6">
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
        <!-- CAROUSEL DANI aka myCarousel-2 -->
        <!-- Title -->
        <h2>3D Design <span>/ dani</span></h2>
        <div id="myCarousel-2" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 1">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 2">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 3">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 4">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 5">
                        </div>
                        <div class="col-md-4">
                            <img src="image/Poster 1.jpg" alt="Image 6">
                        </div>
                    </div>
                </div>
                <!-- Add more items as needed -->
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel-2" data-slide="prev">
                <span class="glyphicon glyphicon-fire"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel-2" data-slide="next">
                <span class="glyphicon glyphicon-fire"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <footer>
        <div class="social-icons">
            <a href="https://x.com" target="_blank">
                <img src="Icons/Twitter.svg" alt="Twitter">
            </a>
            <a href="https://instagram.com" target="_blank">
                <img src="Icons/Instagram.svg" alt="Instagram">
            </a>
            <a href="https://youtube.com" target="_blank">
                <img src="Icons/Youtube.svg" alt="YouTube">
            </a>
            <a href="https://linkedin.com" target="_blank">
                <img src="Icons/LinkedIn.svg" alt="LinkedIn">
            </a>
            <a href="https://facebook.com" target="_blank">
                <img src="Icons/Facebook.svg" alt="Facebook">
            </a>
        </div>
        <div class="footer-logo">dandrew</div>
    </footer>

</body>

</html>