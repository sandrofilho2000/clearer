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
		<div class="product-list pt-10 lg:pt-5 md:p-5">
			<h4 class="font-bold text-center transform -translate-y-[50%]">
				Conheça nossos produtos
			</h4>
			<div class="div slick-products">
				<?php 
				// Verifique se estamos em um post único
				if (is_single()) {
					// Pegue o valor do campo personalizado "Produtos" do post atual
					$product_ids = get_post_meta(get_the_ID(), '_pods_products', true);

					if (!empty($product_ids)) {
						// Deserializa o valor para obter os IDs dos produtos
						$product_ids = maybe_unserialize($product_ids);

						// Configura a query para buscar produtos com os IDs especificados
						$args = array(
							'post_type' => 'product',
							'post__in' => $product_ids,
							'orderby' => 'post__in', // Mantém a ordem dos IDs
							'posts_per_page' => 7
						);
					} else {
						// Fallback: Se não houver produtos associados, pega 7 produtos aleatórios
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => 7,
							'orderby' => 'rand'
						);
					}
				} else {
					// Caso não seja uma página de post, busca 7 produtos aleatórios
					$args = array(
						'post_type' => 'product',
						'posts_per_page' => 7,
						'orderby' => 'rand'
					);
				}

				$loop = new WP_Query($args);

				// Exibe os produtos
				if ($loop->have_posts()) : 				
					while ($loop->have_posts()) : $loop->the_post();
						global $product;
						?>
						<div class="product-item relative p-3 w-[180px] mx-auto rounded-[4px]">
							
							<a target="_blank" href="https://somdaterra.store/<?php echo slugify(get_the_title()); ?>">
								<!-- Product Image -->
								<div>
									<?php echo $product->get_image(); ?>
								</div>
								
								<!-- Product Name -->
								<h5 class="text-xs md:text-sm"><?php the_title(); ?></h5>
								
								<!-- Product Price -->
								<div class="price mt-[10px] font-bold">
									<?php if ($product->is_on_sale()) : ?>
										<s><p class="regular-price text-[#999] text-xs"><?php echo wc_price($product->get_regular_price()); ?></p></s> 
										<p class="sale-price text-[#9e61c7] text-sm"><?php echo wc_price($product->get_sale_price()); ?></p>
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
				else :
					echo "<p class='text-center'>Nenhum produto encontrado.</p>";
				endif;

				// Reset post data
				wp_reset_postdata();
				?>
			</div>
		</div>
		
		<?php dynamic_sidebar($sidebar); ?>
	</div>
</div>

<?php endif; ?>
