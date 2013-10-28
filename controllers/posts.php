<?php

 class posts extends Controller{

	function index(){
		$this->posts = get_all("SELECT * FROM post NATURAL JOIN user ORDER BY post_created DESC");
		// prepare tags array
		$_tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag");
		foreach ($_tags as $tag){
			$this->tags[$tag['post_id']][]= array('tag_id'=>$tag['tag_id'], 'tag_name'=>$tag['tag_name']);
		}
	}
	function view(){
		$post_id = $this->params[0];
		$this->post = get_one("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
		$this->tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");
		$this->comments = get_all("SELECT * FROM post_comments NATURAL JOIN comment WHERE post_id = '$post_id'");
		$this->last_comment = get_one("SELECT comment_id FROM comment ORDER BY comment_id DESC"); // Gets latest comment id
	}
}