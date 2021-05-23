<?php
include_once('header.php');
?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-services py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Thank you</h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Thank you</li>
        </ul>
    </div>
</section>

<section class="w3l-contact-2 py-5">
    <div class="contact-infubd section-gap py-lg-5 py-md-4">
        <div class="container">
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>Thank you</h4>
                    <h6>We will be contacting you soon. In case you are in hurry, give us a call on +91-<?php echo $setting['contact'];?>.</h6>
                    <a href="./" class="cta-btn">Go To Homepage</a>

                </div>     
            </div>  
        </div> 
    </div> 
</section>                    
<?php 
include_once('footer.php');

?>