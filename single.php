<?php 
// Exit if accessed directly
if ( !defined('ABSPATH') ) exit;
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title() ;?></h1>	
	<?php the_content(); ?>
	
	<?php if ( comments_open() || get_comments_number() ) comments_template(); ?>

<?php endwhile; else: ?>

	<p>Sorry, this page does not exist</p>

<?php endif; ?>

<?php get_footer(); ?>