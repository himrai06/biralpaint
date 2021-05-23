<section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="footer-list-29 col-lg-4">
          <h6 class="footer-title-29">About Company</h6>
          <p><?php echo $setting['about_company'];?></p>
          <div class="main-social-footer-29 mt-4">
            <?php if($setting['facebook_link'] != null && $setting['facebook_link'] != ''){?>
            <a href="<?php echo $setting['facebook_link'];?>" class="facebook"><span class="fa fa-facebook"></span></a>
            <?php }?>
            <?php if($setting['twitter_link'] != null && $setting[''] != 'twitter_link'){?>
            <a href="<?php echo $setting['twitter_link'];?>" class="twitter"><span class="fa fa-twitter"></span></a>
            <?php }?>
            <?php if($setting['instagram_link'] != null && $setting['instagram_link'] != ''){?>
            <a href="<?php echo $setting['instagram_link'];?>" class="instagram"><span class="fa fa-instagram"></span></a>
            <?php }?>
            <?php if($setting['youtube_link'] != null && $setting['youtube_link'] != ''){?>
            <a href="<?php echo $setting['youtube_link'];?>" class="youtube"><span class="fa fa-youtube"></span></a>
            <?php }?>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1 mt-lg-0 mt-5">
          <h6 class="footer-title-29">Contact Us</h6>
          <ul>
            <li>
              <p><span class="fa fa-map-marker"></span> <?php echo $setting['address'];?></p>
            </li>
            <li><a href="tel:+91-<?php echo $setting['contact'];?>"><span class="fa fa-phone"></span> +(91) <?php echo $setting['contact'];?></a></li>
            <li><a href="mailto:<?php echo $setting['email'];?>" class="mail"><span class="fa fa-envelope-open-o"></span>
            <?php echo $setting['email'];?></a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 mt-lg-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Useful Links</h6>
            <li><a href="index">Home</a></li>
            <li><a href="about">About Birla Paint</a></li>
            <li><a href="product"> Product</a></li>
            <li><a href="contact">Contact us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-list-29 footer-3 mt-lg-0 mt-5">
              <h6 class="footer-title-29">Store Icons</h6>
                  
                <div class="row">
                    
                    <div class="col-md-12">
                        <!-- android button -->
                      <a class="btn btn-lg btn-success big-btn android-btn" href="#">
                      <img width="80px" class="pull-left" src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png"><div class="btn-text"><small>Available on</small><br><strong>Google Play</strong></div></a>
          
                    </div>
                </div> 
             </div>

         </div>
       
      </div>
    </div>
  </div>
</section>

<section class="w3l-footer-29-main w3l-copyright">
  <div class="container">
    <div class="bottom-copies">
      <p class="copy-footer-29 text-center">© <?php echo date('Y') ?> Birla Paint. All rights reserved.</p>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="assets/js/jquery-3.3.1.min.js"></script>

<!-- Template JavaScript -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<script src="assets/js/owl.carousel.js"></script>

<!-- script for carousel1 -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: false,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- script for owlcarousel -->
<script>
  $(document).ready(function () {
    $('.owl-testimonial').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for owlcarousel -->


<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>