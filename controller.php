<?php

if(!isset($_GET['p']) && !isset($_GET['archive'])) {
    //blog, index page
    $single = false;

    if(isset($_GET['show'])) {
        // get only one article
        $single = true;
        $article = $_GET['show'];
        $posts = get_single_post(CONTENT_DIR,$article);

    } else {
        // get all posts for that page
        if(!isset($_GET['nav'])) $seq = 0;
        else $seq = $_GET['nav'];

        $post_count = post_count();

        // if lower than 0, return the 0 page
        if($seq < 0) $seq = 0;
        // if over the post_count give the 0 page
        if($seq >= $post_count) $seq = 0;

        $posts = get_page_posts($seq);
    }

    draw_blog($posts,$single,$seq,$post_count);

} else if(isset($_GET['archive'])) {
    // archive page
    draw_archive($_GET['archive']);

} else {
    // other pages
    $posts = get_single_post(PAGES_DIR,$_GET['p']);

    draw_page($posts);
}


/** Functions for drawing layout */


function draw_blog($posts,$single,$seq,$post_count) {

    echo '<div class="col-sm-8 blog-main">';

    foreach ($posts as $post) {
        $post->display();
    }

    if(!$single) {
        $prev = $seq-POST_PER_PAGE;
        $next = $seq+POST_PER_PAGE;

        echo '<nav><ul class="pager">';

        if($seq > 0) echo'<li><a href="?nav='.$prev.'"><i class="fa fa-chevron-left"></i></a></li>';
        if($next < $post_count) echo'<li><a href="?nav='.$next.'"><i class="fa fa-chevron-right"></i></a></li>';

        echo '</ul></nav>';
    }

    echo '</div><!-- /.blog-main -->';
}

function draw_archive($date) {

    $posts = get_archive($date);
    echo'<div class="col-sm-8 blog-main">';

    foreach ($posts as $post) {
        $post->displayReduced();
    }

    echo '</div><!-- /.blog-main -->';
}

function draw_page($posts) {

    echo'<div class="col-sm-8 blog-main">';

    foreach ($posts as $post) {
        $post->display();
    }

    echo '</div><!-- /.blog-main -->';
}

?>
