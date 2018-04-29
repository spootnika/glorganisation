<?php
require_once('includes/header.php');
?>


<div class="container-fluid containerHome" data-page="home">
  <div class="col-md-12">
    <div id="imagesCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#imagesCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#imagesCarousel" data-slide-to="1"></li>
        <li data-target="#imagesCarouselc" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="img/slide1.jpg" alt="">
        </div>
        <div class="item">
          <img src="img/slide2.jpg" alt="">
        </div>
        <div class="item">
          <img src="img/slide3.jpg" alt="">
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#imagesCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
      </a>
      <a class="right carousel-control" href="#imagesCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
      </a>
    </div>
  </div>

  <h1>Musical Comedies</h1>
</div>

<?php
require_once('includes/footer.php');
?>
