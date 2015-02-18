<?php

// require config.php for all variables/directory etc..
require "../globals.php";
require "../functions.php";


$website = "http://www.zerbinatifrancesco.it";

header("Content-Type: application/xml; charset=ISO-8859-1");


$rssfeed = '<?xml version="1.0" encoding="ISO-8859-1"?>';
$rssfeed .= '<rss version="2.0">';
$rssfeed .= '<channel>';
$rssfeed .= '<title>zerbinatifrancesco.it Feed</title>';
$rssfeed .= '<link>'.$website.'</link>';
$rssfeed .= '<description>This is the RSS feed of zerbinatifrancesco.it</description>';
$rssfeed .= '<language>en-us</language>';
$rssfeed .= '<copyright>Copyright (C) 2015 Zerbinati Francesco</copyright>';


$posts = get_posts();
foreach ($posts as $post) {
    $rssfeed .= '<item>';
    $rssfeed .= '<title>' . $post->title . '</title>';
    //$rssfeed .= '<description>' . $description . '</description>';
    $rssfeed .= '<link>'.$website.'/?a='.$post->file.'</link>';
    $rssfeed .= '<pubDate>' . $post->date->format("D, d M Y") . '</pubDate>';
    $rssfeed .= '</item>';


}

$rssfeed .= '</channel>';
$rssfeed .= '</rss>';

echo $rssfeed;
?>
