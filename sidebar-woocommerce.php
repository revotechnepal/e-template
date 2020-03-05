<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */


?>

<aside id="secondary" class="widget-area col-sm-12 col-md-3 col-lg-3" role="complementary">
	<?php if (!is_active_sidebar('woocomerce_sidebar')) : ?>
		<?php
		the_widget('WC_Widget_Product_Search');
		
		?>
		<?php the_widget('WC_Widget_Cart') ?>

		<?php the_widget('WC_Widget_Price_Filter'); ?>

		<?php the_widget('WC_Widget_Product_Categories'); ?>
	<?php else : ?>
		dynamic_sidebar( 'woocommerce_sidebar' );
	<?php endif; ?>
</aside><!-- #secondary -->