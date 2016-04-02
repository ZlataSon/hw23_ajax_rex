<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HW21_blog_name
 */

?>
<div class="container-fluid">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

			<?php if ('post' === get_post_type()) : ?>
				<div class="entry-meta">
					<?php hw21_blog_name_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<p>
			<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>">Continue Reading <span class="more fa fa-chevron-right"></span></a>
			</p>
		</div><!-- .entry-summary -->

		<footer class="entry-footer">
			<?php hw21_blog_name_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->
</div>