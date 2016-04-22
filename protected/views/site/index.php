<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<script src="/js/carousel.js"></script>
	<script src="/js/jquery-1.12.0.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">
</head>
<body>

<div style="min-height: 100%;">
<div class="gallery" align="center">


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="css/images/img1.jpg" alt="One">
    </div>

    <div class="item">
      <img src="css/images/img2.jpg" alt="Two">
    </div>

    <div class="item">
      <img src="css/images/img3.jpg" alt="Three">
    </div>

    <div class="item">
      <img src="css/images/img4.jpg" alt="Four">
    </div>
    <div class="item">
      <img src="css/images/img5.jpg" alt="Four">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <spanaria-hidden="true"></span>
  </a>
</div>
</div>
</div>

<div style="position:absolute; margin-top:400px; margin-left:100px;">
<table width="75%">
  
    
  

  <tr>
  <?php foreach ($news as $item): ?>
    <td><div class="col-sm-6 col-md-4">
          <div class="thumbnail news-block__item" >
            <img src="<?=$item->img_path?>">
            <div class="caption">
              <h3><?=$item->title?></h3>
              <p><?=$item->introText?> ...</p>
              <p><a href="/news/<?=$item->url_path?>" class="btn btn-primary" role="button">Learn more</a> </p>
            </div>
          </div>
        </div>
      </td>
      <?php endforeach ?>
</tr>

</table>


</div>
</div>  

</body>
</html>