<?php
get_header();
?>
<div id="body">
<?php
if (! is_WP()) {
	get_sidebar('left');
}
if (have_posts()) :
	if (is_WP()):
?>
	<div id="wp-primary">
<?php 	else: ?>
	<div id="primary">
<?php	endif; ?>
<?php
	while (have_posts()) :
		the_post(); ?>
	<article>
	<header>
<?php		if (is_WP()) : ?>
		<h2 id="wp-entry-title">
<?php		else : ?>
		<h2 class="entry-title">
<?php		endif; ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-post-date">posted at <?php echo get_the_date($d); ?></div>
	<?php		if ( has_post_format('gallery') ):
				$images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
printf( '<div class="gallerycaption">このギャラリーには%1$s枚の画像があります</div>',count($images));
			endif; ?>
	</header>

<?php		if (! is_WP()) : ?>
			<div class="entry-body">
			<?php the_content('続きを読む&#8230;'); ?>
			</div>
<?php		endif; ?>
		<div>
			<span class="entry-post-category">
			category: <?php echo get_the_category_list(', '); ?>
			</span>
<?php
		$tag_list = get_the_tag_list("<span class=\"entry-post-tag\">\ntag: ",', ',"</span>\n");
		if ( '' != $tag_list) {
			echo ('; ');
			echo ($tag_list);
		}
?>
			;<span class="entry-post-comment-number">
				<a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
			</span>
		</div>
	</article>

<?php	endwhile; ?>

	</div>
<?php endif; ?>
<?php
if (! is_WP()) : 
	get_sidebar('right'); 
endif;
?>
</div>
<?php get_footer(); ?>
