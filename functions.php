<?php 

  // Add Main Menu
	add_theme_support( 'menus' );

  function register_theme_menus() {
  	register_nav_menus(

  		array(
  			'main-menu' => _( 'Main Menu' ),
  			'front-menu' => _( 'Front Menu' )
  		)

  	);
  }

  add_action( 'init', 'register_theme_menus' );

  // Add CSS Files
	function wpt_theme_styles() {
		wp_enqueue_style( 'google_font', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,600' );
		wp_enqueue_style( 'style.css', get_template_directory_uri() . '/style.css' );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_styles' );

	// Add JS Files
	function wpt_theme_js() {

		wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true );

		$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
		wp_localize_script( 'main_js', 'object_name', $translation_array );

	}

	add_action( 'wp_enqueue_scripts', 'wpt_theme_js' );


	// Remove Image Attributes
	add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
	add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

	function remove_width_attribute( $html ) {
	   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
	   return $html;
	}

	// Featured Image
	add_theme_support( 'post-thumbnails' ); 

	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );

	function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
	    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	    return $html;
	}

	// Secure Customer Area Uploads
	function cuar_change_private_directory($original_dir) {
	  return '/Users/Ruman/Sites/rukon/build/uploads';
	}
	add_filter('cuar/core/ownership/base-private-storage-directory', 'cuar_change_private_directory');

	// Custom Login Logo
	function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
          background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
          padding-bottom: 50px;
          margin-bottom: 50px;
        }
    </style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );

 ?>