<div class="scrolltop">
	<i class="fa fa-angle-up" aria-hidden="true"></i>	
</div>
<div class="regis_fixed">
	<?php if(get_locale() == 'vi') { ?>
		<ul>
			<li><a href="<?php echo get_permalink(307);?>">Đăng ký tham quan</a></li>
			<li><a href="<?php echo get_permalink(107);?>">Đăng ký gian hàng</a></li>
		</ul>
	<?php }else{ ?>
		<ul>
			<li><a href="<?php echo get_permalink(313);?>">Registration Visitors</a></li>
			<li><a href="<?php echo get_permalink(110);?>">Booth Registration</a></li>
		</ul>
	<?php }?>
</div>
<footer class="footer">
	<div class="container">
		<div class="host_patronize">
			<div class="row">
				<div class="col-sm-3" style="display:none;">
					<div class="host_ft">
						<?php if(get_locale() == 'vi'){?>
							<h4>CHỦ TRÌ VÀ CHỈ ĐẠO</h4>
						<?php } ?>	
						<?php if(get_locale() == 'en_US'){?>
							<h4>HOSTS</h4>
						<?php } ?>
								<ul>
							<?php
							$args = array(  
								'post_type' => 'chutri',
								'post_status' => 'publish',
								'posts_per_page' => 30, 
								'orderby' => 'title', 
								'order' => 'ASC'
							);
							$loop_chutri = new WP_Query( $args ); 
							while ( $loop_chutri->have_posts() ) : $loop_chutri->the_post(); 
								?> <li> <figure class="thumbnail"> <a href="<?php echo get_the_excerpt(); ?>" target="_blank"><?php the_post_thumbnail();?></a> </figure> </li> <?php
							endwhile;
							wp_reset_postdata(); 
							?>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="patronize">
						<?php if(get_locale() == 'vi'){?>
							<h4>BẢO TRỢ THÔNG TIN</h4>
						<?php } ?>	
						<?php if(get_locale() == 'en_US'){?>
							<h4>INFORMATION SPONSORS</h4>
						<?php } ?>	
						<ul>
							<?php
							$args = array(  
								'post_type' => 'baotrott',
								'post_status' => 'publish',
								'posts_per_page' => 30, 
								'orderby' => 'title', 
								'order' => 'ASC'
							);
							$loop_baotrott = new WP_Query( $args ); 
							while ( $loop_baotrott->have_posts() ) : $loop_baotrott->the_post(); 
								?> <li> <figure class="thumbnail"> <a href="<?php echo get_the_excerpt(); ?>" target="_blank"><?php the_post_thumbnail();?></a> </figure> </li> <?php
							endwhile;
							wp_reset_postdata(); 
							?>
						</ul>			
					</div>
				</div>
			</div>
		</div>
		<div class="dvi_dtnn">
			<div class="row">
				<div class="col-sm-3">
					<div class="dvi">
						<?php if(get_locale() == 'vi'){?>
							<h4>ĐƠN VỊ TỔ CHỨC</h4>
						<?php } ?>	
						<?php if(get_locale() == 'en_US'){?>
							<h4>ORGANIZER</h4>
						<?php } ?>
						<ul>
							<?php
							$args = array(  
								'post_type' => 'donvitc',
								'post_status' => 'publish',
								'posts_per_page' => 30, 
								'orderby' => 'title', 
								'order' => 'ASC'
							);
							$loop_donvitc = new WP_Query( $args ); 
							while ( $loop_donvitc->have_posts() ) : $loop_donvitc->the_post(); 
								?> <li> <figure class="thumbnail"> <a href="<?php echo get_the_excerpt(); ?>" target="_blank"><?php the_post_thumbnail();?></a> </figure> </li> <?php
							endwhile;
							wp_reset_postdata(); 
							?>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="dtnn">
					    	<?php if(get_locale() == 'vi'){?>
							<h4>ĐỐI TÁC NƯỚC NGOÀI & ĐỒNG TỔ CHỨC</h4>
						<?php } ?>	
						<?php if(get_locale() == 'en_US'){?>
							<h4>OVERSEA PARTNERS</h4>
						<?php } ?>
						<ul>
							<?php
							$args = array(  
								'post_type' => 'doitacnn',
								'post_status' => 'publish',
								'posts_per_page' => 30, 
								'orderby' => 'title', 
								'order' => 'ASC'
							);
							$loop_doitacnn = new WP_Query( $args ); 
							while ( $loop_doitacnn->have_posts() ) : $loop_doitacnn->the_post(); 
								?> <li> <figure class="thumbnail"> <a href="<?php echo get_the_excerpt(); ?>" target="_blank"><?php the_post_thumbnail();?></a> </figure> </li> <?php
							endwhile;
							wp_reset_postdata(); 
							?>
						</ul>	
					</div>
				</div>
			</div>		
		</div>
		<div class="ft_custom">
			<div class="row">
				<?php if(is_active_sidebar('footer1')) :?>
					<?php if(get_locale() == 'vi'){?>
						<div class="footer-widget-area col-sm-6">
							<?php dynamic_sidebar('footer1'); ?>
						</div>
					<?php } ?>	
				<?php endif ?>	

				<?php if(is_active_sidebar('footer_1_en')) :?>
					<?php if(get_locale() == 'en_US'){?>
						<div class="footer-widget-area col-sm-6">
							<?php dynamic_sidebar('footer_1_en'); ?>
						</div>
					<?php } ?>	
				<?php endif ?>	

				<?php if(is_active_sidebar('footer2')) :?>
					<?php if(get_locale() == 'vi'){?>
						<div class="footer-widget-area col-sm-6">
							<?php dynamic_sidebar('footer2'); ?>
						</div>
					<?php } ?>	
				<?php endif ?>	
				
				<?php if(is_active_sidebar('footer_2_en')) :?>
					<?php if(get_locale() == 'en_US'){?>
						<div class="footer-widget-area col-sm-6">
							<?php dynamic_sidebar('footer_2_en'); ?>
						</div>
					<?php } ?>	
				<?php endif ?>		
			</div>
		</div>
		<div class="copyright">
			<p>©2019 VIETNAM LIFT AND ELEVATORS EXPO</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
<!-- MESSENGER -->
<script>      
	window.fbAsyncInit = function() {
		FB.init({
			appId      : '1953938748210615',
			xfbml      : true,
			version    : 'v2.6'
		});
	};
	(function(d, s, id){
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) {return;}
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));      
</script>
<!-- END  MESSENGER -->
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
</body>
</html>
