
<header class="banner" role="banner">
  <div class="container">
  	<div class="row headerTop">
    <h1><a class="brand span8" href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h2>
    <div id="socialBox" class="span4">
    </div>
</div>
<div class="row">
    <img class="span12" id="headerImage" src="<?php header_image(); ?>"  alt="" />
</div>

<div class="main-nav">
			<?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'container' => false));
          endif;
        ?>
        <div class="clear"></div>
		</div>
  </div>
</header>