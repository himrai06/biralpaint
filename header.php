<?php include "./includes/class-autoload.inc.php"; 
   $set  = new page();
   $setting = $set->getSettings();
   


?>
  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Birla Paint</title>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <script src="https://kit.fontawesome.com/e664276767.js" crossorigin="anonymous"></script>
  </head>
  <body>
<!--w3l-header-->

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
		   <?php if($setting['web_logo'] != null && $setting['web_logo'] != ''){?>
			<!-- if logo is image enable this    -->
			<a class="navbar-brand" href="./">
				<img src="<?php echo Page::BASE_URL.'uploads/logo/'.$setting['web_logo']; ?>" alt="Your logo" title="Your logo" style="height:35px;" />
				</a>
	       <?php }else {?>
			 <a class="navbar-brand" href="./">Birla <span>Paint</span></a>
			<?php }?> 			
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa icon-expand fa-bars"></span>
				<span class="fa icon-close fa-times"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="./">Home</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="about">About</a>
					</li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="product">Product</a>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="contact">Contact</a>
					</li>
                </ul>
                <!--/search-right-->
				<div class="search-right">
					
					<!-- /search popup -->
				</div>
				<!--//search-right-->
				<div class="box-support">
					<p>For Support Call <span class="fa fa-headphones"></span></p>
					<h5><?php echo $setting['contact'];?></h5>
				</div>
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>