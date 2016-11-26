<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from templateninja.net/themes/lastsunday/v1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Sep 2016 15:33:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="last sunday personal blog theme">
    <meta name="keywords" content="bootstrap, responsive, blog, portfolio, personal blog, masonry, isotope">
    <meta name="author" content="templateninja">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>My Blog</title>

    <!-- Bootstrap -->
    <link href="{!! asset('public/frontend/assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href="{{asset('public/frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/css/mint.min.css')}}" rel="stylesheet" id="color-style">
    <link href="{{asset('public/frontend/assets/css/responsive.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/assets/css/demo.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="page-top">

    <!-- begin:container -->
    <div class="container content-wrapper">

      <!-- begin:navbar -->
      <div class="content-article">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-default navbar-primary" role="navigation">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="index.html"><img src="{{asset('public/frontend/assets/img/logo.png')}}" alt="logo last sunday"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="page.html">Page</a></li>
                        <li class="divider"></li>
                        <li><a href="portfolio.html">Portfolio</a></li>
                        <li><a href="portfolio-single.html">Portfolio Single</a></li>
                      </ul>
                    </li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
      <!-- end:navbar -->

	  @yield('content')
    </div>
    <!-- end:container -->

    <!-- begin:footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget-footer">
              <h2><span>Last</span> Sunday.</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget-footer widget_comments">
              <div class="widget-title">
                <h3>Recent Discuss</h3>
              </div>

              <ul>
                <li><a href="#">Jane</a> On <a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Jane</a> On <a href="#">Lorem ipsum dolor</a></li>
                <li><a href="#">Jane</a> On <a href="#">Lorem ipsum dolor</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget-footer">
              <div class="widget-title">
                <h3>Socialize With Me!</h3>
              </div>

              <p>You can follow me at:</p>

              <ul class="social-icon">
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                <li><a href="#"><i class="fa fa-foursquare"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-soundcloud"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="widget-footer">
              <div class="widget-title">
                <h3>Subscribe!</h3>
              </div>
              <p>Get update straight to your inbox.</p>
              <form role="form">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <button type="submit" class="btn btn-secondary"><i class="fa fa-envelope-o"></i> Submit</button>
              </form>
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- end:footer -->

    <!-- begin:copyright -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12"><a href="#page-top" class="btn btn-secondary scrolltop btn-scrolltop"><i class="fa fa-chevron-up"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 copyright-left">
            <p>Copyright &copy; 2014 All Right Reserved.</p>
          </div>
          <div class="col-md-6 col-sm-6 copyright-right">
            <p>LastSunday by <strong><a href="http://templateninja.net/" target="_blank">Templateninja.</a></strong></p>
          </div>
        </div>
      </div>
    </div>
    <!-- end:copyright -->

    <!-- begin:navbar-secondary -->
    <div class="navbar-secondary navbar-secondary-hide"></div>
    <!-- end:navbar-secondary -->
    
    <!-- begin:demo-panel -->
    <div class="demo-btn">
      <i class="fa fa-cog"></i>
    </div>
    <div class="demo-container" style="display:none;">
      <h4>Color Schemes</h4>
      <ul>
        <li class="color-option color-mint" data-color-value="mint"></li>
        <li class="color-option color-orange" data-color-value="orange"></li>
        <li class="color-option color-yellow" data-color-value="yellow"></li>
        <li class="color-option color-green" data-color-value="green"></li>
        <li class="color-option color-red" data-color-value="red"></li>
        <li class="color-option color-blue" data-color-value="blue"></li>
        <li class="color-option color-purple" data-color-value="purple"></li>
      </ul>
    </div>
    <!-- end:demo-panel -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('public/frontend/assets/js/jquery.min.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('public/frontend/assets/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="{{asset('public/frontend/assets/js/gmap3.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/jquery.backstretch.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/magnificpopup.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/script.min.js')}}"></script>
    <script src="{{asset('public/frontend/assets/js/demo.js')}}"></script>
  </body>

<!-- Mirrored from templateninja.net/themes/lastsunday/v1.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Sep 2016 15:35:02 GMT -->
</html>