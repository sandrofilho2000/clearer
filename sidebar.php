<?php 
	$sidebar = clearer_sidebar_primary();
	$layout = clearer_layout_class();
	if ( $layout != 'col-1c'):
?>

<div class="sidebar">
	<div class="sidebar-content">
	
		<?php if ( is_home() && !is_paged() ): ?>
			<?php get_template_part('inc/blog-intro'); ?>
		<?php endif; ?>
		
		
		
		<?php dynamic_sidebar($sidebar); ?>
	</div>
</div>

<?php endif; ?>