<?php
/*
*Template Name: Contact template
*A page that uses ACF to show imag blocks for design portfolio.
*/
?>
<style>
.contact-section{
	<?php the_field('contact_info'); ?>;
	<?php the_field('email'); ?>;
}
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
<div class="contact-section">
<aside class="left-sidebar">
    <?php dynamic_sidebar( 'left-sidebar' ); ?>    
</aside>
<div class="contact-info">
<p><?php the_field('contact_info');?></p>
</div>
</div>
<p><?php the_field('email');?></p>
<?php


endwhile; // End of the loop.

get_footer();

?>
<div>
