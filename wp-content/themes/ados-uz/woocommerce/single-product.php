<?php 
get_header();
the_post();
global $product;
if( $product->is_type( 'simple' ) ){
    
	$first_variation = $product;
} elseif( $product->is_type( 'variable' ) ){
   $variations = $product->get_children();
	$first_variation = new WC_Product_Variation($variations[0]);
}
else{
	$first_variation = $product;
}

?>
         <div class="mt-15">
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
        </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- single-product-section -->
        <section class="single-product-section layout-1 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-single-product-details">
                            <div class="ttm-single-product-info clearfix">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 ml-auto mr-auto">
                                        <div class="product-gallery easyzoom-product-gallery">
                                        	<?php $attachment_ids = $product->get_gallery_image_ids(); ?>
                                        	<?php if ($attachment_ids): ?>
                                            <div class="product-look-views left">
                                                <div class="mt-35 mb-35">
                                                    <ul class="thumbnails easyzoom-gallery-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "infinite":true, "vertical":true}'>
                                                    	<?php foreach ($attachment_ids as $gallery_img): ?>
                                                        <li>
                                                            <a href="<?=wp_get_attachment_url($gallery_img,'full')?>" data-standard="<?=wp_get_attachment_url($gallery_img,'full')?>">
                                                                <img class="img-fluid" src="<?=wp_get_attachment_url($gallery_img,'full')?>" alt="" />
                                                            </a>
                                                        </li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <?php endif ?>
                                            <div class="product-look-preview-plus right">
                                                <div class="pl-35 res-767-pl-15">
                                                    <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                                        <a href="<?php echo get_the_post_thumbnail_url();?>">
                                                            <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url('','full');?>" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40">
                                            <h2 class="product_title entry-title"><?php the_title()?></h2>
                                            <div class="comments-notes clearfix">
                                                &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow"><?=comments_number()?></a>
                                                <div class="product-rating clearfix">
                                                    <ul class="star-rating clearfix">
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="price">
                                                <ins><span class="product-Price-amount">
                                                       <?php echo wc_price($first_variation->get_price());?>
                                                    </span>
                                                </ins>
                                                <?php if ($first_variation->get_sale_price() != 0): ?>
                                                	<del><span class="product-Price-amount">
                                                       <?php echo wc_price($first_variation->get_sale_price());?>
                                                    </span>
                                                </del>
                                                <?php endif ?>
                                                
                                            </span>
                                            <div class="product-details__short-description">
                                                <ul>
                                                    <li>Kafolat muddati: <span class="color-black"><b>12 oy</b></span></li>
                                                    <li>Operatsion sistema: <span class="color-black"><b>12 oy</b></span></li>
                                                    <li>Tezkor hotira hajmi: <span class="color-black"><b>12 oy</b></span></li>
                                                    <li>
                                                        Doimiy xotira hajmi: <br>
                                                        <?php if ($product->is_type( 'variable')): ?>
                                                        <?php foreach ($variations as $variation ):?>
                                                        <?php $single_var = new WC_Product_Variation($variation);  ?>
                                                        <a href="#" class="btn btn-product-page"><?=$single_var->get_attribute('memory')?></a>	
                                                        <?php endforeach ?>
                                                        <?php endif ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="mt-15 mb-25">
                                                <div class="quantity">
                                                	<form method="post" enctype="multipart/form-data">
                                                    <label>Soni: </label>
                                                    <?php woocommerce_quantity_input(array(
                                                    	'min_value' => apply_filters('woocommerce-quantity_input_min',$product->get_min_purchase_quantity(),$product),
                                                    	'max_value' => apply_filters('woocommerce-quantity_input_max',$product->get_max_purchase_quantity(),$product),
                                                    	'input_value' => $product->get_min_purchase_quantity()
                                                    ))?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="actions">
                                            <div class="calc-product text-center">
                                                <p class="text-left">Bo'lib to'lash: <br><b> 450 000 so'm/oy</b></p>
                                                <a class="btn-product-calc btn" href="#">Bo'lib to'lash</a>
                                            </div>
                                            <div class="buttons">
                                                <button value="<?php echo esc_attr($first_variation->get_id())?>" name="add-to-cart" href="#" class="btn-cart btn w-100">Xarid savatchasiga qo'shish</button>
                                                <div class="compare-btn"><a href="#" class="wishlist-btn tooltip-top text-left"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                                </div><span class="compare-text"> Solishtorish</span>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#" class="text-center">Product description</a></li>
                                    <li class="tab"><a href="#">Customer reviews</a></li>
                                </ul>
                                <div class="content-tab">

                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <?php the_content()?>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div id="reviews" class="woocommerce-Reviews">
                                        	<?php $reviews = get_comments(array('post_type' => 'product','post_id'=>$product->get_id())); ?>
                                            <div id="comments">
                                                <ol class="commentlist">
                                                	<?php foreach ($reviews as $review): ?>
                                                    <li class="review">
                                                        <div class="comment_container">
                                                            <div class="comment-text">
                                                                <ul class="star-rating">
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                </ul>
                                                                <p class="meta">
                                                                    <strong class="eview__author"><?=$review->comment_author?> </strong><span class="review__dash">–</span>
                                                                    <time class="woocommerce-review__published-date"><?=$review->comment_date?></time>
                                                                </p>
                                                                <div class="description">
                                                                    <p><?=$review->comment_content?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php endforeach ?>
                                                </ol>
                                            </div>
                                        </div>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                </div>
                                </div>
                                <div class="col-md-4">
                                    <h5 class="product-recomended-title">Tavsiya qilingan mahsulotlar</h5>
                                    <div class="product product-recomended">
                                        <div class="product-box">
                                            <!-- product-box-inner -->
                                            <div class="product-box-inner">
                                                <div class="product-image-box">
                                                    <img class="img-fluid pro-image-front" src="https://via.placeholder.com/271x300?text=271x300+Pro+view1" alt="">
                                                    <img class="img-fluid pro-image-back" src="https://via.placeholder.com/271x300?text=271x300+Pro+view2" alt="">
                                                </div>
                                            </div><!-- product-box-inner end -->
                                            <div class="product-content-box">
                                                <small>Telefonlar</small>
                                                <a class="product-title" href="product-layout1.html">
                                                    <h2>Reel Fiberglass Tape</h2>
                                                </a>
                                                <div class="star-ratings">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="ttm-color-grey"><small>Sharhlar(6)</small></li>
                                                    </ul>
                                                </div>
                                                <span class="price">
                                                    <span class="product-Price-amount">
                                                        2 945 000 so'm
                                                    </span>
                                                </span>
                                                <div class="product-btn-wrapper">
                                                    <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top"><i class="heart-icon-product ti ti-heart"></i></a>
                                                    </div>
                                                    <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" class="product-btn-cart" class="text-center">Xarid savatchasiga qo'shish</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-35 related products">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="content-sec-head-style">
                                        <div class="content-area-sec-title">
                                            <h5>O'xshash mahsulotlar</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- slick_slider -->
                                    <div class="slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":true, "autoplay":true, "infinite":false}'>
                                        <div class="product">
                                        <div class="product-box">
                                            <!-- product-box-inner -->
                                            <div class="product-box-inner">
                                                <div class="product-image-box">
                                                    <img class="img-fluid pro-image-front" src="https://via.placeholder.com/271x300?text=271x300+Pro+view1" alt="">
                                                    <img class="img-fluid pro-image-back" src="https://via.placeholder.com/271x300?text=271x300+Pro+view2" alt="">
                                                </div>
                                            </div><!-- product-box-inner end -->
                                            <div class="product-content-box">
                                                <small>Telefonlar</small>
                                                <a class="product-title" href="product-layout1.html">
                                                    <h2>Reel Fiberglass Tape</h2>
                                                </a>
                                                <div class="star-ratings">
                                                    <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li class="ttm-color-grey"><small>Sharhlar(6)</small></li>
                                                    </ul>
                                                </div>
                                                <span class="price">
                                                    <span class="product-Price-amount">
                                                        2 945 000 so'm
                                                    </span>
                                                </span>
                                                <div class="product-btn-wrapper">
                                                    <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top"><i class="heart-icon-product ti ti-heart"></i></a>
                                                    </div>
                                                    <div class="product-btn"><a href="#" class="wishlist-btn tooltip-top"><i class="fa fa-balance-scale" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <a href="#" class="product-btn-cart" class="text-center">Xarid savatchasiga qo'shish</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div><!-- slick_slider end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- single-product-section end -->
                        

    </div><!--site-main end-->
        <?php get_footer(); ?>

