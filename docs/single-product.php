<?php get_header(); ?>
<?php
  $product_id = get_the_ID();

  $product_price = carbon_get_post_meta($product_id, 'product_price');
  $product_country = carbon_get_post_meta($product_id, 'product_country');
  $product_weight = carbon_get_post_meta($product_id, 'product_weight');
  $product_enrgy = carbon_get_post_meta($product_id, 'product_enrgy');
  $product_img_src = get_the_post_thumbnail_url($product_id, 'product');
  $product_st = carbon_get_post_meta($product_id, 'product_st');
  $product_categories = get_the_terms($product_id, 'product-categories');
  $product_categories_str = '';
  foreach ($product_categories as $category) {
    $product_categories_str .= "$category->slug,";
  }
  $product_categories_str = substr($product_categories_str, 0, -1);
?>


<main class="first10">
<div class="catalog container" class="categorii">
				<div class="bokcategor">
					<ul class="bokcategor_1">
						<li>
                            
                        <?php
           $catalog_nav_items = get_terms([
            'taxonomy' => 'product-categories',
            'parent'  => 0,
			
           ]);
        ?>    
                       
                        <?php foreach ($catalog_nav_items as $item) : ?>
                        <li>
							<a href="<?php echo get_site_url() . '/product-categories/' . $item->slug; ?>" class="menu">
								<img src="<?php echo  get_template_directory_uri(); ?>/assets/img/<?php echo $item->name; ?>.svg" width="40" height="40">
								<p class="bokcategor_2"><?php echo $item->name; ?></p>
							</a>							
						</li>
                        <?php endforeach; ?>
                    </ul>
				</div>
    <div class="catalog">
	<ul>
    					
					<li>
						<div class="container_single_product js-product"  data-category="<?php echo $product_categories_str; ?>" data-product-name="<?php the_title(); ?>" data-product-price="<?php echo $product_price; ?>" data-product-src="<?php echo $product_img_src; ?>" data-product-country="<?php echo $product_country; ?>" data-product-enrgy="<?php echo $product_enrgy; ?> ккал." data-product-weight="<?php echo $product_weight; ?>г" data-product-pricest="<?php echo $product_st; ?>">
							<ul>
							<li>
										<div class="con_name">
											<ul>
												<li>
													<span class="con_name_1"><?php the_title(); ?></span>
												</li>
												<li>
													<span class="con_name_2"><?php echo $product_country; ?></span>
												</li>
												<li>
													<div>
														<ul class="con_atr">
															<li class="con_atr_1">
																<span> <?php echo $product_weight; ?> г</span>
															</li>
															<li class="con_atr_1">
																<span> <?php echo $product_enrgy; ?> ккал</span>
															</li>
														</ul>
													</div>
												</li>
											</ul>
										</div>
							</li>
							<li>
							<div>
							<ul class="container_single_product">
							<li>	
								<div class="con_atr_img">
									<div class="radius_10">
										<img class="con_atr_img_1" src="<?php echo $product_img_src; ?>" width="300" height="300">
									</div>
								</div>
							</li>
							<li>
								<div>
									<ul>
										<li>
											<div class="con_atr_boc">
												<ul>
													<li>
														<img class="con_atr_img_2" src="<?php echo get_template_directory_uri(); ?>/assets/img/evil.svg" width="37" height="35">
														<div class="con_atr_line"><hr></div>
													</li>
													<li>
														<div>
															<ul class="con_atr_btn">
															    <li class="con_atr_4">
 				    										        <p class="price_tovar_st_1"> <?php echo $product_st; ?> </p>
 				    									        </li>
																<li class="con_atr_3 price_tovar_st_2">
																	<span class="con_atr_2"><?php echo $product_price; ?> р.</span>
																</li>
																<li class="con_atr_btn_1">
																	<div>
																		<button class="bubbly-button_2 bubbly-button_1 js-btn-add-to-cart">Добавить</button>
																	</div>
																</li>
															</ul>
														</div>
													</li>
													<li>
														<div class="con_atr_line_1"><hr></div>
													</li>
												
													<li>
															<div class="con_atr_text">
															<span>
                                    							<?php while ( have_posts() ) : the_post(); ?>
                                            						<?php the_content(); ?>
                                    							<?php endwhile; ?>
															</span>
															</div>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</li>
							</ul>
							</div>	
							</li>
							</ul>
						</div>
					</li>
					</ul>	
</div>




				
				<div class="pop_up" type="hidden">
				<div class="cart js-cart js-cart-wrapper">		
						<span class="itogs_1 js-cart-total-price"></span>
						<div id="map"></div>
				</div>
				<span class="itogs_1 js-cart-dost">250</span>
					<span class="itogs_1 js-cart-dost_1">0</span>
				</div>
		</main>
        <div style="clear: both;">
			
        </div>


<?php get_footer(); ?>