<div id="footer" role="contentinfo">
<?php
	printf( "<div class=\"navigation\">\n" );
	posts_nav_link(' ', '<div class="left-nav"><img class="nav-arrow" src="' . get_template_directory_uri() .'/img/leftarrow.png" alt="まえに"></div>', '<div class="right-nav"><img class="nav-arrow" src="' . get_template_directory_uri() .'/img/rightarrow.png" alt="つぎに"></div>');
	printf( '</div>' );
?>

</div>
<?php wp_footer(); ?>
</body>
</html>