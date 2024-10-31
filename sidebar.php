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
		<div class="product-list p-5">
		<!-- List Products Here -->
		 <h4 class="font-bold text-center transform -translate-y-[50%]">
			Conheça nossos produtos
		 </h4>
		<?php 
			// Set up custom query to fetch WooCommerce products
			$args = array(
				'post_type' => 'product',
				'posts_per_page' => 5, // Limit the number of products displayed
				'orderby' => 'date',
				'order' => 'DESC'
			);
			$loop = new WP_Query($args);

			// Check if there are products available
			if ($loop->have_posts()) : 				
				while ($loop->have_posts()) : $loop->the_post();
					global $product;
					?>
					<div class="product-item w-[180px] mx-auto rounded-[4px]">
						
						<a target="_blank" href="https://somdaterra.store/<?php echo slugify(get_the_title()); ?>">
							<!-- Product Image -->
							<div>
								<?php echo $product->get_image(); ?>
							</div>
							
							<!-- Product Name -->
							<h5 class="text-sm"><?php the_title(); ?></h5>
							
							<!-- Product Price -->
							<div class="price mt-[10px] font-bold">
								<?php if ($product->is_on_sale()) : ?>
									<s><p class="regular-price text-[#999] text-xs"><?php echo wc_price($product->get_regular_price()); ?></p></s> 
									<p>
										<p class="sale-price text-[#9e61c7] text-sm"><?php echo wc_price($product->get_sale_price()); ?></p>
									</p>
								<?php else : ?>
									<span class="regular-price"><?php echo wc_price($product->get_regular_price()); ?></span>
								<?php endif; ?>
							</div>

							<div class="text-center rounded-[4px] mt-1 py-1 px-2 flex items-center justify-center bg-[#3D3062] text-white">
								Ver mais
							</div>
						</a>
					</div>
					<?php
				endwhile;
				
			endif;

			// Reset post data
			wp_reset_postdata();
		?>
		</div>
		
		<?php dynamic_sidebar($sidebar); ?>
	</div>
</div>

<?php endif; ?>
