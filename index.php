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
        <div class="col-md-4">
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

  <!-- content -->
  <!-- <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="border space background-white">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, laboriosam tenetur rerum soluta quae eligendi fugit explicabo doloremque odio vero tempore, quia ipsa quisquam possimus deserunt dignissimos non cum officiis?</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="border space background-white">
          <ul class="list-troup">
            <li class="list-group-item">
              <a href="#">option here</a>
              <a href="#">option here</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div> -->
  
  <!-- content and sidebar-->
  <div class="space-md">
    <div class="container">
      <div class="row">
        <!-- content -->
        <div class="content">
          <div class="col-md-8">
            <div class="panel paneldefault border">
              <div class="panel-body">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit tempore quam in ut perferendis necessitatibus iure tempora, commodi quasi, illum vero eos quod nulla. Officiis pariatur nostrum quis recusandae dignissimos!</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error soluta id, eveniet odio numquam repellat ipsam molestias. Velit quibusdam molestias in voluptas a architecto quidem, dolorem fugit necessitatibus dolores! Iste.</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vel in odio laboriosam provident, alias nam modi dicta exercitationem, fugit numquam unde assumenda quisquam ipsam dolorem a doloremque rem vitae odit.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsum temporibus beatae voluptatibus sit commodi expedita laboriosam tenetur officiis maiores eaque maxime asperiores repellat, dolore fuga dolores harum? Odio, quis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi quia beatae eveniet fugiat quis delectus voluptates qui sequi eius facere obcaecati eaque dolore tenetur ex excepturi nam aut, inventore minus.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non consectetur ipsa autem similique eius et consequatur voluptates sapiente, dignissimos, excepturi nobis labore fuga modi blanditiis itaque vitae sed? Repudiandae, soluta.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Id repudiandae laudantium sunt fugiat, laboriosam odio tenetur neque in perferendis, a autem magni distinctio deleniti veritatis excepturi quod tempora. Harum, rem.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero excepturi recusandae sit expedita vel, vero, blanditiis voluptatem illum corporis quasi magni delectus ex quidem doloremque, voluptas voluptatum labore quibusdam? Asperiores.</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum incidunt nihil tempora sed facilis cumque magni cum laudantium at sit laboriosam, minima quia quam nostrum similique explicabo mollitia dignissimos. Maiores.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum natus corrupti quas! Soluta molestias id commodi ea voluptate ut reprehenderit sint architecto? Facere, nostrum ipsam? Consequatur, provident labore. Adipisci, odit.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita, consequatur nam illo maxime nemo magni rerum. Quae corrupti unde placeat modi et, labore tenetur fugiat, commodi, fuga enim quia suscipit!</p>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut tenetur explicabo in dignissimos veritatis velit repudiandae, ducimus modi quia, distinctio aut maxime voluptate nobis? Neque itaque architecto quaerat ducimus autem.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti quasi obcaecati atque voluptate fugit, culpa dignissimos, voluptas porro, est incidunt enim delectus veniam veritatis! Totam minima fuga qui soluta dolorum?</p>
              </div>
            </div>
          </div>
        </div>
        <!-- sidebar -->
        <div class="col-md-4 mobile-space">
          <div class="sidebar">
            <ul class="list-group">
              <li class="list-group-item">
                <a href="#">option</a>
              </li>
              <li class="list-group-item">
                <a href="#">option</a>
              </li>
              <li class="list-group-item">
                <a href="#">option</a>
              </li>
              <li class="list-group-item">
                <a href="#">option</a>
              </li>
            </ul> 
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- back to top-->
	<a href="#top" id="to-top"><i class="fas fa-chevron-circle-up fa-3x"></i></a>
  
  <!-- footer -->
  <div class="footer space-sm text-center background-dark">
    <div class="social">
      <a href="#" target="_blank"><i class="fab fa-facebook-f fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
      <a href="#" target="_blank"><i class="fab fa-twitter fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
      <a href="#" target="_blank"><i class="fab fa-instagram fa-2x" data-fa-transform="shrink-5" data-fa-mask="fas fa-circle"></i></a>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/viewportchecker.js"></script><!-- viewport checker for triggerAnimation.js -->
  <script src="js/custom.js"></script><!-- controls/triggers the animation.css on scroll -->
  <script src="js/respond.min.js"></script><!-- fix ie 6, 7 and 8 -->
  <script src="js/fontawesome-all.min.js"></script>
</body>

</html>