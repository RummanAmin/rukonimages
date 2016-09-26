<!DOCTYPE html>
<html class="no-js"> 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home | Rukon Images</title>

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
              'theme_location' => 'front-menu',
              'container_class' => 'home-navigation'

            );

            wp_nav_menu ( $defaults );

          ?>
        </header>
      </div>

      <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74088797-2', 'auto');
      ga('send', 'pageview');

    </script>
    
    <?php wp_footer(); ?>
  </body>
</html>