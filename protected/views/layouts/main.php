<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<script src="js/carousel.js"></script>
	<script src="js/jquery-1.12.0.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logoSdu"></div>
		<div id="tfheader">
			<form id="tfnewsearch" method="get" action="http://www.google.com">
			        <input type="text" class="tftextinput" placeholder="Search from this site" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
			</form>
			<div class="tfclear"></div>
		</div>
		<div id="lang_option">
			<img src="images/kazakh_flag.png" alt="Kazakh Flag" style="width: 22px; height: 13px;">
			<span>&nbsp|&nbsp</span>
			<img src="images/gb_flag.png" alt="Kazakh Flag" style="width: 21px; height: 18px;">
			<span>&nbsp|&nbsp</span>
			<img src="images/russian_flag.png" alt="Kazakh Flag" style="width: 22px; height: 18px;">

		</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'HOME', 'url'=>array('/site/index')),
				array('label'=>'DISCOVER', 
					'url'=>array('/site/page', 
					'view'=>'about',
					)),
				array('label'=>'NEWS', 'url'=>array('/site/page', 'view'=>'news')),
				array('label'=>'PROGRAMS', 'url'=>array('/site/page', 'view'=>'programs')),
				array('label'=>'PEOPLE', 'url'=>array('/site/page', 'view'=>'people')),
				array('label'=>'FAQ', 'url'=>array('/site/page', 'view'=>'faq')),
				// array('label'=>'LOGIN', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				// array('label'=>'LOGOUT ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),

		)); ?>
	</div><!-- mainmenu -->



	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>

	<?php echo $content; ?>

	


	

</div><!-- page -->

</body>
</html>
