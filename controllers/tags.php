<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Janek
 * Date: 2.10.13
 * Time: 13:02
 * To change this template use File | Settings | File Templates.
 */

class tags {
	function index(){
		$this->tags= get_all("SELECT tag_name, COUNT(post_id) AS count FROM post_tags NATURAL JOIN tag GROUP BY tag_id");
	}
}