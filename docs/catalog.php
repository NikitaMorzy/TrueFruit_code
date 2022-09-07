<?php
/*
Template Name: Каталог
*/
?>
<?php get_header(); ?>
<main class="first10">
			<div class="catalog container" class="categorii">
				<div class="bokcategor">
					<<?php
           $catalog_nav_items = get_terms([
            'taxonomy' => 'product-categories',
            'parent'  => 0,
           ]);
        ?>    
                        <li>
							<a href="<?php echo get_site_url() . '/products'; ?>" class="menu">
								<img src="<?php echo  get_template_directory_uri(); ?>/assets/img/Все товары.png">
								<p class="bokcategor_2">Все товары</p>
							</a>							
						</li>
          <?php foreach ($catalog_nav_items as $item) : ?>
            <li>
							<a href="<?php echo get_site_url() . '/product-categories/' . $item->slug; ?>" class="menu">
								<img src="<?php echo  get_template_directory_uri(); ?>/assets/img/<?php echo $item->name; ?>.png" width="48" height="48">
								<p class="bokcategor_2"><?php echo $item->name; ?></p>
							</a>							
						</li>
          <?php endforeach; ?>
                    </ul>
				</div>
				
                <?php if ( have_posts() ) : ?>
                        <li>
							<div class="row">
							    <div class="container" class="categorii">
                        				<div class="cot_new2">
                        					<ul class="bokcategor_1">
                        						<li class="menu">						
                        								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/avokad.png" width="48" height="48">
                        								<p class="bokcategor_2">Все товары</p>
                        						</li>
                        						</ul>
                        					
                        					</div>
				                    </div>
									<div class="col-lg-12 from-control-group">
										<input type="text" placeholder="Поиск" id="prodyctt" class="focus-visible-only">
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

				</div>
				  </div>
				  <div class="pop_up" type="hidden">
				<div class="cart js-cart">		
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
				</div>
				</div>
		</main>
        <div style="clear: both;">
			
        </div>
<?php get_footer(); ?>