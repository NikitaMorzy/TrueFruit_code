<?php get_header(); ?>
<main class="first10">
			<div class="catalog container" class="categorii">
			    <center>
			        <a href="<?php echo get_home_url(); ?>" >
		                    <button type="submit"class="back">
	                            	Назад
                    	    </button>
                	  </a>
                </center>
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
                <?php if ( have_posts() ) : ?>
    <div class="catalog">
	<ul>
    				
    					<li>
    						
							
						
						</li>
    				
    				
						<li>
							<div class="row">
							    	<div class="cot_new2">
        								<ul class="bokcategor_1">
        									<li class="menu">
        									    <img src="<?php echo  get_template_directory_uri(); ?>/assets/img/Все товары.svg" width="40" height="40">						
        										<p class="bokcategor_22">Все товары</p>
        									</li>
        								</ul>
							        </div>
									<div class="col-lg-12 from-control-group">
										<input type="text" placeholder="Поиск"id="prodyctt" class="focus-visible-only">
									</div>
								
										<div class="col-lg-12">
											<ul class="prodyctt">
												<li>
													<ul class="prodycttt prodyctt">
													<?php while ( have_posts() ) : the_post(); ?>
													<?php echo get_template_part('product-content'); ?>
													<?php endwhile; ?>
													<?php endif; ?>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
				    	</li>			
					</ul>	
</div>




				
			
				<div class="pop_up" type="hidden">
				<div class="cart js-cart js-cart-wrapper">		
						<span class="itogs_1 js-cart-total-price"></span>
				</div>
				<li class="Cost_dost">
							<div class="form__btn_1">
								<ul class="form__btn_1">
									<li class="itogs1">
										Введите промокод:
									</li>
									<li class="promo_li">
									<div class="catalin">
									<input name="Промокод" type="text" id="promo" class="input_1 righted form__input" placeholder="AAAA10">
									<button type="button" class="skidka"><span class="skidka">Применить</span></button>
									</div>
									<div class="promo_itog">
									 	<span>Ваш промокод применён!</span>
									</div>
									<div class="pormo_itog_2">
									 	<span>Вы ввели неверный промокод</span>
									</div>
								</li>
								</ul>
							</div>
						</li>
				<span class="itogs_1 js-cart-dost">250</span>
					<span class="itogs_1 js-cart-dost_1">0</span>
					<div id="map"></div>
				</div>
		</main>
        <div style="clear: both;">
			
        </div>
<?php get_footer(); ?>