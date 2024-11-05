<div class="featured-card">
	<div class="featured-card-inner relative">
		<img src="<?php the_post_thumbnail_url('clearer-huge'); ?>"  class="absolute opacity-05 w-full object-fit" />
		<a href="<?php the_permalink(); ?>" class="featured-card-thumb">
			
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
		
		<h2 class="featured-large-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?>
		<p class="text-xs text-white">
			<?php echo get_custom_excerpt(get_the_ID(), 20); // Pass your desired word count here ?>
			</p></a>
		</h2>

	</div>
</div>