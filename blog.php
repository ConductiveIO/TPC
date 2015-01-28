<!DOCTYPE html>
<html lang="en">
  <head>
      <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
      
      <!-- Place this data between the <head> tags of your website -->


        <!-- Open Graph -->
        <meta property="og:title" content="Toy Pig Co." />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.toypig.co/" />
        <meta property="og:image" content="http://toypig.co/toypig_logo_template_TextBelow.png" />
        <meta property="og:description" content="We are a Boston-based digital experience company" />
        <meta property="og:site_name" content="Toy Pig Co." />
      
      <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cutive+Mono' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
      
      
    <title>TOY PIG CO.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="carousel.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">     
  </head>
<!-- ============================NAVBAR===================================== -->
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="logo">
              <a href="index.html" class="scroll"><img src="img/toypig_logo_withTextRight.svg" height=100px/></a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html#about">Who We Are</a></li>
            <li><a href="index.html#principles">Principles</a></li>
            <li><a href="index.html#clients">Clients</a></li>
            <li><a href="index.html#capabilities">Capabilities</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="index.html#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
<!-- navbar -->
      
<div class="container-blog">
    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-7">
            <div class="row">
              <?php include 'blogposts.php';?>
            </div>
        </div>
       <!-- <div class="col-lg-1">
        </div> -->
        <div class="col-lg-3">
            <div class="row" id="blog-right-nav">
                
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-2">
                            <a href="https://www.facebook.com/toypigco" target="blank"><img src="img/facebook-icon.svg" width=40 height=40/></a>
                        </div>
                        <div class="col-lg-2">
                            <a href="https://twitter.com/ToyPigCo" target="blank"><img src="img/twitter-icon.svg" width=40 height=40/></a>
                        </div>
                        <div class="col-lg-2">
                            <a href="https://www.linkedin.com/company/2171943" target="blank"><img src="img/li-icon.svg" width=40 height=40/></a>
                        </div>
                        <div class="col-lg-2">
                            <a href="https://plus.google.com/108013822447378414820" rel="publisher" target="blank"><img src="img/gplus-icon.svg" width=40 height=40/></a>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div>
                </div>
                <br>
                <div class="col-lg-12" id="twitter">
                    <a class="twitter-timeline" href="https://twitter.com/ToyPigCo" data-widget-id="520651078191169536">Tweets by @ToyPigCo</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>     
        </div>
    </div>
         
</div>

      

<!-- FOOTER -->
      <div class="row">
          <div class="col-lg-1 text-center">
           </div>
           <div class="col-lg-10 text-center">
               <hr class="featurette-divider">
           </div>
           <div class="col-lg-1 text-center">
           </div>
      </div>
      
       <div class="row">
           <div class="col-lg-1 text-center">
           </div>
           <div class="col-lg-10 text-left">
               <img src="img/toypig_logo_black.svg" width=100 height=100/><br>
                <p>
                    <h2>TOY PIG CO.</h2>
                    <p>Boston, MA<br>
                    617.394.8122<br>
                    info@toypig.co<br>
                    Copyright © 2014 TOY PIG CO. All rights reserved.
                </p>
      </div>
           <div class="col-lg-1 text-center">
           </div>
      </div>

    <!-- JAVASCRIPT -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/twbs/bootstrap/docs/assets/js/docs.min.js"></script>
      
    <!-- Custom JQUERY -->
    <script type="text/javascript" src="smoothscroll.js"></script>
    <script type="text/javascript" src="nav-fade.js"></script>

  </body>
</html>
