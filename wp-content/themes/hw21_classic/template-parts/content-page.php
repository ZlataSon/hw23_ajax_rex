<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HW21_classic
 */

?>
<div class="container-fluid">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h2 class="entry-title">', '</h2>'); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(array(
					'before' => '<div class="page-links">' . esc_html__('Pages:', 'hw21_classic'),
					'after' => '</div>',
			));
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php
			edit_post_link(
					sprintf(
					/* translators: %s: Name of current post */
							esc_html__('Edit %s', 'hw21_classic'),
							the_title('<span class="screen-reader-text">"', '"</span>', false)
					),
					'<span class="edit-link">',
					'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>