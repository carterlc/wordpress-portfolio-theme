<?php
/*
*Template Name: About Template
*A page that uses ACF to show imag and text at the top.
*/
?>
<style>
	<?php the_field('profile_picture'); ?>;
</style>

<?php
	get_header();
/* Start the Loop */
while ( have_posts() ) :
	the_post();
	// get_template_part( 'template-parts/content/content-single' );
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<header class="entry-header alignwide">
	<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	<?php twenty_twenty_one_post_thumbnail(); ?>
</header><!-- .entry-header -->
</article>
<div class="about-container">
	<div class="about-section">
	<img src="<?php the_field('profile_picture');?>" alt="profile pic">
	<p><?php the_field('profile_description'); ?></p>
	</div>
</div>	
<?php

endwhile; // End of the loop.

get_footer();

?>
</div>
