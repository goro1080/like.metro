<?php
get_header();
?>
<div id="body">
<?php
if (! is_WP()) {
	get_sidebar('left');
}
if (is_WP()):
?>
	<div id="wp-primary">
<?php 	else: ?>
	<div id="primary">
<?php	endif; ?>
<h3>HTTP 404</h3>
<p>指定されたページが見当たりません。</p>
<p>なにかお探しでしたら検索してみてください</p>
		<?php get_search_form(); ?>
</div>
<?php
if (! is_WP()) : 
	get_sidebar('right'); 
endif;
?>
</div>
<?php
get_footer();
?>