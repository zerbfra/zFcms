<?php

/* Directories */

define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'blog/');
define('LIB_DIR', ROOT_DIR .'lib/');
define('CLASS_DIR', ROOT_DIR .'class/');

/* Requirements */

require LIB_DIR."Parsedown.php";
require CLASS_DIR."post.php";

/* Constants */

define('POST_PER_PAGE', 2);

?>
