<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('このページを直接読み込んじゃダメだよ!');
if ( post_password_required() ) {
	echo '<p class="nocomments">この投稿はパスワードによって保護されています。コメントを見るためにはパスワードを入れてください。<p>';
	return;
}
?>

<?php if ( have_comments() ) : ?>
<ul class="commentlist">
	<?php wp_list_comments('callback=like_metro_comment'); ?></ul>
<div class="navigation">
	<div class="alignleft"><?php previous_comments_link() ?></div>
	<div class="alignright"><?php next_comments_link() ?></div>
</div>
	<?php else : // コメントがなかった時に表示されます ?>
	<?php if ('open' == $post->comment_status) :
    // コメントが許可されているが、コメントがなかったとき
else : // コメントが許可されていないとき
    endif;
endif;
?>