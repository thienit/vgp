<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<meta name="title" content="Kệ sắt V" />
	<meta name="description" content="Kệ sắt V" />

	<meta name="keywords" content="Kệ sắt , kệ sắt đa năng , kệ sách sắt , kệ sắt v lỗ , kệ sắt v lỗ đa năng , bán kệ v lỗ , kệ lắp ráp ,kệ sắt lắp ráp , giá kệ lắp ráp , kệ sắt siêu thị , kệ siêu thị , thép v đa năng , sắt v lỗ đa năng , giá kệ đa năng ,  giá kệ bán hàng , giá thép đa năng , giá thép để hàng ,sắt v lỗ sơn tĩnh điện , bán giá kệ , thép v lỗ đa năng , v lỗ đa năng , tủ lắp ráp , kệ nhà kho , v lỗ ,bán kệ , thép đục lỗ , thanh sắt lỗ , kệ văn phòng ,giá kệ văn phòng , kệ sách thư viện , kệ chứa hàng , kệ hồ sơ , kệ lưu trữ hồ sơ , kệ lưu trữ, kệ tài liệu , sắt v lỗ giá rẻ  , sắt v lỗ 4 x6 ,v lỗ 3x5 ,v lỗ 4 x4 , kệ sắt văn phòng ,kệ nhà kho , kệ trung tải , tủ hồ sơ , tủ hòa phát , kệ hòa phát 
Cửa sắt , sửa cửa sắt , mẫu cửa , cửa cổng đẹp , cửa kéo sắt , cửa cổng sắt , cửa sắt hộp , cửa sắt 4 cánh , khung cửa sắt ,các mẫu cửa sắt , giá cửa cổng sắt , giá cửa nhà sắt , cửa sắt sơn giả gỗ , cửa sắt kính , cửa sắt giả gỗ , mẫu cửa 4 cánh , làm cửa sắt tphcm , cửa sắt inox , giá cửa , cầu thang sắt , cửa nhôm , cửa nhôm giả gỗ , cổng sắt 2 cánh , giá cửa nhôm , rào sắt ,hàng rào sắt , hàng rào đẹp , nhôm kính , khung nhôm kính , vách ngăn nhôm kính ,nhôm kiếng , sơn cửa sắt , mái nhà , mái tôn , mái che , cột kèo , kèo sắt ,giếng trời , giếng trời đẹp , vách ngăn thạch cao , vách ngăn phòng , vách ngăn nỉ ,vách ngăn nỉ kính ,lan can ban công , mẫu lan can đẹp 
" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow " /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' - '; }
		      elseif (is_search()) {
		         echo '&quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name');
		         if(bloginfo('description')!='') {echo ' - '; bloginfo('description'); }
		      }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<!-- Hide this line for IE (needed for Firefox and others) -->
	<![if !IE]>
	<link rel="icon" href="<?php echo bloginfo('template_directory');?>/images/mcg.ico" type="image/x-icon" />
	<![endif]>
	<!-- This is needed for IE -->
	<link rel="shortcut icon" href="<?php echo bloginfo('template_directory');?>/images/mcg.ico" type="image/ico" />

	<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/reset.css' />
	<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/960.css'/>
	<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/text.css' />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php if(is_home() ):?>
		<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/home.css' />
		<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/nivo-slider.css' />
	<?php endif; ?>

	<?php if(is_single() || is_page() || is_archive() || is_search() ):?>
		<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/articles.css' />
	<?php endif; ?>
	
	<?php if(is_single()): ?>
		<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/product-detail.css' />
	<?php endif;?>
	
	<?php if(is_page()): ?>
		<link rel='stylesheet' href='<?php echo bloginfo('template_directory');?>/css/shopping-cart.css' />
	<?php endif;?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); 
		if (is_home()) {
	        wp_register_script('jquery_nivo_slider', get_bloginfo('template_directory').'/js/jquery.nivo.slider.pack.js');
	        wp_enqueue_script('jquery_nivo_slider');
	        wp_register_script('banner_load', get_bloginfo('template_directory').'/js/banner_load.js');
	        wp_enqueue_script('banner_load');
	    }
    ?>

</head>

<body <?php body_class(); ?>>
	
	<div id="page-wrap">
		<div id="top-bar">
			<div class="container_16">
				<div class="grid_1">&nbsp;</div>
				<div class="grid_5 email">
					Email: <?php $page = get_page(EMAIL); echo $page->post_content;?>
				</div>
				<div class="grid_4 hotline">
					Hotline: <?php $page = get_page(HOTLINE); echo $page->post_content;?>
				</div>

				<div id="top-menu-wrapper">
					<?php wp_nav_menu(array('menu'=>'Top Menu','container'=>''));?>
				</div>
			</div>
		</div><!-- end of #top-bar -->
		<header>
			<div class="container_16">
				<div id="logo" class="grid_5">
					<?php lm_display_logo(); ?>
				</div><!-- end of #logo -->

				<div id="ad" class="grid_7">
				<?php 
					$page = get_page_by_path("top-ads");
					echo $page->post_content;
				?>
				</div><!-- end of #ad -->

				<div id="searching" class="grid_4">
					<?php get_search_form();?>
				</div><!-- end of #searching -->

				<div class="clear"></div>

				<div id="main-menu-wrapper" class="grid_16">
					<?php wp_nav_menu(array('menu'=>'Main Menu','container'=>''));?>
				</div><!-- end of #main-menu -->
			</div>
		</header>

		<nav>
			<div class="container_16">
				 <?php 
					$menu_name = 'shortcut_nav';

				    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
						$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

						$menu_items = wp_get_nav_menu_items($menu->term_id);

						$menu_list = '<ul class="grid_16" id="menu-' . $menu_name . '">';

						foreach ( (array) $menu_items as $key => $menu_item ) {
							$image = wp_get_attachment_image_src( get_post_thumbnail_id($menu_item->ID));
							$image_src = $image[0];
						    $title = $menu_item->title;
						    $url = $menu_item->url;
						    $menu_list .= '<li><a href="' . $url . '"><img src="' .$image_src.'" alt="'.$title.'"/></a>
						    <a href="' . $url . '">' . $title . '</a></li>';
						}
						$menu_list .= '</ul>';
				    } else {
						$menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
				    }
				    
				   	echo $menu_list;
				?>
			</div>
		</nav>
		<!-- <div id="header">
			<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
			<div class="description"><?php bloginfo('description'); ?></div>
		</div> -->