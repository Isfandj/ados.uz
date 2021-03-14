<?php 
if (!defined('ABSPATH')) {
		exit;
	}
function ados_uz_scripts() {
	wp_style_add_data( 'ados-uz-style', 'rtl', 'replace' );
	$version = '0.0.0.0';
    $tmp_uri = get_template_directory_uri() . '/assets';
    wp_enqueue_style( 'ados-uz-style', get_stylesheet_uri(), ['bootstrap'], $version );
    wp_dequeue_style('wp-block-library');
    wp_enqueue_style('bootstrap',$tmp_uri . '/css/bootstrap.min.css',[],$version);

    wp_enqueue_style('animate',$tmp_uri . '/css/animate.css',[],$version);
    wp_enqueue_style('font-awesome',$tmp_uri . '/css/font-awesome.css',[],$version);
    wp_enqueue_style('themify-icons',$tmp_uri . '/css/themify-icons.css',[],$version);
    wp_enqueue_style('slick',$tmp_uri . '/css/slick.css',[],$version);
    wp_enqueue_style('slick-theme',$tmp_uri . '/css/slick-theme.css',[],$version);
    wp_enqueue_style('revolution',$tmp_uri . '/revolution/css/layers.css',[],$version);
    wp_enqueue_style('revolution-settings',$tmp_uri . '/revolution/css/settings.css',[],$version);
    wp_enqueue_style('magnific-popup',$tmp_uri . '/css/magnific-popup.css',[],$version);
    wp_enqueue_style('megamenu',$tmp_uri . '/css/megamenu.css',[],$version);
    wp_enqueue_style('shortcodes',$tmp_uri . '/css/shortcodes.css',[],$version);
    wp_enqueue_style('responsive',$tmp_uri . '/css/responsive.css',[],$version);
    

    wp_enqueue_script('jquery',$tmp_uri. '/js/jquery.min.js',[],$version,true);
    wp_enqueue_script('tether',$tmp_uri. '/js/tether.min.js',[],$version,true);
    wp_enqueue_script('bootstrap',$tmp_uri. '/js/bootstrap.min.js',[],$version,true);
    wp_enqueue_script('jquery-easing',$tmp_uri. '/js/jquery.easing.js',[],$version,true);
    wp_enqueue_script('jquery-waypoints',$tmp_uri. '/js/jquery-waypoints.js',[],$version,true);
    wp_enqueue_script('jquery-validate',$tmp_uri. '/js/jquery-validate.js',[],$version,true);
    wp_enqueue_script('numinate',$tmp_uri. '/js/numinate.min.js',[],$version,true);
    wp_enqueue_script('slick',$tmp_uri. '/js/slick.js',[],$version,true);
    wp_enqueue_script('magnific-popup',$tmp_uri. '/js/jquery.magnific-popup.min.js',[],$version,true);
    wp_enqueue_script('price_range',$tmp_uri. '/js/price_range_script.js',[],$version,true);
    wp_enqueue_script('easyzoom',$tmp_uri. '/js/easyzoom.js',[],$version,true);
    wp_enqueue_script('main-js',$tmp_uri. '/js/main.js',[],$version,true);
    
    wp_enqueue_script('jquery.themepunch',$tmp_uri. '/revolution/js/jquery.themepunch.tools.min.js',[],$version,true);
    wp_enqueue_script('jquery.themepunch.revolution',$tmp_uri. '/revolution/js/jquery.themepunch.revolution.min.js',[],$version,true);
    wp_enqueue_script('slider',$tmp_uri. '/revolution/js/slider.js',[],$version,true);

    
    wp_enqueue_script('revolution.extension',$tmp_uri. '/revolution/js/extensions/revolution.extension.actions.min.js',[],$version,true);
    wp_enqueue_script('revolution.carousel',$tmp_uri. '/revolution/js/extensions/revolution.extension.carousel.min.js',[],$version,true);
    wp_enqueue_script('revolution.kenburn',$tmp_uri. '/revolution/js/extensions/revolution.extension.kenburn.min.js',[],$version,true);
    wp_enqueue_script('revolution.layeranimation',$tmp_uri. '/revolution/js/extensions/revolution.extension.layeranimation.min.js',[],$version,true);
    wp_enqueue_script('revolution.migration',$tmp_uri. '/revolution/js/extensions/revolution.extension.migration.min.js',[],$version,true);
    wp_enqueue_script('revolution.navigation',$tmp_uri. '/revolution/js/extensions/revolution.extension.navigation.min.js',[],$version,true);
    wp_enqueue_script('revolution.parallax',$tmp_uri. '/revolution/js/extensions/revolution.extension.parallax.min.js',[],$version,true);
    wp_enqueue_script('revolution.slideanims',$tmp_uri. '/revolution/js/extensions/revolution.extension.slideanims.min.js',[],$version,true);
    wp_enqueue_script('revolution.video',$tmp_uri. '/revolution/js/extensions/revolution.extension.video.min.js',[],$version,true);

	wp_enqueue_script( 'ados-uz-navigation', $tmp_uri . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ados_uz_scripts' );

 ?>