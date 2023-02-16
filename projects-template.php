<?php
/*
*Template Name: Project template
*A page that uses ACF to show imag blocks for design portfolio.
*/
?>
<h1>this is single.php</h1>
<?php
get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();

	get_template_part( 'template-parts/content/content-single' );

	if ( is_attachment() ) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone' ), '%title' ),
			)
		);
	}


endwhile; // End of the loop.

get_footer();