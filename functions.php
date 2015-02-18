<?php

function get_posts($files = array()) {

	if(empty($files)) $files = array_diff(scandir(CONTENT_DIR), array('..', '.'));
	$posts = array();

	foreach ($files as $entry) {

      $post = new Post;

  		if(file_exists(CONTENT_DIR.$entry)) {

    		$content = array();
    		$file = file_get_contents(CONTENT_DIR.$entry);

   			$headers = array(
      			'title'     => 'Title'
      			// eventually one can add more fields, for istance:
                //'date'      => 'Date'
      		);


    		foreach ($headers as $field => $regex){
      			if (preg_match('/^[ \t\/*#@]*' . preg_quote($regex, '/') . ':(.*)$/mi', $file, $match) && $match[1]) {
        			$content[ $field ] = trim(preg_replace("/\s*(?:\*\/|\?>).*/", '', $match[1]));
      			} else {
        			$content[ $field ] = '';
      			}
    		}


    		$content['body'] = preg_replace('#/\*.+?\*/#s', '', $file); // Remove comments and meta

    		/* New post creation */

    		// file and title
    		$post->file =  str_replace('.md','',$entry);
    		$post->title = $content['title'];

    		// date
        $format = 'Y-m-d-H:i'; // 2015-01-01-18:00
        // firstly I will try with hour and minute, if it fails, try only with Y-m-d
        if(($date = date_create_from_format($format, $post->file)) == false) {
          $format = 'Y-m-d';
          $date = date_create_from_format($format, $post->file);
        }
    		$post->date = $date;
    		//body
    		$post->body = $content['body'];

    		array_push($posts, $post);

    		// compare files dates and order from last to first
    		usort($posts, function($a, $b) {
      			return $a->date < $b->date;
    		});

  		} else {
            // not found, nearly impossible
            $post->title = "404: Not found";
            $post->date = NULL;
            $post->body = NULL;
            array_push($posts, $post);
      }
	}

	return $posts;
}

function list_archive() {

  $files = array_diff(scandir(CONTENT_DIR), array('..', '.'));
  $archive = array();

  foreach ($files as $entry) {

      if(file_exists(CONTENT_DIR.$entry)) {

        // date
        $format = 'Y-m-d-H:i'; // 2015-01-01-18:00
        $entry = str_replace('.md','',$entry);

        // firstly I will try with hour and minute, if it fails, try only with Y-m-d
        if(!($date = date_create_from_format($format, $entry))) {
          $format = 'Y-m-d';
          $date = date_create_from_format($format, $entry);
        }

        if($date) {
            $label = $date->format("F Y");
            array_push($archive,$label);
        }
      }
  }
  // ok, so delete duplicates and reverse order (we want nearest months first)
  return array_unique(array_reverse($archive));
}

function get_archive($month) {
    // $month is a label in format F Y
    $format = 'F Y';
    $date = date_create_from_format($format, $month);

    $yearNumber  = $date->format('Y');
    $monthNumber = $date->format('m');


    $files = array_diff(scandir(CONTENT_DIR), array('..', '.'));
    $filter = $yearNumber."-".$monthNumber;

    $filteredFiles = array_filter($files, function ($v) use($filter) {
        return substr($v, 0, 7) == $filter;
    });

    return get_posts($filteredFiles);
}

function get_single_post($entry) {

	$entry = $entry.".md";
    $files = array();
    array_push($files,$entry);

    return get_posts($files);
}

function get_page_posts($initial) {

    $files = array_diff(scandir(CONTENT_DIR), array('..', '.'));
    // reverse order
    rsort($files);
    $page = array_slice($files, $initial, POST_PER_PAGE);

    return get_posts($page);
}


function post_count() {
    $files = array_diff(scandir(CONTENT_DIR), array('..', '.'));
    return count($files);
}


?>
