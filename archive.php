<?php

// require config.php for all variables/directory etc..
require "globals.php";
require "functions.php";

if(isset($_GET["d"])) {
  // get only one article
  $date = $_GET['d'];
  $posts = get_archive($date);

} else {
  // get no posts
  $posts = array();
}

$archive = list_archive();



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>zerbinatifrancesco.it</title>

  <!-- Bootstrap core CSS -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">

  <!-- FontAwesome CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
      <div id="wrap">
        <div class="blog-masthead">
          <div class="container">
            <nav class="blog-nav">
              <a class="blog-nav-item active" href="index.php">Home</a>
              <a class="blog-nav-item" href="#">About</a>
              <a class="blog-nav-item" href="#">App Store</a>
              <a class="blog-nav-item" href="#">Contact</a>
            </nav>
          </div>
        </div>

        <div class="container">

          <div class="blog-header">
            <h1 class="blog-title">Francesco</h1>
            <p class="lead blog-description">Engineering Student, iOS and Web Developer. I'm in love with Objective-C, HTML5 and PHP.
              <br>Check out my apps on App Store!</p>
            </div>

            <div class="row">

              <div class="col-sm-8 blog-main">

                <?php
                foreach ($posts as $post) {
                  $post->displayReduced();
                }

                ?>

              </div><!-- /.blog-main -->

              <div class="col-sm-3 col-sm-offset-1 blog-sidebar hidden-xs">
                <div class="sidebar-module sidebar-module-inset">
                  <h4>About</h4>
                  <p>I'm an <em>italian student and indie developer</em>.<br>
                    I currently have a Bachelor's Degree and I'm going to graduate of a Master's Degree in Computer Engineering at Politecnico di Milano.
                  </p>
                </div>
                <div class="sidebar-module">
                  <h4>Archives</h4>
                  <ol class="list-unstyled">

                    <?php
                    foreach ($archive as $date) {
                        echo "<li><a href='archive.php?d=".$date."''>".$date."</a></li>";
                    }
                    ?>

                 </ol>
               </div>
               <div class="sidebar-module">
                <h4>Elsewhere</h4>
                <ol class="list-unstyled">
                  <li><a href="#"><i class="fa fa-github"></i> GitHub</a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                  <li><a href="#"><i class="fa fa-envelope"></i> Mail</a></li>
                </ol>
              </div>
            </div><!-- /.blog-sidebar -->

          </div><!-- /.row -->

        </div><!-- /.container -->

        <div id="push"></div>
      </div>

      <footer class="blog-footer">
        <p>&copy; 2015 <a href="https://twitter.com/zerbfra" target="_blank">Zerbinati Francesco</a>, made with love with Markdown and <a href="http://getbootstrap.com" target="_blank">Bootstrap</a></p>
        <p>
          <a href="#">Back to top</a>
        </p>
      </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

  </body>
  </html>
