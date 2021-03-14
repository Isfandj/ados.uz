<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ados.uz
 */

?>

        <!--footer start-->
        <footer class="footer widget-footer ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="sep_holder_box">
                <span class="sep_holder"><span class="sep_line"></span></span>
            </div>
            <div class="second-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 widget-area m-auto">
                            <div class="widget">
                                <div class="footer-logo">
                                    <img id="logo-img" class="img-center" src="<?php the_field('logo','2')?>" alt="logo-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 widget-area">
                            <div class="widget widget_text footer-links ml-40">
                                <?php ados_primary_menu(); ?>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 widget-area">
                            <div class="widget widget_text">
                                <ul class="widget_info_text">
                                    <li><i class="fa fa-phone"></i><?php the_field('primary-phone','33')?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12 col-lg-4 ttm-footer2-left ttm-textcolor-white">
                            <span>ADOS.UZ 2020 	&copy; Barcha huquqlar himoyalangan</span>
                        </div>
                        <div class="col-md-12 col-lg-4 text-center ttm-textcolor-white">
                            <span><a href="#">Sayt yaratuvshisi - OQILA</a></span>
                        </div>
                        <div class="col-md-12 col-lg-4 ttm-footer2-right">
                           <div class="supported_card-block">
                                <ul>
                                    <li><img src="<?=get_template_directory_uri()?>/images/supported_card/card-1.png" alt="maestro"></li>
                                    <li><img src="<?=get_template_directory_uri()?>/images/supported_card/card-2.png" alt="paypal"></li>
                                    <li><img src="<?=get_template_directory_uri()?>/images/supported_card/card-3.png" alt="western union"></li>
                                    <li><img src="<?=get_template_directory_uri()?>/images/supported_card/card-4.png" alt="visa"></li>
                                    <li><img src="<?=get_template_directory_uri()?>/images/supported_card/card-5.png" alt="cirrus"></li>
                                    <li><img src="<?=get_template_directory_uri()?>/images/supported_card/card-6.png" alt="ebay"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

        <div class="wrap-modal1 js-modal1">
            <div class="overlay-modal1 js-hide-modal1"></div>
            <div class="container">
                <div class="modal1-content">
                    <button class="close js-hide-modal1">
                        <i class="fa fa-close"></i>
                    </button>
                    <div class="row ttm-single-product-details ttm-bgcolor-white">
                        <div class="col-lg-6 col-md-6 col-sm-12 ml-auto mr-auto">
                        <div class="product-gallery easyzoom-product-gallery">
                            <div class="product-look-views left">
                                <div class="mt-35 mb-35">
                                    <ul class="thumbnails easyzoom-gallery-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "infinite":true, "vertical":true}'>
                                        <li>
                                            <a href="https://via.placeholder.com/768x1035?text=pro-view+01.jpg" data-standard="https://via.placeholder.com/768x1035?text=pro-view+01.jpg">
                                                <img class="img-fluid" src="https://via.placeholder.com/768x1035?text=pro-view+01.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://via.placeholder.com/768x1035?text=pro-view+02.jpg" data-standard="https://via.placeholder.com/768x1035?text=pro-view+02.jpg">
                                                <img class="img-fluid" src="https://via.placeholder.com/768x1035?text=pro-view+02.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://via.placeholder.com/768x1035?text=pro-view+03.jpg" data-standard="https://via.placeholder.com/768x1035?text=pro-view+03.jpg">
                                                <img class="img-fluid" src="https://via.placeholder.com/768x1035?text=pro-view+03.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://via.placeholder.com/768x1035?text=pro-view+04.jpg" data-standard="https://via.placeholder.com/768x1035?text=pro-view+04.jpg">
                                                <img class="img-fluid" src="https://via.placeholder.com/768x1035?text=pro-view+04.jpg" alt="" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://via.placeholder.com/768x1035?text=pro-view+05.jpg" data-standard="https://via.placeholder.com/768x1035?text=pro-view+05.jpg">
                                                <img class="img-fluid" src="https://via.placeholder.com/768x1035?text=pro-view+05.jpg" alt="" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-look-preview-plus right">
                                <div class="pl-35 res-767-pl-15">
                                    <div class="easyzoom easyzoom-model easyzoom--overlay easyzoom--with-thumbnails">
                                        <a href="https://via.placeholder.com/768x1035?text=pro-view+01.jpg">
                                            <img class="img-fluid" src="https://via.placeholder.com/768x1035?text=pro-view+01.jpg" alt="" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40">
                            <h2 class="product_title entry-title">DEWALT 4-Piece T-Shank Jig Saw Blade Case</h2>
                            <div class="share-icons social-links">
                                <span>Share :</span>
                                <a href="#"><i class="ti ti-facebook"></i></a>
                                <a href="#"><i class="ti ti-twitter-alt"></i></a>
                                <a href="#"><i class="ti ti-google"></i></a>
                                <a href="#"><i class="ti ti-linkedin"></i></a>
                            </div>
                            <div class="comments-notes clearfix">
                                &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow">(No review)</a>
                                &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow">Write to Review</a>
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
                            <div class="product_in-stock"><i class="fa fa-check-circle"></i><span> in Stock Only 14 left</span></div>
                            <span class="price">
                                <ins><span class="product-Price-amount">
                                        <span class="product-Price-currencySymbol">$</span>110.00
                                    </span>
                                </ins>
                                <del><span class="product-Price-amount">
                                        <span class="product-Price-currencySymbol">$</span>123.00
                                    </span>
                                </del>
                            </span>
                            <div class="product-details__short-description">Raising a heavy fur muff that covered the whole of her lower arm towards the viewer regor then turned to look out the window</div>
                            <div class="mt-30 mb-35">
                                <div class="quantity">
                                    <label>Quantity: </label>
                                    <input type="text" value="1" name="quantity-number" class="qty">
                                    <span class="inc quantity-button">+</span>
                                    <span class="dec quantity-button">-</span>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="add-to-cart">
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Add to cart</a>
                                </div>
                            </div>
                            <div class="buttons">
                                <a href="#" rel="nofollow" data-product-id="24006456" data-product-type="simple" class="add_to_wishlist">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <span class="wishlist-text">Add to Wish List</span>
                                </a>
                                <a href="#" class="compare button" data-product_id="24006456" rel="nofollow">
                                    <i class="fa fa-expand" aria-hidden="true"></i>
                                    <span class="compare-text">Compare</span>
                                </a>
                            </div>
                            <div id="block-reassurance-1" class="block-reassurance">
                                <ul> 
                                    <li>
                                        <div class="block-reassurance-item">
                                            <i class="fa fa-lock"></i>
                                            <span>Security policy (edit with Customer reassurance module)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-reassurance-item">
                                            <i class="fa fa-truck"></i>
                                            <span>Delivery policy (edit with Customer reassurance module)</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block-reassurance-item">
                                            <i class="fa fa-arrows-h"></i>
                                            <span>Return policy (edit with Customer reassurance module)</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div><!-- page end -->

<?php wp_footer(); ?>
</body>
</html>


