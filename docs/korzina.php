<?php
/*
Template Name: Корзина
*/
?>
<?php get_header(); ?>
<main class="first10">
    <section id="about" class="about">
			<center class="container">
					<div class="baida">
							<li class="abot_us">
								Ваша корзина : 
								<hr class="liniya">
							</li>
							<li class="cart__empty js-cart-wrapper">
								<span class="cart_text_empety">Корзина пуста </span>
								<hr class="liniya">
							</li>
					</div>
			</center>
		</section>
		<div class="container">
		<form  class="form-send" name="TinkoffPayForm"> 
			<div class="cart">
				<div class="cart js-cart">	
	



	 
  



</div>


			<div class="contkorz">
					<div class="text_posl_korz">
						
						
                        <li class="itogs">
						<div class="form__btn_1">
								<ul class="form__btn_11">
									<li class="itogs">
										Стоимость доставки:
									</li>
									<li class="itogs_1 ">
										<ul class="js-cart-dost_con">
										<li>
										<span class="itogs_1 js-cart-dost">250 </span>
										</li>
										<li>
										<span> р.</span>
										</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li class="itogs">
						<div class="form__btn_1">
								<ul class="form__btn_11">
									<li class="itogs">
										Итого :
									</li>
									<li class="itogs_1 ">
										<span class="itogs_1 js-cart-total-price"></span>
										<span>р. + доставка</span>
									</li>
								</ul>
							</div>
						</li>
					</div>

			
					
					<div class="pole_form">
					    <input class="tinkoffPayRow" type="hidden" name="terminalkey" value="1651923435755">
					    <input class="tinkoffPayRow" type="hidden" name="frame" value="false">
					     <input class="tinkoffPayRow" type="hidden" name="language" value="ru">
					     <input class="tinkoffPayRow js-cart-total-price-input" type="hidden" placeholder="Сумма заказа" name="amount">
						<li class="textic_form">Вашe имя :</li>
						<input type="text" class="tinkoffPayRow input_1 righted form__input" name="Имя" required="" placeholder="Фруктов Фрукт Фруктович">
					</div>
					<div class="pole_form">
						<li class="textic_form">Ваш телефон :</li>
						<input type="number" class="tinkoffPayRow input_1 righted" name="Телефон" required="" placeholder="+79819816666">
					</div>
					<div class="pole_form">
						<li class="textic_form">Ваша почта :</li>
						<input type="text" class="tinkoffPayRow input_1 righted" name="Email" placeholder="fruit@mail.ru">
					</div>
					<div class="pole_form">
						<li class="textic_form">Адрес доставки :</li>
						<div class="Searchbutton">
						    <input type="text" id="suggest" class="tinkoffPayRow input_1 righted" name="Addres" required=""  placeholder="Улица Ананасова, дом 5">
						    <button type="button" id="yakarta" class="yakarta1">Применить</button>
						</div>
					</div>
                   
					<div class="pole_form_1">
						<input type="number" name="Парадная"  class="input_2 " placeholder="Парадная">
				
						<input type="number" class="input_2 " name="Квартира"  placeholder="Квартира">
							
						<input type="number" class="input_3 righted_297"  name="Этаж" placeholder="Этаж">
					</div>
					
					
					<div class="pole_form">
						<li class="textic_form">Дата доставки :</li>
						<input type="date" name="calendar" value="2022-07-01"max="2026-11-29" min="2022-07-3">
					</div>


				<div class="oplata_box">
					<p class="textic_form">Оплата :</p>
					<div class="form_radio_btn">
					    
					    <input id="radio-3" type="radio" class="oplata_3 righted" name="Оплата" value="Онлайн">
						<label for="radio-3">Онлайн</label>

						<input id="radio-1" type="radio" class="oplata_1 righted_2" name="Оплата" value="Наличные" checked>
						<label for="radio-1" class="radio-223">Наличные</label>
			
						<input id="radio-2" type="radio" class="oplata_2 righted" name="Оплата" value="Картой курьеру">
						<label for="radio-2">Картой курьеру</label>
					</div>
				</div>	
					<div class="pole_form">
						<li class="textic_form">Комментарий :</li>
						<input type="text" name="Комментарии"  class="input_4 righted" placeholder="">
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
					<div class="checkboxic">	
					<input type="checkbox"name="Бесконтактная доставка" checked class="checxooc"> <label class="chectest">Бесконтактная доставка </label>
			    	</div>
				
					<div class="form__btn_2">
							<button class="button32 button32_1" type="submit" id="mysubbut">Заказать</button>
							<input class="tinkoffPayRow  button32_2" type="submit" value="Заказать"></input>
					</div>
					
						<ul class="stoimost">
			<li class="Besplatna">
			Бесплатная доставка от :
			</li>
		</ul>

		<div class="polosa">
	    	<hr align="center" width: 293px size="1" color="#E29930" >
		</div>

	<div class="dostcolors">
		<ul class="color_dost">
			<div class="korobka-11">
			</div>	
			<li class="cenis">
				От : 1 500 рублей
			</li>
		</ul>

		<ul class="color_dost">
			<div class="korobka-22">
			</div>
			<li class="cenis">
				От : 2 000 рублей
			</li>
		</ul>

		<ul class="color_dost">
			<div class="korobka-33">
			</div>
			<li class="cenis">
				От : 2 000 рублей
			</li>
		</ul>

		<ul class="color_dost">
			<div class="korobka-44">
			</div>
			<li class="cenis">
				От : 3 000 рублей
			</li>
		</ul>

		<ul class="color_dost">
			<div class="korobka-55">
			</div>
			<li class="cenis">
				От : 3 000 рублей
			</li>
		</ul>
		
		<ul class="color_dost_last">
			<div class="korobka-66">
			</div>
			<li class="cenis">
				От : 3 000 рублей
			</li>
		</ul>
		
	</div>
    	<div class="polosa">
	    	<hr align="center" width: 293px size="1" color="#E29930" >
		</div>
	<li class="denvd1">
          Доставка день в день при условии заказа до 12 : 00
        </li>
			<div class="map2">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa8ff227ad64afcda4cafd6814734a455dc03aa0f0951ca501dea9e8a602acfc5&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
			</div>
			
			
			</form>
            <div id="map" class="mapka js-product"></div>

		</div>
		</main>
<?php get_footer(); ?>