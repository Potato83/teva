<?php
/*
Template Name: Default Page
 */
get_header(); 
$directions = get_field('directions');
?>


<?php get_template_part('content', 'content'); ?>

<p><?php echo $directions; ?></p>

<?php get_template_part('content', 'footer'); ?>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>