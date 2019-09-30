<?php 
/*
Template Name: page-template-gallery
*/
get_header(); 
if(have_posts()) :
	?>	
	<div id="wrap">
		<div class="g_content">
			<?php 
		// Get the current category ID, e.g. if we're on a category archive page
			$postcat = get_the_category( $post->ID );
		//var_dump($postcat);
			if ( ! empty( $postcat ) ) {
			//echo esc_html( $postcat[0]->cat_ID );  
    // Get the image ID for the category
				$category_image_id = $postcat[0]->term_id;
				$image_id = get_term_meta ( $category_image_id, 'category-image-id', true );
				$src_image = wp_get_attachment_image_src( $image_id , 'full');
				?>
				<div class="img_category_single" style="background:url('<?php echo $src_image[0]; ?>">

				</div>
			<?php }?>
			<div class="container">
				<div class="row">
					<div class="col-sm-12  content_left">

						<ul class="list_categories">	
							<li class="parent_cat"><a href="#"><?php if(get_locale() == 'en_US'){?>Gallery<?php }else{?> Thư viện <?php }?></a></li>		
						</ul>
						<div class="list_post_categories">
							<?php 
							$list_post_arg = array(
								'orderby' => 'post_date',
								'order' => 'DESC',
								'post_type' => 'post',
								'post_status' => 'publish',
								'cat' => array(97,99)
							);
							$list_post_q = new WP_Query();
							$list_post_q->query($list_post_arg);
							while($list_post_q->have_posts()): $list_post_q->the_post();
								get_template_part('includes/frontend/loop/loop_gallery');
							endwhile;
							get_template_part('includes/frontend/pagination/pagination');
							?>
						</div>
						<?php
					else:
					endif;
					wp_reset_postdata();
					?>
				</div>

				
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
