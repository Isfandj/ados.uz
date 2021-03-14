<?php if ( ! function_exists( 'ados_uz_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function ados_uz_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		ados_uz_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ados_uz_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'ados_uz_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function ados_uz_woocommerce_cart_link() {
		?>
		<a class="" href="#" title="<?php esc_attr_e( 'View your shopping cart', 'ados-uz' ); ?>">
			<?php
			$item_count_text = sprintf(
				_n( '%d itemsss', '%d', WC()->cart->get_cart_contents_count(), 'ados-uz' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="count"></span>
			<div class="cart_icon">
                <i class="fa fa-shopping-cart"></i>
                <div class="cart_count"><?php echo esc_html( $item_count_text ); ?></div>
            </div>
		</a>
		<?php
	}
}

if ( ! function_exists( 'ados_uz_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function ados_uz_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php ados_uz_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}
