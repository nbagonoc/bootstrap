<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <title>project</title>
  <meta name="description" content="welcome to my website" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/bootstrap-dropdownhover.min.css">
  <link rel="stylesheet" href="css/fa-svg-with-js.css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:bold|Roboto" rel="stylesheet">  google font -->
</head>

<body>

  <!-- navigation -->
  <nav class="navbar navbar-default navbar-fixed-top"> <!-- add body{ padding-top:50px; } to fix problem with fixed top-->
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project</a>
      </div>
      
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Dropdown item</a></li>
                <li><a href="#">Dropdown item</a></li>
                <li><a href="#">Dropdown item</a></li>
              </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    
    </div>
  </nav>

  <!-- carousel -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- slide 1 -->
      <div class="item active">
        <div class="first-slide banner-slider" style="background-image: url('http://localhost/bootstrap/img/banner.jpg'">
          <div class="vertical-align">
            <div class="vertical-align-element">
              <h1 class="text-center text-uppercase color-white">banner text here</h1>
              <h3 class="text-center text-capitalize color-white weight-lighter">sub banner text here</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- slide 2-->
      <div class="item">
        <div class="second-slide banner-slider" style="background-image: url('http://localhost/bootstrap/img/banner.jpg'">
          <div class="vertical-align">
              <div class="vertical-align-element">
                <h1 class="text-center text-uppercase color-white">banner text here</h1>
                <h3 class="text-center text-capitalize color-white weight-lighter">sub banner text here</h3>
              </div>
            </div>
        </div>
      </div>
      <!-- slide 3-->
      <div class="item">
        <div class="third-slide banner-slider" style="background-image: url('http://localhost/bootstrap/img/banner.jpg'">
          <div class="vertical-align">
            <div class="vertical-align-element">
              <h1 class="text-center text-uppercase color-white">banner text here</h1>
              <h3 class="text-center text-capitalize color-white weight-lighter">sub banner text here</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- arrows -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="fas fa-chevron-circle-left fa-2x left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="fas fa-chevron-circle-right fa-2x right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->

  <!-- banner -->
  <!-- <div class="banner">
    <div class="vertical-align">
      <div class="vertical-align-element">
          <h1 class="text-center text-uppercase color-white">banner text here</h1>
          <h3 class="text-center text-capitalize color-white weight-lighter">sub banner text here</h3>
        </div>
    </div>
  </div> -->

  <!-- feature headings-->
  <div class="space-md background-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mobile-space">
          <div class="border space background-white">
            <h3 class="text-center text-uppercase">heading text</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam facere animi cum vel cumque rerum harum aliquid fuga ullam maiores? Dicta quidem nihil exercitationem omnis sit earum officia! Aliquid, quidem.</p>
            <a href="" class="btn btn-custom text-uppercase center-block">text goes here</a>
          </div>
        </div>
        <div class="col-md-4 mobile-space">
          <div class="border space background-white">
            <h3 class="text-center text-uppercase">heading text</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam facere animi cum vel cumque rerum harum aliquid fuga ullam maiores? Dicta quidem nihil exercitationem omnis sit earum officia! Aliquid, quidem.</p>
            <a href="" class="btn btn-custom text-uppercase center-block">text goes here</a>
          </div>
        </div>
        <div class="col-md-4 mobile-space">
          <div class="border space background-white">
            <h3 class="text-center text-uppercase">heading text</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam facere animi cum vel cumque rerum harum aliquid fuga ullam maiores? Dicta quidem nihil exercitationem omnis sit earum officia! Aliquid, quidem.</p>
            <a href="" class="btn btn-custom text-uppercase center-block">text goes here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
	<a href="#top" id="to-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
  <!-- footer -->
  <div class="footer space-md background-dark">
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/viewportchecker.js"></script><!-- viewport checker for triggerAnimation.js -->
  <script src="js/custom.js"></script><!-- controls/triggers the animation.css on scroll -->
  <script src="js/respond.min.js"></script><!-- fix ie 6, 7 and 8 -->
  <script src="js/fontawesome-all.min.js"></script>
</body>

</html>