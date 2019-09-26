<?php 
/*
Template Name: page-template-lienhe
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div class="container">
		<div class="g_content">
			<?php
			while ( have_posts() ) : the_post(); ?> 
				<div class="entry-content-page">
					<?php the_content(); ?> <!-- Page Content -->
				</div>
				
				<?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
</div>

</div><!-- container -->
</div>
<?php get_footer(); ?>
