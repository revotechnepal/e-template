<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<div class="container pt-4">
	<div class="row justify-content-between">

		<section id="primary" class="content-area col-sm-12 col-md-9 col-lg-9">
			<main id="main" class="site-main" role="main">

				<?php
				while (have_posts()) : the_post();

					the_content();


				endwhile; // End of the loop.
				?>

			</main><!-- #main -->
		</section><!-- #primary -->
	</div>
</div>
<?php

get_footer();
