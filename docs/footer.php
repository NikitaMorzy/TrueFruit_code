<footer>
			<div class="container">
				<div class="footer_cont">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer_ananas.svg" class="footer_ananas">
             <?php if ($GLOBALS['true_fruit']['whatsup_url']) : ?>
             <a href="<?php echo $GLOBALS['true_fruit']['whatsup_url']; ?>">
             <div class="block">
      							  <i class="hovicon effect-5 sub-a">
      							  		<b class="icon-camera-retro">
      							  			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dzen2.svg" class="icon-whastup">
      							  		</b>
        						  </i>
   				</div>
   				</a>
			
   			 <?php endif; ?>
            <?php if ($GLOBALS['true_fruit']['vk_url']) : ?>
   			<a href="<?php echo $GLOBALS['true_fruit']['vk_url']; ?>">
   			<div class="block">
      							  <i class="hovicon effect-1 sub-a">
      							  		<b class="icon-camera-retro">
      							  			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vk_1.svg" class="icon-vk">
      							  		</b>
        						  </i>
   				</div>
   				</a>
   			<?php endif; ?>
            <?php if ($GLOBALS['true_fruit']['teleg_url']) : ?>
   			<a href="<?php echo $GLOBALS['true_fruit']['teleg_url']; ?>">	
   			<div class="block">
      							  <i class="hovicon effect-3 sub-a">
      							  		<b >
      							  			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram_1.svg" class="icon-telegram">
      							  		</b>
        						  </i>
   				</div>
   				</a>
                <?php endif; ?>
                <?php if ($GLOBALS['true_fruit']['ok_url']) : ?>
   				<a href="<?php echo $GLOBALS['true_fruit']['ok_url']; ?>">
   				<div class="block">
      							  <i class="hovicon effect-4 sub-a">
      							  		<b >
      							  			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/odnoklas.svg" class="icon-odn">
      							  		</b>
        						  </i>
   				</div>
   				</a>
   				<?php endif; ?>
   			</div>
   			<div class="container" class="polit">
					<div class="polit">
						<a href="http://true-fruit.ru/privacy-policy/" class="polit_1"><h2>Политика конфиденциальности</h2></a>
					</div>
				</div>
   			</div>
   			</div>
		</footer>	
		<div class="pop_up popup-menu">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_up_body">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/men.svg" alt="man" class="pop_man">
				
					<a href="#">
						<button class="pop_button">
							<h1>
								Войти
							</h1>
						</button>
					</a>
					<div class="pop_up_close" id="pop_up_close">&#10006</div>
				</div>
			</div>
		</div>

		<div class="pop_up popup-thanks">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_up_body">
						<h2 class="page-title popup__title">Успешно отправлено</h2>
        				<p class="popup__subtitle">Мы уже начали собирать ваш заказ</p>
					<div class="pop_up_close" id="pop_up_close">&#10006</div>
				</div>
			</div>
		</div>
		<div class="pop_up popup-error">
			<div class="pop_up_container">
				<div class="pop_up_body" id="pop_up_body">
						<h2 class="page-title popup__title">Произошла ошибка</h2>
					<div class="pop_up_close" id="pop_up_close">&#10006</div>
				</div>
			</div>
		</div>
		
		
		
		<div class="pop_up_menu menu2">
			<div class="pop_up_container_menu">
				<div class="pop_up_body_menu">		
				<ul class="pop_up_text_ul_menu">
					<li class="pop_up_close_menu" id="pop_up_close_menu">
						<div class="pop_up_close_menu_1 pop_up_close_menu">&#5176;</div>		
					</li>
					<li class="container_cnop">
						<div>
							
						<ul>
						<li>
							<a href="http://true-fruit.ru/products/" class="pop_up_text_menu change-text">
								Каталог
							</a>
						</li>

						<li>
							<a href="http://true-fruit.ru/dostavka/" class="pop_up_text_menu change-text">
								Доставка
							</a>
						</li>

						<li>
							<a href="http://true-fruit.ru/o-nas/" class="pop_up_text_menu change-text">
								О нас
							</a>
						</li>

						<li>
							<a href="http://true-fruit.ru/biznes/" class="pop_up_text_menu change-text">
								Бизнес
							</a>
						</li>
						</ul>
						</div>
					</li>
				</ul>
				</div>
			</div>
		</div>
		

		<?php wp_footer(); ?>
</body>
</html>