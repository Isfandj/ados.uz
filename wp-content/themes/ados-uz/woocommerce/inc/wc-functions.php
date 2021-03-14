<?php 
if (!defined('ABSPATH')) {
		exit;
	}

	remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20);
	
	
	add_action('woocommerce_before_main_content','ados_add_breadcrumb',20);
	function ados_add_breadcrumb(){
		?><div class="mt-15">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="page-title-heading">
                                <div class="breadcrumb-wrapper">
                                    <?php woocommerce_breadcrumb()?>

                                </div>
                            </div>
                            
                            <div class="share-icons social-links">
                                <span>Ulanish:</span>
                                <a href="#"><i class="ti ti-facebook"></i></a>
                                <a href="#"><i class="ti ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti ti-google"></i></a>
                                <a href="#"><i class="ti ti-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>                    
        </div>
<?php	}


add_action('woocommerce_sidebar','ados_add_sidebar_only_archive',10);{
    function ados_add_sidebar_only_archive()
    {
        if (! is_product()) {
            woocommerce_get_sidebar();
        }
    }
}


add_action('woocommerce_before_single_product','ados_wrapper_product_start',5);
function ados_wrapper_product_start(){
	?><div class="ttm-single-product-details">
                            <div class="ttm-single-product-info clearfix">
                                <div class="row"><?php
}



add_action('woocommerce_after_single_product','ados_wrapper_product_end',5);
function ados_wrapper_product_end(){
	?></div></div></div><?php }


add_action('woocommerce_before_single_product_summary','ados_wrapper_product_img_start',5);
function ados_wrapper_product_img_start(){
	?><div class="col-lg-4 col-md-4 col-sm-12"><?php
}


add_action('woocommerce_before_single_product_summary','ados_wrapper_product_img_end',25);
function ados_wrapper_product_img_end(){
	?></div><?php
}

add_action('woocommerce_before_single_product_summary','ados_wrapper_product_entry_start',30);
function ados_wrapper_product_entry_start(){
	?>
	<div class="col-lg-4">
		<div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40"><?php
	}


add_action('woocommerce_after_single_product_summary','ados_wrapper_product_entry_end',5);
function ados_wrapper_product_entry_end(){
	?></div></div><?php
}

add_filter('woocommerce_short_description','ados_short_description',10);
function ados_short_description($content){
    ?>
    <hr>
    <div class="product-details__short-description">
        <?php echo $content ?>
    </div><?php
}


