<?php 
if (!defined('ABSPATH')) {
		exit;
	}
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' ); 
remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
remove_action('woocommerce_before_single_product','woocommerce_output_all_notices',10);
remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);
remove_all_filters('woocommerce_after_single_product_summary');

?>