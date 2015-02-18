<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Zerbinati Francesco">
        <link rel="icon" href="../../favicon.ico">

        <?php
            if($single) {
                echo '<title>'.$posts[0]->title.'- zerbinatifrancesco.it</title>';
            } else {
                echo '<title>zerbinatifrancesco.it</title>';
            }
        ?>

        <!-- Bootstrap core CSS -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

        <!-- Custom styles for this template -->
        <link href="style.css" rel="stylesheet">

        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
