<?php 
get_header(); 
?>	
<div id="wrap">
	<div class="g_content">
		<?php 
		// Get the current category ID, e.g. if we're on a category archive page
		global $post;
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
			<div id="breadcrumb" class="breadcrumb">
				<ul>
					<?php  echo the_breadcrumb(); ?>
				</ul>
			</div> 
			<div class="row">
				<?php 
				wpb_set_post_views(get_the_ID());
				if(have_posts()) :
					while(have_posts()) : the_post(); ?>
						<div class="col-sm-12  content_left">
							<article class="content_single_post">
								<div class="single_post_info">
									<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_time('d/m/y');?><span>  <?php the_time('g:i a') ?></span> 
										| Luợt xem : <?php echo wpb_get_post_views(get_the_ID()); ?>
									</p>
								</div>
								<div class="post_avt">
									<div class="wrap_post_avt">
										<?php //the_post_thumbnail();?>
									</div>
								</div>
								<div class="text_content">
									<?php  the_content(); ?>
								</div>
							</article>
							<?php $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) ); ?>
							<?php if($related){ ?>
								<div class="related_posts">
								    <?php if(get_locale() == 'vi'){?>
								<h2>Tin cùng chuyên mục</h2>
						<?php } ?>	
						<?php if(get_locale() == 'en_US'){?>
							<h2>Related Post</h2>
						<?php } ?>
									<ul class="row"> 
										<?php
										if( $related ) foreach( $related as $post ) {
											setup_postdata($post); ?>
											<li class="col-md-4 col-sm-4 col-xs-12">
												<div class="list_item_related pw">
													<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
													<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>">
														<a href="<?php the_permalink(); ?>"><?php //the_post_thumbnail(); ?></a></figure>
														<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
													</div>
												</li>
											<?php }
											wp_reset_postdata(); ?>
										</ul>   
									</div>
								<?php } ?> 
							</div>
						<!-- <div class="col-md-3 col-sm-3 sidebar">
							<?php dynamic_sidebar('sidebar1'); ?> 
						</div> -->
					<?php endwhile;
				else:
				endif;
				wp_reset_postdata();
				?>
			</div>
			
		</div>
		
	</div>
</div>
<?php get_footer(); ?>
