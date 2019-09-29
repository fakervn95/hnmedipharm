<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	
<div class="page-wrapper">
	<div id="content">
		<div class="g_content">
			<div class="content_left">
				<div class="introduce_home">
					<div class="container">
						<h3><strong>VIETNAM MEDI-PHARM </strong>EXPO</h3>
						<i><?php if(get_locale() == 'en_US') {?>OVERVIEW <?php }else{?> GIỚI THIỆU<?php }?></i>
						<div class="textwidget"> 
							<?php echo get_the_excerpt(64); ?>
							<a href="<?php echo get_permalink(64);?>"><?php if(get_locale() == 'en_US') {?> Read more<?php }else{?> Xem thêm<?php }?></a>
						</div>
						
					</div>
				</div>
				<div class="list_post_news">
					<div class="container">
						<?php if(get_locale() == 'en_US'){?> <h2 class="title_tg_top">New Posts</h2>
					<?php }  else if(get_locale() == 'vi'){ ?><h2 class="title_tg_top">Bài viết mới nhất</h2> <?php } ?>
					<div class="row">
						<?php 
						$arg_cmt_post_q = array(
							'posts_per_page' => 3,
							'orderby' => 'post_date',
							'order' => 'DESC',
							'post_type' => 'post',
							'post_status' => 'publish',
							'cat' => array(35,37)
						);
						$cmt_post_q = new WP_Query();
						$cmt_post_q->query($arg_cmt_post_q);
						?>
						<?php if(have_posts()) : ?>
							<ul class="most-commented">
								<?php
								while ($cmt_post_q->have_posts()) : $cmt_post_q->the_post(); ?>
									<li class="col-sm-4">
										<div class="post_cmt_wrapper pw">
											<div class="wrap_thumb">
												<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
												<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"> 
													<a href="<?php the_permalink();?>"></a>
												</figure>	
											</div>
											<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a> </h3>
											<div class="excerpt">
												<p><?php echo excerpt(50); ?></p>
											</div>
											<div class="read_more">
												<a href="<?php the_permalink(); ?>"><?php if(get_locale() == 'en_US'){echo 'Read more >';} else { echo 'Xem thêm >';}  ?></a>
											</div>
										</div>
									</li>
								<?php endwhile; ?>
							<?php endif; ?> 
						</ul>
					</div>
				</div>
			</div>
		</div><!-- content_left -->
	</div>
</div>
</div>
<?php get_footer(); ?>
