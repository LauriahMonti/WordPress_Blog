<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id = 'container'>
		<div id= 'header'>
			<a title="<?php bloginfo( 'name' ); ?>" href= "<?php bloginfo( 'url' ); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/header.jpg"></img>
			</a>
			<div class="recherche cf">
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    			<div>
        			<input type="text" value="" name="s" id="s" />
        			<input type="submit" id="searchsubmit" value="Search" />
    			</div>
			</form>	
			</div>
		</div>
		<div id="menu">
			<ul>
				<?php
					wp_list_categories("depth=1&title_li=");
					wp_list_pages("depth=1&title_li")
				 ?>
			</ul>
		</div>
		</div>
	</div>
