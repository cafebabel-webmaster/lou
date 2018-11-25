<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blank
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

		$args = array(
			'post_type' => 'property',
			'posts_per_page'	=> -1
		);

		$project = new WP_Query( $args );

		if ( $project->have_posts() ) {
			while ( $project->have_posts() ) {
				$project->the_post();
				echo 'Projects :<h2>' . get_the_title() . '</h2>' . get_the_post_thumbnail($post->ID, 'small');
			}
			wp_reset_postdata();
		} else {
		}

		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
