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




<li>
							<div class="obiom js-product" data-category="<?php echo $product_categories_str; ?>" data-product-name="<?php the_title(); ?>" data-product-price="<?php echo $product_price; ?>" data-product-src="<?php echo $product_img_src; ?>" data-product-country="<?php echo $product_country; ?>" data-product-enrgy="<?php echo $product_enrgy; ?> ккал." data-product-weight="<?php echo $product_weight; ?>г" data-product-pricest="<?php echo $product_st; ?>">
								<div class="tovar" id="tovar" label>
				
									<div class="radius">

									<ul>
										<li>
										<a class="product__img-link" href="<?php the_permalink(); ?>">
											<img src="<?php echo $product_img_src; ?>" class="text_3" width="120" height="120">
											</a>
										</li>
										<li>
										<a class="product__link" href="<?php the_permalink(); ?>">
                							<p class="name_tovar"> <?php the_title(); ?> </p>
											</a>
            							</li>
            							<li>
                							<p class="name_from_tovar"> <?php echo $product_country; ?></p>
            							</li>        	
 										<li>
 											<ul class="niz_cart_tovar">
 												<li>
                        							<p class="text"><?php echo $product_weight; ?> г</p>
                        							<p class="text">  <?php echo $product_enrgy; ?> ккал</p>
 				    							</li>
 				    							<li>
 				    							<ul>
														<li>
 				    										<p class="price_tovar_st"> <?php echo $product_st; ?> </p>
 				    									</li>
														 <li>
 				    										<p class="price_tovar"> <?php echo $product_price; ?> р.</p>
 				    									</li>
													</ul>
 				    							</li>
 											</ul>
            							</li>
        							</ul>         
        							       
		 							</div>
		 							<button  class="bubbly-button bubbly-button-1 js-btn-add-to-cart">
 											<h2 class="btn product__btn bubbly-button-1 js-btn-add-to-cart">добавить</h2>
 										</button>
 									</div>
 								</div>
</li>