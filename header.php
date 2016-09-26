<!DOCTYPE html>
<html class="no-js"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title(''); ?> | Rukon Images</title>

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>

    <div id="page">
      
      <div class="band top">
        <header class="layout">
          <a href="<?php bloginfo( 'url' ); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
          <?php 

            $defaults = array(

              'container' => 'nav',
              'theme_location' => 'main-menu',
              'container_class' => 'desktop-navigation'

            );

            wp_nav_menu ( $defaults );

          ?>

          <button id="trigger-overlay" type="button">Menu</button>
          <div class="overlay overlay-hugeinc">
            <button type="button" class="overlay-close">Close</button>
            
            <?php 

              $defaults = array(

                'container' => 'nav',
                'theme_location' => 'main-menu',
                'container_class' => 'mobile-navigation'

              );

              wp_nav_menu ( $defaults );

            ?>

          </div>
        </header>
      </div>