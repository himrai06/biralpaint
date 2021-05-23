<?php include_once('header.php');?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">About Us</h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Us</li>
        </ul>
    </div>
</section>
<!-- features-4 -->
<?php 
$pg  = new page();
 $page = $set->getpageDetails('about');
?>
<section class="w3l-services-6-main">
    <div class="services-6 py-5">
        <div class="container py-md-3">
            <div class="row serv_sec_info">
                <div class="col-lg-6 banner_bottom_grid help">
                    <img src="<?php echo Page::BASE_URL.'uploads/page/'.$page['image']; ?>" alt=" " class="img-fluid radius-image">
                </div>
                <div class="col-lg-6 banner_bottom_left pl-lg-4 mt-lg-0 mt-md-5 mt-4">
                    <h4><a class="link-hny" href="#">
                    <?php echo $page['title'];?></a></h4>  
                    <h2><?php echo $page['sub_title'];?></h2>
                    <p> <?php echo $page['description'];?></p>
                   
                </div>
            </div>
            <div class="row features-w3pvt-main">
            <div  class="col-md-12">
              <iframe src="<?php echo $page['video_link'];?>" allowfullscreen></iframe>
            </div>
            </div>
            <!-- <div class="row features-w3pvt-main" id="features">
                <div class="col-lg-4 col-md-6 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 col-2 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-bath" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-10 featured_grid_right_info pl-lg-0">
                            <h4><a class="link-hny" href="#url">Custom Furniture </a></h4>
                            <p>Lorem ipsum dolor sit amet consec tetur adipisi elit. Dolores, rem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 col-2 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-lightbulb-o" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-10 featured_grid_right_info pl-lg-0">
                            <h4><a class="link-hny" href="#url">Lighting Design </a></h4>
                            <p>Lorem ipsum dolor sit amet consec tetur adipisi elit. Dolores, rem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 feature-gird">
                    <div class="row features-hny-inner-gd">
                        <div class="col-md-3 col-2 featured_grid_left">
                            <div class="icon_left_grid">
                                <span class="fa fa-shower" aria-hidden="true"></span>
                            </div>
                        </div>
                        <div class="col-md-9 col-10 featured_grid_right_info pl-lg-0">
                            <h4><a class="link-hny" href="#url">Furniture Sourcing </a></h4>
                            <p>Lorem ipsum dolor sit amet consec tetur adipisi elit. Dolores, rem!</p>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
    </div>
</section>


<?php 
include_once('footer.php');
?>