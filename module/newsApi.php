<?php 
include_once '../app/connect.php';
include_once '../class/feeds.php';
$news = new Feeds($conn);
$news->newsDataAPI();