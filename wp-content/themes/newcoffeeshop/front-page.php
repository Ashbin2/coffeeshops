<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CoffeeShop
 */

get_header();
?>
      <section class="hero">
		<div class="hero__overlay">

		</div>
		<video playsinLine="playsinline" autoplay="autoplay" muted="muted" Loop="loop" 
		loop="loop" loading="lazy" class="hero__video">
		<source src="<?php echo get_template_directory_uri()."/img/video.mp4"  ?>" type="video/mp4">
	</video>
	 <div class=" hero__content h-100 container-custom position-relative">
		<div class="d-flex h-100 align-items-center hero__content-width">
			<div class="text-white">
				<h1 class="fw-bold mb-4">Discover The Taste Of Real coffee</h1>
				<p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi deleniti eaque aliquid</p>
			   <a href="http:#" class="mt-2 btn btn-lg btn-outline-light text-white" role="button">Buy Now</a>
			</div>

		</div>

	 </div>
         <a href="#scroll-down" class="hero__scroll-btn text-white">
			Explore  <i class="bi bi-arrow-down-square"></i>
		 </a>     


	  </section>
	<main id="scroll-down" class="site-main">
		<div class="steps container-custom">
			<div class="row">
				<div class="col-12 col-sm-6 d-md-flex justify-content-md-center">
					<img src="<?php echo get_template_directory_uri()."/img/1-coffe-flavour.jpg"  ?>" class="img-fluid p-4 steps__section-thumbnail" alt="coffe-flavour"
					width="553" height="746" loading="lazy">
				</div>
				<div class="col-12 col-sm-6 align-self-center justify-content-md-center">
				<div class="steps__content_width">
					<span>01</span>
					<h1 class="h2 mb-4">coffee flavour</h1>
					<p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate cumque facere ipsa dolorum odio voluptate nihil maxime corporis nam quas commodi quia repellendus cum blanditiis obcaecati, ex eligendi unde ab.</p>
					<a href="#">Read More ! <i class="bi bi-arrow-right"></i></a>
				</div>


				</div>

			</div>

		</div>
		<div class="steps steps--background container-custom">
			<div class="row">
				<div class="col-12 col-sm-6 d-md-flex justify-content-md-center order-sm-1">
					<img src="<?php echo get_template_directory_uri()."/img/2-health-benefits.jpg"  ?>" class="img-fluid p-4 steps__section-thumbnail" alt="coffe-flavour"
					width="553" height="746" loading="lazy">
				</div>
				<div class="col-12 col-sm-6 align-self-center justify-content-md-center">
				<div class="steps__content_width">
					<span>02</span>
					<h1 class="h2 mb-4">Super Health Benefits</h1>
					<p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate cumque facere ipsa dolorum odio voluptate nihil maxime corporis nam quas commodi quia repellendus cum blanditiis obcaecati, ex eligendi unde ab.</p>
					<a href="#">Read More <i class="bi bi-arrow-right"></i></a>
				</div>


				</div>

			</div>

		</div>
		<div class="steps container-custom">
			<div class="row">
				<div class="col-12 col-sm-6 d-md-flex justify-content-md-center">
					<img src="<?php echo get_template_directory_uri()."/img/3-essential-nutrients.jpg"  ?>" class="img-fluid p-4 steps__section-thumbnail" alt="coffe-flavour"
					width="553" height="746" loading="lazy">
				</div>
				<div class="col-12 col-sm-6 align-self-center justify-content-md-center">
				<div class="steps__content_width">
					<span>03</span>
					<h1 class="h2 mb-4">Essential Nutrients</h1>
					<p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate cumque facere ipsa dolorum odio voluptate nihil maxime corporis nam quas commodi quia repellendus cum blanditiis obcaecati, ex eligendi unde ab.</p>
					<a href="#">Read More <i class="bi bi-arrow-right"></i></a>
				</div>


				</div>

			</div>

		</div>
		<!-- thumb section -->
		<section class="bg-dark text-white py-4">
			<div class="container-custom my-4">
				<div class="row">
					<div class="col-12 col-sm-4 mb-4">
					<img src="<?php echo get_template_directory_uri()."/img/1-coffee-flavour-small.jpg"  ?>" class="img-fluid mb-4 " alt="coffe-flavour"
					width="441" height="248" loading="lazy">
					<h3>Amazing coffee flavour</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore esse adipisci nisi reiciendis. Modi, corporis voluptatum error rerum eveniet explicabo nemo nulla suscipit nisi qui amet unde quod nam soluta?</p>
					</div>
					<div class="col-12 col-sm-4 mb-4">
					<img src="<?php echo get_template_directory_uri()."/img/2-health-benefits-small.jpg"  ?>" class="img-fluid mb-4 " alt="coffe-flavour"
					width="441" height="248" loading="lazy">
					<h3>health-benefits</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore esse adipisci nisi reiciendis. Modi, corporis voluptatum error rerum eveniet explicabo nemo nulla suscipit nisi qui amet unde quod nam soluta?</p>
					</div>
					<div class="col-12 col-sm-4 mb-4">
					<img src="<?php echo get_template_directory_uri()."/img/3-essential-nutrients-small.jpg"  ?>" class="img-fluid mb-4 " alt="coffe-flavour"
					width="441" height="248" loading="lazy">
					<h3>essential-nutrients</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore esse adipisci nisi reiciendis. Modi, corporis voluptatum error rerum eveniet explicabo nemo nulla suscipit nisi qui amet unde quod nam soluta?</p>
					</div>
				</div>
			</div>

		</section>




	</main><!-- #main -->

<?php

get_footer();
