<?php

$this->breadcrumbs=array(
	'Home'=> '/',
	'News'=>'/news',
	$news->title
);
?>
<h1><?=$news->title?></h1>
<p><?=$news->dateString?></p>
<p><?=$news->text?></p>