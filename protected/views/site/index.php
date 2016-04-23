<!-- Start of Carousel Gallery above main-menu -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="css/images/img1.jpg" alt="One"></div>
    <div class="item"><img src="css/images/img2.jpg" alt="Two"></div>
    <div class="item"><img src="css/images/img3.jpg" alt="Three"></div>
    <div class="item"><img src="css/images/img4.jpg" alt="Four"></div>
    <div class="item"><img src="css/images/img5.jpg" alt="Four"></div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span aria-hidden="true"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <spanaria-hidden="true"></span>
  </a>  
</div>


<div class="container">
  <div class="row">
    <?php foreach ($news as $item): ?>
      <div class="col-md-4">
        <div class="thumbnail news-block__item" >
          <img src="<?=$item->img_path?>">
          <div class="caption">
            <h3><?=$item->title?></h3>
            <p><?=$item->introText?> ...</p>
            <p><a href="/news/<?=$item->url_path?>" class="btn btn-primary" role="button">Read more</a> </p>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</div>