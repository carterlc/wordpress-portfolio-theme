<?php
/*
*Template Name: About Template
*A page that uses ACF to show imag and text at the top.
*/
?>
<style>

div.about-section{
	<?php the_field('profile_picture'); ?>;
	display:flex;
	flex-direction:row;
	justify-content:center;
	margin-left:350px;
	margin-right:350px;
}

.about-section img{
	width:500px;
	height:600px;
	object-fit:cover;
	border-right: solid white;
	padding-right:50px;
}
.about-section p{
	margin-left:100px;

}
</style>
<div id="grainy-texture">
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

	<div class="about-section">
	<img src="<?php the_field('profile_picture');?>" alt="profile pic">
	<p><?php the_field('profile_description'); ?></p>
	</div>
<?php

endwhile; // End of the loop.

get_footer();

?>
</div>
