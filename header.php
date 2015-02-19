<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Zerbinati Francesco">
        <link rel="icon" href="../../favicon.ico">

        <?php
            if(isset($single) && $single) {
                echo '<title>'.$posts[0]->title.'- '.URL.'</title>';
            } else {
                echo '<title>'.URL.'</title>';
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
            <div class="blog-masthead  navbar-fixed-top">
                <div class="container">
                    <nav class="blog-nav">

                        <?php

                            if(!isset($_GET['p'])) echo '<a class="blog-nav-item active" href="index.php">Home</a>';
                            else echo '<a class="blog-nav-item" href="index.php">Home</a>';

                            $files = get_pages_list();
                            foreach ($files as $page) {
                                if($_GET['p'] == $page) echo '<a class="blog-nav-item active" href="?p='.$page.'">'.$page.'</a>';
                                else echo '<a class="blog-nav-item" href="?p='.$page.'">'.$page.'</a>';
                            }
                        ?>
                        <!--
                        <a class="blog-nav-item" href="#">About</a>
                        <a class="blog-nav-item" href="#">App Store</a>
                        <a class="blog-nav-item" href="#">Contact</a>
                        -->
                    </nav>
                </div>
            </div>

            <div class="container">

                <div class="blog-header">
                    <h1 class="blog-title"><?php echo TITLE; ?></h1>
                    <p class="lead blog-description"><?php echo DESCRIPTION; ?></p>
                </div>
