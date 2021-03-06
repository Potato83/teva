<?php
/*
Template Name: Products Page
 */
get_header(); 
$products = get_field('products');
$about = get_field('about-products');
?>


<section class="home-page">
	
		<!-- <div class="row">				 -->
				<div class="home-content">
					<p><?php echo $about; ?></p>
					<!-- <div class="clearfix"></div> -->
					<div class="clearfix">
						<?php 
							if($products){
								foreach ($products as $product) {
									$prod_image = $product['logo']['url'];
									$link = $product['link'];
									echo '<div class="col-sm-3 prod-con"><a href=" '. $link .' " target="_blank"><img src="' . $prod_image . '" alt="alt goes here" class="prod"></a></div>'; 
								}
							}	
						?>	
					</div>
				</div>
		<!-- </div> -->

</section><!-- .home-page -->


<div class="clearfix"></div>
<?php get_template_part('content', 'footer'); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>