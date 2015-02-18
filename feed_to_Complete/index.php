<?php
    header("Content-Type: application/rss+xml; charset=ISO-8859-1");


    $rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>zerbinatifrancesco.it Feed</title>';
    $rssfeed .= '<link>http://www.zerbinatifrancesco.it</link>';
    $rssfeed .= '<description>This is the RSS feed of zerbinatifrancesco.it</description>';
    $rssfeed .= '<language>en-us</language>';
    $rssfeed .= '<copyright>Copyright (C) 2015 Zerbinati Francesco</copyright>';


    $posts = get_posts();
    foreach ($posts as $post) {
        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $post->title . '</title>';
        //$rssfeed .= '<description>' . $description . '</description>';
        $rssfeed .= '<link>' . $post->link . '</link>';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
        $rssfeed .= '</item>';


    }

    while($row = mysql_fetch_array($result)) {
        extract($row);

        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . $title . '</title>';
        $rssfeed .= '<description>' . $description . '</description>';
        $rssfeed .= '<link>' . $link . '</link>';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
        $rssfeed .= '</item>';
    }

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>
