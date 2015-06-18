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

define('POST_PER_PAGE', 2); 				// how many posts to display per page
define('TITLE',"Your Blog"); 				// the title of your blog
define('URL',"yoururl.com"); 				// your website url/title for the browser
define('DESCRIPTION',"Your description"); 	// a description for the website (header)

// ABOUT SIDEBAR
define('ABOUT',"Your about <b>sidebar</b>. You can put HTML!"); 

?>
