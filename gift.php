<?php include_once('header.php');?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Our Product</h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Product</li>
        </ul>
    </div>
</section>

  <section class="grids-1 py-5">
    <div class="grids py-lg-5 py-md-4">
        <div class="container">
            <h3 class="title-big">Our Products</h3>
            <div class="row text-center grids-gap">
                <?php
                    $products  = new page();
                
                        if($products->getAllProduct()) {
                            $i = 1;
                            foreach($products->getGiftProduct() as $product) {?>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="column">
                                        <a href="#"><img src="<?php echo Page::BASE_URL.'uploads/gift-product/'.$product['image'];?>" alt="" class="img-responsive" /></a>
                                        <h4><a href="#"><?php echo $product['product_name'];?></a></h4>
                                        <h6><i class="fas fa-coins" style="color:#f7ba05"></i> <?php echo $product['coins'];?></h6>
                                        <!-- <p class="mt-4 pb-3"><?php echo $product['description'];?></p> -->
                                    </div>
                                </div>
                                <?php if($i % 4 == 0) { ?>
                                </div>
                                 <div class="row text-center grids-gap">
                                <?php } ?>
                                
                <?php ++$i; }
                        }else{?>
                    
                    
                <?php   } 
                
                ?>    
                
            </div>
        </div>
    </div>
</section>

<?php 
include_once('footer.php');
?>