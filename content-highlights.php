<div class="highlights-card">

	<a href="<?php the_permalink(); ?>" class="highlights-card-thumb" style="background-image:url('<?php the_post_thumbnail_url('clearer-medium'); ?>');">
		
		<?php if ( has_post_thumbnail() ): ?>
			
		<?php else: ?>
			<i class="fas fa-image"></i>
		<?php endif; ?>
	
	</a>
	
	<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
		<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
			<a class="comments-bubble" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php } ?>
	<?php endif; ?>

	<div class="highlights-card-inner">

		<h3 class="highlights-card-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			<p class="text-xs mb-5">
			<?php echo get_custom_excerpt(get_the_ID(), 20); // Pass your desired word count here ?>
			</p>
		</h3>
		
		<div class="highlights-card-date"><?php the_time( get_option('date_format') ); ?></div>

		
	</div>
	
</div>