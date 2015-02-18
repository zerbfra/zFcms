<?php

class Post {

	public $file;
	public $title;
	public $date;
	public $body;

	function display() {

		$Parsedown = new Parsedown(); // parsedown object
		//$printDate =  $this->date->format('Y-m-d');

		if($this->title) echo'<div class="blog-post"><h2 class="blog-post-title"><a href="?a='.$this->file.'">'.$this->title.'</a></h2>';
		else echo'<div class="blog-post">';


        if($this->date) echo '<p class="blog-post-meta">'.$this->date->format('F d, Y').'</p>';


        if($this->body)  echo $Parsedown->text($this->body).'</div>';
        else echo '</div>';


	}

    function displayReduced() {

		if($this->title) echo'<div class="blog-post-reduced"><h2 class="blog-post-title"><a href="index.php?a='.$this->file.'">'.$this->title.'</a></h2>';
		else echo'<div class="blog-post">';

        if($this->date) echo '<p class="blog-post-meta">'.$this->date->format('F d, Y').'</p>';
        echo '</div>';

	}

}

?>
