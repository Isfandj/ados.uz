<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

/*defined( 'ABSPATH' ) || exit;*/

get_header( 'shop' );


/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
/*do_action( 'woocommerce_before_main_content' );*/

// WP_Query arguments
$products = wc_get_products(array(
    'numberposts' => 300,
    'post_status' => 'published', 
    // Only published products
    // 'meta_key'    => '_customer_user',
    // 'meta_value'  => get_current_user_id(), // Or $user_id
) );

    /*$products = new WC_Product_Query( $args );*/
    /*var_dump($products);*/

?>
<div class="container">
    <div class="row">
        <?php
        echo do_shortcode('[smartslider3 slider="3"]');
        ?>
    </div>
</div>
<div class="site-main">

    <!-- row-top-section -->
    <section class="row-top-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-20 res-991-mt-0">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style1 ttm-bgcolor-grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="<?=get_template_directory_uri()?>/images/products/product2.png">
                                        </div>
                                        <div class="col-md-6 featured-content">
                                            <h5 class="featured-title">Planshetlar, smartfonlar va boshqalar</h5>
                                            <a href="#">Xarid qilish -></a>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style1 ttm-bgcolor-grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="<?=get_template_directory_uri()?>/images/products/product2.png">
                                        </div>
                                        <div class="col-md-6 featured-content">
                                            <h5 class="featured-title">Planshetlar, smartfonlar va boshqalar</h5>
                                            <a href="#">Xarid qilish -></a>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style1 ttm-bgcolor-grey">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img class="img-fluid" src="<?=get_template_directory_uri()?>/images/products/product2.png">
                                        </div>
                                        <div class="col-md-6 featured-content">
                                            <h5 class="featured-title">Planshetlar, smartfonlar va boshqalar</h5>
                                            <a href="#">Xarid qilish -></a>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>
    <section class="featured-product-section clearfix">
                <div class="container">
                    <!-- row -->
                    <div class="row">
                        <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                            <!-- section-title -->
                            <div class="section-title title-style-center_text style2">
                                <div class="title-header">
                                    <h5>how it works</h5>
                                    <h2 class="title">Top Selling Products</h2>
                                </div>
                            </div><!-- section-title end -->
                        </div>
                    </div><!-- row end -->
                    <div class="products row">
                        <!-- product -->
                        <?php foreach ($products as $product): ?>
                        <div class="product col-md-3 col-sm-6 col-xs-12">
                            
                            <div class="product-box">
                                <!-- product-box-inner -->
                                <div class="product-box-inner">
                                    <div class="product-image-box">
                                    	<a href="product/<?=$product->get_slug()?>">
                                        <img class="img-fluid pro-image-front" src="<?=get_the_post_thumbnail_url($product->get_id())?>" alt="">
                                        <img class="img-fluid pro-image-back" src="<?=get_the_post_thumbnail_url($product->get_id())?>" alt="">
                                        </a>
                                    </div>
                                </div><!-- product-box-inner end -->
                                <div class="product-content-box"><?$term = get_the_terms($product->get_id(),'product_cat');?>
                                <?php if ($term): ?>
                                    <small><?echo($term[0]->name)?></small>
                                <?php endif ?>
                                    <a class="product-title" href="product/<?=$product->get_slug()?>">
                                        <h2><?=$product->get_name()?></h2>
                                    </a>
                                    <div class="star-ratings">
                                        <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li class="ttm-color-grey"><small><?=comments_number(false,false,false,$product->get_id())?></small></li>
                                        </ul>
                                    </div>
                                    <span class="price">
                                        <span class="product-Price-amount">
                                            <?=wc_price($product->get_price())?>
                                        </span>
                                    </span>
                                    <div class="product-btn-wrapper">
                                        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top"><i class="heart-icon-product ti ti-heart"></i></a>
                                        </div>
                                        <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!-- <form method="post" enctype="multipart/form-data">
                                    <button name="add-to-cart" <?php echo esc_attr($product->get_id())?> href="#" class="product-btn-cart" class="text-center">Xarid savatchasiga qo'shish</a>
                                    </button>
                                    </form> -->
                                    <a href="?add-to-cart=<?php echo esc_attr($product->get_id())?>" data-quantity="1" class="product-btn-cart text-center" data-product_id="<?php echo esc_attr($product->get_id())?>" data-product_sku="<?php echo esc_attr($product->get_sku())?>"  rel="nofollow">Xarid savatchasiga qo'shish</a>
                                </div>
                            </div>

                        </div><!-- product end -->
                        <?php endforeach ?>
                    </div>
                </div>
            </section>












    <?
    get_footer( 'shop' );