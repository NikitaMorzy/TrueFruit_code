<?php
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>
		<main class="first10">
		<div class="main">
		<section id="about" class="about">
			<center class="container">
				<div class="baida">
					<style>
   							.colortext { color: #217CA3; font-weight: 600;}
   							.colortext1 { color: #FDB233; font-weight: 600;}
  					</style>
				<li class="sochni">
					<span class="colortext">True</span><span class="colortext1">Fruit</span> – самый  <span class="colortext"> сочный </span> выбор тут !
				</li>
				

				</div>
			</center>
		</section>	
		
	<div class="container_firstpage ">
    			<div class="slider">
    			    
                      <div class="slider-list">
                        <div id="overflow">
                            <div class="slider-track">
                              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider1.svg"></div>
                              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider2.svg"></div>
                              <div class="slide"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider3.svg"></div>
                            </div>
                        </div>
                      </div>
                      
                      <div class="slider-arrows">
                        <button type="button" class="prev">&larr;</button>
                        <button type="button" class="next">&rarr;</button>
                      </div>
                      
                </div>
                </div>
    		
    			
		<div class="container_firstpage ">
			<div class="pop">
			<ul class="navcnop">
					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/novinki/" class="button_1">
							<h4 class="textic" >Новинки</h4>
          		        	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn1.svg" alt="grey" class="righ" > 
						</a>
					</li>

					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/nabori/"class="button_2">
						
							<h4 class="textic" >Наборы</h4>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn2.svg" alt="grey" class="righ" > 
						</a>
					</li>

			</ul>
			
					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/akcii/"class="button_3">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn3(1).svg" alt="grey" class="righ" > 
							<h4 class="textic-1">Акции</h4>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn3(2).svg" alt="grey" class="righ" >  
						</a>
					</li>
					
		
					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/vse-tovary/"class="button_4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn44(1).svg" alt="grey" class="left" > 
							<h4 class="textic-1">Все товары</h4>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn444(2).svg" alt="grey" class="righted_4" > 
						</a>
					</li>
					
				<ul class="navcnop">

					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/zelen/" class="button_5">
							<h4 class="textic" >Зелень</h4>
          		
          			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn5.svg" alt="grey" class="righ" > 
						</a>
					</li>

					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/klassicheskie/" class="button_6">
							<h4 class="textic" >Фрукты</h4>
          		
          					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn6.svg" alt="grey" class="righ" > 
						</a>
					</li>					
				</ul>
				
				<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/ovoshhi/"class="button_4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn7(1).svg" alt="grey" class="left1" > 
							<h4 class="textic-1">Овощи</h4>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn7(2).svg" alt="grey" class="righted4" > 
						</a>
					</li>
				
				
				<ul class="navcnop">

					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/sezonnye/" class="button_7">
							<h4 class="textic" >Сезонные</h4>
          				
          					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn8.svg" alt="grey" class="righ" >
						</a>
					</li>

					<li class="cnop">
					<div>	
						<a href="http://true-fruit.ru/product-categories/jekzotika/" class="button_8">
							<h4 class="textic" >Экзотика</h4>
          						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn9.svg" class="righ">
						</a>
					</div>	
					</li>

				</ul>
				
					<ul class="navcnop">

					<li class="cnop">
						<a href="http://true-fruit.ru/product-categories/citrusy/" class="button_9">
							<h4 class="textic" >Цитрусы</h4>
          				
          					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn10.svg" alt="grey" class="righ" >
						</a>
					</li>

					<li class="cnop">
					<div>	
						<a href="http://true-fruit.ru/product-categories/jagody/" class="button_10">
							<h4 class="textic" >Ягоды</h4>
          						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/btn11.svg" class="righ">
						</a>
					</div>	
					</li>

				</ul>
			</div>
	    </div>
		<div class="pop_up" type="hidden">
				<div class="cart js-cart">		
						
				</div>
				</div>
		</main>		
<?php get_footer(); ?>
