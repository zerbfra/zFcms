<?php

/* Directories */

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'blog/');
define('PAGES_DIR', ROOT_DIR .'pages/');
define('LIB_DIR', ROOT_DIR .'lib/');
define('CLASS_DIR', ROOT_DIR .'class/');

/* Requirements */

require LIB_DIR."Parsedown.php";
require CLASS_DIR."post.php";

/* Constants */

define('POST_PER_PAGE', 2);
define('TITLE',"Francesco");
define('URL',"zerbinatifrancesco.it");
define('DESCRIPTION',"Engineering Student, iOS and Web Developer. I'm in love with Objective-C, HTML5 and PHP.<br>Check out my apps on <a href='https://itunes.apple.com/us/artist/francesco-zerbinati/id669900608' target='_blank'>App Store</a>!");


?>
