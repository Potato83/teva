<?php
/*
Template Name: Default Page
 */
get_header(); 
$directions = get_field('directions');
?>

<div class="home-content map">
	



	<p><?php echo $directions; ?></p>
	<?php get_template_part('content', 'content'); ?>
</div><!-- .map -->



<div class="clearfix"></div>
<?php get_template_part('content', 'footer'); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>