<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ados.uz
 */

get_header();
?>
<div class="container">
	<main id="primary" class="site-main">

		<div class="site-main">

        <!--error-404 start-->
        <section class="error-404">
            <div class="ttm-big-icon ttm-textcolor-highlight">
                <i class="fa fa-thumbs-o-down"></i>
            </div>
            <header class="page-header"><h1 class="page-title">Ошибка 404</h1></header>
            <div class="page-content"> <p>Страница не найдена</p></div>
            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="<?=home_url('/')?>">Вернуться</a>
        </section><!--error-404 end-->


    </div>

	</main><!-- #main -->
</div>

<?php
get_footer();
