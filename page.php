<?php
/**
 * WordPress Page Template
 *
 * @Since 	1.0
 */

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;
?>

<?php get_header(); ?>

<div class="container my-4">
	<div class="row d-flex justify-content-center">
	
		<div class="col-md-8">
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1 class="text-center my-4"><?php the_title() ;?></h1>	
				<?php the_content(); ?>

			<?php endwhile; else: ?>

				<p>Sorry, this page does not exist</p>

			<?php endif; ?>
		
		</div>
		
	</div>
</div>

<?php get_footer(); ?>