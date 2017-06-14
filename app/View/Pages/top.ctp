<!--  Start Slider -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
      <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">
        <img src="<?php echo $base_url;?>/img/banner/banner2.jpg" alt="PIZZA" style="width:100%;">
        </a>
      </div>

      <div class="item">
      <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">
        <img src="<?php echo $base_url;?>/img/banner/banner3.jpg" alt="PIZZA" style="width:100%;">
        </a>
      </div>
    
      <div class="item">
      <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">
        <img src="<?php echo $base_url;?>/img/banner/banner4.jpg" alt="PIZZA" style="width:100%;">
        </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--  End Slider -->
  <hr>
  <!--  Start Product -->
  <div class ="row">
    <div class="col-md-6">
    <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">
										<img class="img-responsive" src="<?php echo $base_url;?>/img/product/product-1.jpg"
										alt="PIZZA"style="width:100%;">
									</a>
    </div>
    <div class="col-md-6">
    <a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'oder'))?>">
    <img src="<?php echo $base_url;?>/img/product/product-2.jpg" alt="PIZZA" style="width:100%;">
    </a>
    </div>
  </div>
  
  <!-- End Product -->