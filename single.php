<?php
get_header();
if (have_posts()) :
	the_post(); ?>
<?php	if (is_WP()): ?>
	<div id="wp-primary">
<?php	endif; ?>
<article>
	<header>
<?php		if (! is_WP()) : ?>
		<h2 class="entry-title">
<?php		else : ?>
		<h2 class="wp-entry-title">
<?php		endif; ?>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="entry-post-date">posted at <?php echo get_the_date($d) ?></div>
	</header>
<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	}
?>

	<div class="entry-body">
	<?php the_content(); ?>
	</div>
</article>
</div>
<div>
	<span class="entry-post-category">category: <?php echo get_the_category_list(', '); ?></span>
<?php		$tag_list = get_the_tag_list("<span class=\"entry-post-tag\">\ntag: ",', ',"</span>\n");
		if ( '' != $tag_list) {
			printf ('; ');
			printf ($tag_list);
		}
?>
		; <span class="entry-post-comment-number"><?php echo comments_number(); ?></span>
<?php	if (is_WP()): ?>
</div>
<?php	endif; ?>

<?php comments_template(); ?>

<?php comment_form(); ?>
<?php next_posts_link();
endif;
?>

<?php get_footer(); ?>
