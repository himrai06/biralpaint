<?php include_once('header.php');?>

<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Contact Us</h2>
        </div>
    </div>
</section>
<section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="#url">Home</a></li>
            <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> contact</li>
        </ul>
    </div>
</section>
<!-- contact-form 2 -->
<section class="w3l-contact-2 py-5">
    <div class="contact-infubd section-gap py-lg-5 py-md-4">
        <div class="container">
            <div class="contact-grids d-grid">
                <div class="contact-left">
                    <h4>Leave us a Message</h4>
                    <h6>For more info or inquiry about our products project please feel free to get in
                        touch with
                        us.</h6>
                    <div class="hours">
                        <h6 class="info mt-3">Email:</h6>
                        <p> <a href="mailto:<?php echo $setting['email'];?>">
                        <?php echo $setting['email'];?></a></p>
                        <h6 class="info mt-3">Address:</h6>
                        <p> <?php echo $setting['address'];?></p>
                        <h6 class="info mt-3">Contact:</h6>
                        <p class="margin-top"><a href="tel:+91 <?php echo $setting['contact'];?>">+91 <?php echo $setting['contact'];?></a></p>
                    </div>
                </div>
                <div class="contact-right">
                    <form action="contact-us" method="post" class="signin-form">
                        <div class="input-grids">
                            <input type="text" name="name" id="w3lName" placeholder="Your Name*"
                                class="contact-input"  required=""/>
                            <input type="email" name="email" id="w3lSender" placeholder="Your Email*"
                                class="contact-input" required="" />
                                <input type="number" name="mobile" id="w3lSender" placeholder="Your Mobile*"
                                class="contact-input" required="" />    
                            <input type="text" name="subject" id="w3lSubect" placeholder="Subject*"
                                class="contact-input" required=""/>
                        </div>
                        <div class="form-input">
                            <textarea name="message" id="w3lMessage" placeholder="Type your message here*"
                                required=""></textarea>
                        </div>
                        <button class="btn btn-style btn-primary submit">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
</section>
<!-- /contact-form-2 -->
<div class="map-iframe">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
        width="100%" height="400" frameborder="0" style="border: 0px; pointer-events: none;"
        allowfullscreen=""></iframe>
</div>

<?php 
include_once('footer.php');
?>