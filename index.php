<?php
include_once('header.php');
?>

<!-- //w3l-header -->
<section class="w3l-main-slider">
  <!-- main-slider -->
  <div class="companies20-content">
    <div class="companies-wrapper">
      <div class="owl-one owl-carousel owl-theme">
      <?php
            $sliders  = new page();
    
            if($sliders->getSlider()) {
                
            foreach($sliders->getSlider() as $slider) {?>  
        <div class="item">
          <li>
            <div class="slider-info banner-view" style="background:url(<?php echo Page::BASE_URL.'uploads/slider/'.$slider['image']; ?>);background-size: cover;
                min-height: 700px;
                position: relative;
                z-index: 0;
                display: grid;
                align-items: center;">
              <div class="banner-info container">
                <h5 class="banner-text"><?php echo $slider['title'];?></h5>
                <h3 class="banner-text"><?php echo $slider['sub_title'];?></h3>
                <p><?php  echo $slider['description'];?></p>
                <!-- <a href="about.html" class="btn btn-primary btn-style">Explore More</a>
                <a href="contact.html" class="btn transparent-btn btn-style ml-2">Contact Us</a> -->
              </div>
            </div>
          </li>
        </div>
        <?php }
         }else{?>
    
        <?php } ?>
      </div>
    </div>
  </div>
  <!-- /main-slider -->
</section>
<section class="w3l-about" id="about">
  <div class="new-block py-5">
    <div class="container py-lg-5 py-md-4">
      <div class="row middle-section">
        <div class="col-lg-6 section-width align-self">
           <?php 
             $pg  = new page();
             $page = $set->getpageDetails('home');
             ?>
            <h5><?php echo $page['title'];?></h5>
          <h2><?php echo $page['sub_title'];?></h2>
            <p class="mt-4 pb-3"><?php echo $page['description'];?></p>
            <a href="about" class="btn btn-outline-primary btn-outline-style mt-4"> Know more about us</a>
        </div>
        <div class="col-lg-6 history-info mt-lg-0 mt-5 pt-lg-0 pt-md-4">
          <div class="position-relative img-border">
            <img src="<?php echo Page::BASE_URL.'uploads/page/'.$page['image']; ?>" class="img-fluid video-popup-image" alt="video-popup">
            
            <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center position-absolute">
              <span class="video-play-icon">
                <span class="fa fa-play"></span>
              </span>
            </a>

            <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
            <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
              <iframe src="<?php echo $page['video_link'];?>" allowfullscreen></iframe>
            </div>
          </div>
        </div>

        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
          <iframe src="<?php echo $page['video_link'];?>" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="grids-1 py-5">
    <div class="grids py-lg-5 py-md-4">
        <div class="container">
            <h3 class="title-big">Top Product</h3>
            <div class="row text-center grids-gap">
                <?php
                  $products  = new page();
            
                  if($products->getTopProduct()) {
                     
                    foreach($products->getTopProduct() as $product) {?>
                 
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="column">
                                <a href="#single"><img src="<?php echo Page::BASE_URL.'uploads/product/'.$product['image'];?>" alt="" class="img-responsive" /></a>
                                <h4><a href="#single"><?php echo $product['product_name'] ?></a></h4>
                            </div>
                        </div>
                    <?php }
                  }else{?>
                  
                  
                  <?php } ?>
            
            </div>
        </div>
    </div>
</section>

<!--  Fun facts section -->
    <section class="w3l-stats">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
                <h3 class="title-big">Infographic</h3>
                <div class="row main-cont-wthree-fea">
                    <div class="col-lg-4 col-6 mt-4">
                        <div class="grids-speci1">
                            <span class="fa fa-building" aria-hidden="true"></span>
                            <h3 class="title-spe">5</h3>
                            <p>Years Experience</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 mt-4">
                        <div class="grids-speci1">
                            <span class="fa fa-file-text" aria-hidden="true"></span>
                            <h3 class="title-spe">250+</h3>
                            <p> Customer</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-6 mt-sm-4 mt-3">
                        <div class="grids-speci1">
                            <span class="fa fa-trophy" aria-hidden="true"></span>
                            <h3 class="title-spe">12</h3>
                            <p>Awards Own</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-6 mt-sm-4 mt-3">
                        <div class="grids-speci1">
                            <span class="fa fa-twitter" aria-hidden="true"></span>
                            <h3 class="title-spe">18k</h3>
                            <p>Twitter Followers</p>
                        </div>
                    </div> -->
                </div>

            </div>
        </div>
    </section>

<?php 
include_once('footer.php');
?>