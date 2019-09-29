<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">
	<?php $url_site =  get_site_url('null','/wp-content/themes/doanhnghiep', 'http');  ?>
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
	<?php wp_head(); ?>
	<meta property="fb:app_id" content="1953938748210615">
	<meta property="fb:app_admins" content="1993613924220223">
</head>
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=1953938748210615&autoLogAppEvents=1';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<body <?php body_class() ?>>
	<div class="bg_opacity"></div>
	<?php if ( wp_is_mobile() ) { ?>
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>
	<?php }?>
	<header class="header">
		<div class="top_header">
			<!-- display account top_header mobile -->
			
			<span class="icon_mobile_click"><i class="fa fa-bars" aria-hidden="true"></i></span>
			<div class="container">
				<div class="logo_site">
					<?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
						<div class="address_header">
					<?php if( get_option('day_header_en') || get_option('day_header_vi') || get_option('address_header_en') || get_option('address_header_vi') ) { ?>
					<div class="textwidget">
						<?php if(get_option('day_header_en') || get_option('day_header_vi') ){ ?>
							<h3><?php if(get_locale() == 'en_US'){echo get_option('day_header_en');} else { echo get_option('day_header_vi');}  ?></h3>
						<?php }?>
						<?php if(get_option('address_header_en') || get_option('address_header_vi')){ ?>
						<p><?php if(get_locale() == 'en_US'){echo get_option('address_header_en');} else { echo get_option('address_header_vi');}  ?></p>
						<?php }?>	
					</div>
				<?php }?>
				</div>
				</div>
			
				<ul class="site-lang">
						<?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?>
					</ul>
				<?php // outputs a flags list (without languages names) ?>
			</div>
		</div>
		<div class="middle_header sticky">
			<div class="container">
				<nav class="nav nav_primary">
					<?php 
					$args = array('theme_location' => 'primary');
					?>
					<?php wp_nav_menu($args); ?>
				</nav>
				<div class="search_header">
					<form  role="search" method="get" id="searchform" action="<?php echo home_url('/');  ?>">
						<div class="search">
							<input type="text" value="" name="s" id="s" placeholder="<?php if(get_locale() == 'en_US'){ echo 'Search'; }else{ echo 'Tìm kiếm';}?>">
							<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<?php if(is_front_page() && !is_home()){ ?>
			<?php if(get_locale() == 'en_US'){ echo do_shortcode('[metaslider id="672"]'); }else{ echo do_shortcode('[metaslider id="29"]');}?>
					<div class="product_cat">
					<div class="container">
								<ul>
								<?php 
								$list_post_arg = array(
									'posts_per_page' => 20,
									'orderby' => 'post_date',
									'order' => 'DESC',
									'post_type' => 'post',
									'post_status' => 'publish',
									'cat' => 68
								);
								$list_post_q = new WP_Query();
								$list_post_q->query($list_post_arg);
								while($list_post_q->have_posts()): $list_post_q->the_post();
									?>
									<div class="list_post_item pw">
										<?php  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );  ?>
										<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>');"><a href="<?php the_permalink(); ?>"><?php //	the_post_thumbnail();?></a> </figure>
										<h2 class="post_title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>
									<?php
								endwhile;
								?>
							</ul>
					</div>
				</div>
		<?php }?>

	</header>