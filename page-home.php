<?php
/*
Template Name: Home Page
 */
get_header(); 
$desc = get_field('desc');
?>

<section class="home-page">
	
		<!-- <div class="row">				 -->
				<div class="home-content col-md-12">
					<p>
						<?php echo $desc; ?> 
					</p>
				</div>
		<!-- </div> -->


	<!-- DEBUG -->
<!-- 	<?php //while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
		
	<?php //endwhile; ?> -->
	
</section><!-- .home-page -->
<div class="clearfix"></div>
<?php get_template_part('content', 'footer'); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>