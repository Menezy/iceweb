<?php
	$news = new Feeds($conn);
	$json = $news->grabNewsData($newsID);
	$data = json_decode($json, true);
	$newsid = $data['id'];
	$post_title = $data['post_title'];
	$post_desc = $data['post_desc'];
	$post_body = $data['post_body'];
	$post_author = $data['post_author'];
	$post_time = $data['post_time'];
	$post_status = $data['post_status'];
	$post_uniqueid = $data['post_uniqueid'];
	$post_featuredimage = $data['post_featuredimage'];