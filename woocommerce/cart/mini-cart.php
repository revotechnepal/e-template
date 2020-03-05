<?php

/**
 * Mini-cart
 *
 * Contains the markup for the mini-cart, used by the cart widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/mini-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

?>
<?php if (!WC()->cart->is_empty()) : ?>

	<div class="select-items">
		<table>
			<tbody>
				<?php
				foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
					$_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);

					$product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

					if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key)) {
						$product_name      = apply_filters('woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key);
						$thumbnail         = apply_filters('woocommerce_custom_thumbnail', $_product);
						$product_price     = apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
						$product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);

				?>
						<td class="si-pic">
							<?php echo $thumbnail; ?>
						</td>
						<td class="si-text">
							<div class="product-selected">
								<p>
									<?php echo $product_price ?> x <?php echo $cart_item['quantity']; ?>
								</p>
								<h6>
									<?php echo $product_name; ?>
								</h6>
							</div>
						</td>
						<td class="si-close">
							<?php echo sprintf(
								'<a href="%s" class="remove remove_from_cart_button" aria-label="%s" data-product_id="%s" data-cart_item_key="%s" data-product_sku="%s">	<i class="ti-close">

								</i></a>',
								esc_url(wc_get_cart_remove_url($cart_item_key)),
								esc_attr__('Remove this item', 'woocommerce'),
								esc_attr($product_id),
								esc_attr($cart_item_key),
								esc_attr($_product->get_sku())
							) ?>

						</td>



					<?php }; ?>

				<?php }; ?>
			</tbody>
		</table>
	</div>
	<div class="select-total">
		<span>Total:</span>
		<h5><?php echo WC()->cart->get_cart_subtotal(); ?></h5>
	</div>
	<div class="select-button">
		<a href="<?php echo esc_url(wc_get_cart_url()); ?>" class="primary-btn view-card">VIEW CART</a>
		<a href="<?php echo esc_url(wc_get_checkout_url()); ?>" class="primary-btn checkout-btn">CHECK OUT</a>
	</div>


<?php else : ?>
	<p>No items has been added to the cart.</p>

<?php endif; ?>