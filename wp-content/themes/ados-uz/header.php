<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ados.uz
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Ecommerce &raquo; HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Fixfellow &#8211; Tools Store Ecommerce Html Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/favicon.png" />

<?php wp_head()?>
</head>

<body>

    <!--page start-->
    <div class="page">


        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <!-- top_bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col d-md-flex flex-row">
                            <div class="top_bar_contact_item"><i class="fa fa-map-marker" aria-hidden="true"></i> Toskent </div>
                            <?php ados_primary_menu(); ?>
                            <!-- <ul class="ml-auto mr-auto top_bar_nav">
                                <li><a href="">Do'kon haqida</a></li>
                                <li><a href="">Yetkazish va qaytarish</a></li>
                                <li><a href="">To'lov usullari</a></li>
                                <li><a href="">Aloqalar</a></li>
                            </ul> -->
                            <div class="top_bar_content ml-auto">
                                <div class="top_bar_user">
                                    <div><a href="#"><i class="fa fa-balance-scale" aria-hidden="true"></i> Solishtirish <span class="compare_count">6</span></a></div>
                                    <div><a class="top_bar_phone" href="tel:<?php the_field('primary-phone','33')?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field('primary-phone','33')?> </a></div>
                                    <div class="top_bar_menu">
                                        <ul class="top_bar_dropdown">
                                            <li><a href="#" data-toggle="dropdown"><span class="mr-2"></span>O'zbekcha</a>
                                                <ul>
                                                    <li><a href="#"><span class="mr-2"><img src="<?=get_template_directory_uri()?>/images/English-icon.jpg" alt="img"></span>O'zbekcha</a></li>
                                                    <li><a href="#"><span class="mr-2"><img src="<?=get_template_directory_uri()?>/images/French-icon.jpg" alt="img"></span>Русский</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- top_bar end-->
            <!-- header_main -->
            <div class="header_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-3 col-3 order-1">
                            <div class="row">
                            <!-- site-branding -->
                                <div class="site-branding col-md-4">
                                    <a class="home-link" href="<?=home_url('/')?>" title="Fixfellow" rel="home">
                                        <img id="logo-img" class="img-center header_logo" src="<?php the_field('logo','2')?>" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <div class="col-md-8">
                                    <div class="cat_menu_container">
                                    	<?php get_template_part('woocommerce/inc/parts/wc-product','category') ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-12 order-lg-2 order-3 text-lg-left text-right">
                            <div class="header_search"><!-- header_search -->
                                <div class="header_search_content">
                                    <div id="search_block_top" class="search_block_top">
                                        <form id="searchbox" class="searchbox" method="get" action="<?= esc_url(home_url('/'))?>">
                                            <input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="Mahsulotlarni qidirish" value="<?=get_search_query();?>">           
                                            <?php get_template_part('woocommerce/inc/parts/wc-search','category') ?>
                                            <button type="submit" name="submit_search" class="btn btn-default button-search"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>    
                            <!-- header_search end -->
                        </div>
                        <div class="col-lg-3 col-9 order-lg-3 order-2">
                            <!-- header_extra -->
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end">
                                <div class="cart dropdown">
                                    <div class="dropdown_link" data-toggle="dropdown">
                                    	<?php ados_uz_woocommerce_cart_link(); ?>
                                        <!-- <div class="cart_icon">
                                            <i class="fa fa-shopping-cart"></i>
                                            <div class="cart_count">03</div>
                                        </div> -->
                                    </div>
                                    <aside class="widget_shopping_cart dropdown_content">
                                        <p class="cart-title">Savatcha</p>
                                        <ul class="cart-list">
                                        	<?php get_template_part('woocommerce/inc/parts/wc-mini','cart') ?>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="wishlist dropdown">
                                    <div class="dropdown_link" data-toggle="dropdown">
                                        <div class="cart_icon">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                    <aside class="widget_shopping_cart dropdown_content">
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="photo"><img src="https://via.placeholder.com/271x300?text=271x300+Pro+view1" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Impact Wrench</a></h6>
                                                <p>2x - <span class="price">$220.00</span></p>
                                            </li>
                                            <li>
                                                <a href="#" class="photo"><img src="https://via.placeholder.com/271x300?text=271x300+Pro+view1" class="cart-thumb" alt="" /></a>
                                                <h6><a href="#">Demolition Breaker</a></h6>
                                                <p>1x - <span class="price">$38.00</span></p>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right"><strong>Total</strong>: $257.00</span>
                                                <a href="cart.html" class="btn btn-default btn-cart">Cart</a>
                                            </li>
                                        </ul>
                                    </aside>
                                </div>
                                <div class="user dropdown">
                                    <div class="dropdown_link" data-toggle="dropdown">
                                        <div class="cart_icon">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i><span class="user-text"> <a href="#">Kirish/Regisratsiya</a></span>
                                        </div>
                                    </div>
                                    <aside class="widget_shopping_cart dropdown_content">
                                        <?php get_template_part('woocommerce/inc/parts/wc-form','login') ?>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- haeder-main end -->
        </header><!--header end-->

