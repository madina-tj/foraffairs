<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">
	<script src="js/carousel.js"></script>
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/about.css">
</head>
<body>
	
<div style="padding-bottom: 600px; min-height: 100%;">
<div class="nav-side-menu">
    <div class="brand">Foreign Affairs Office</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
               <li data-toggle="collapse" data-target="#aboutdep" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> About department <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="aboutdep">
                  <li>General info</li>
                  <li>Working life</li>
                  <li>Achievements</li>
                </ul>
			<li  data-toggle="collapse" data-target="#aboutsdu" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> About SDU <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="aboutsdu">
                    <li class="active"><a href="#">Who is Suleyman Demirel?</a></li>
                    <li><a href="#">About University</a></li>
                    <li><a href="#">SDU Dormitory</a></li>
                    <li><a href="#">SDUdents</a></li>
                    <li><a href="#">Staff of SDU</a></li>
                    <li><a href="#">Rector's Blog</a></li>
                </ul>
            </ul>
     </div>
</div>
</div>
<div class="footer"></div>
</body>
</html>
<!-- <p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p> -->
