<?php
/*
Template Name: Home Page
 */
get_header(); 
$desc = get_field('desc');
?>
<?php get_template_part('content', 'menu'); ?>
<section id="home-page">

	
	<div class="container">
		<div class="row">
				<div class="col-md-4 logo-nudge"></div>
				<div class="col-md-7 home-content">
					<p>
						<?php echo $desc; ?> 
					</p>

				
				</div>
		</div>
	</div>

	<!-- DEBUG -->
<!-- 	<?php //while ( have_posts() ) : the_post(); ?>
					
		<?php the_content(); ?>
		
	<?php //endwhile; ?> -->

<script>
	var lango = "<?php echo qtrans_getLanguage();?>";
	


</script>	

	
</section><!-- #home-page -->

<?php get_template_part('content', 'footer'); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>