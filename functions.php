<?php

add_action( 'after_setup_theme', 'like_metro_setup' );

if ( ! function_exists( 'like_metro_setup' ) ){
	function like_metro_setup() {
	        add_theme_support( 'post-formats', array('gallery') );

	}
}


if ( ! function_exists('is_WP') ) {
	function is_WP() {
		return preg_match('/IEMobile/i',$_SERVER['HTTP_USER_AGENT']);
	}
}

if ( function_exists('register_sidebar') ) {
        register_sidebar( array(
                'name' => __( 'Left Sidebar', 'like.metro' ),
                'id' => 'left-sidebar',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => "</aside>",
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );

        register_sidebar( array(
                'name' => __( 'Right Sidebar', 'like.metro' ),
                'id' => 'right-sidebar',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => "</aside>",
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
        ) );
}

if ( ! function_exists('like_metro_comment') ) {
	function like_metro_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-author vcard">
			<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
		</div>
		<?php if ($comment->comment_approved == '0') : ?>
		<em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

		<?php comment_text() ?>

		<div class="reply">
			<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	</div>
<?php
	}
}
?>
