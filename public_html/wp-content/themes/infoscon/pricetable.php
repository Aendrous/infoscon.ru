<a name="pricetable"></a>
<h2 class="priceheader" style="color: rgba(70, 70, 70, 1);">Виды услуг, <br>
<u>стоимость</u> и <u>сроки</u> оформления лицензий:</h2>


<!-- 	<h2>Таблица услуг</h2> -->
	<table class="price" cellpadding="0" cellspacing="0" border="0" bgcolor="#FFFFFF">
		<thead class="price_thead">
			<tr>
				<th colspan="2">Применение</th>
				<th>Стоимость</th>
				<th>Сроки</th>
			</tr>
		</thead>

	<? 
	$categories_in_table=get_categories('orderby=id&order=ASC');
	$num = 0;
	
	foreach($categories_in_table as $categoryTab) {

	?>

		<? if ($categoryTab->term_id!=1){ ?>

	<?
	echo '
			<thead>
				<tr>
					<td class="price-header">&nbsp;</td>
					<th colspan="3" class="price-header">
						<h2 class="h">' .$categoryTab->name. '</h2>
					</th>
				</tr>
			</thead>'
	?>

			<?	$IDcatTab = 'cat='.$categoryTab->term_id.'&showposts=-1&orderby=date';
				query_posts($IDcatTab); 
				while (have_posts()) : the_post(); ?>

				<tbody class="price-section-in">

					<tr class="price-section-open">
						<td class="price-section-in-num"></td>
						<td class="price-section-in-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
						<td class="price-section-in-price"><? echo (get_post_meta($post->ID, 'price', true)) ? 'от <span>'.get_post_meta($post->ID, 'price', true).'</span> руб.' : "-" ?></td>
						<td class="price-section-in-days"><? echo (get_post_meta($post->ID, 'days', true)) ? '<span>'.get_post_meta($post->ID, 'days', true).'</span> дней' : "-"; ?></td>
					</tr>
					<tr class="price-section-in-excerpt">
						<td>&nbsp;</td>
						<td colspan="4" class="price-section-excerpt">
							<?php 
								the_excerpt();
								?>
								<a class="price-section-more" href="<?the_permalink();?>">
								<svg xmlns="https://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
								  <path d="M0 0h24v24H0z" fill="none"/>
								  <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
								</svg>
								Подробнее</a>
								<?
							?>
						</td>
					</tr>

				</tbody>
		
			<?php endwhile; ?>
			<?php wp_reset_query(); ?>

		<? } ?>
<? } ?>


	</table>
<p><strong>Работаем с любой формой и способом оплаты:</strong></p>
<div class="fuck" style="display: block; min-height: 105px;">
<div class="bank"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/chet.png" alt="Банковский счет" style="width: 100px;"><span class="onepate">Банковский счет</span></div>
<div class="karta"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/karta.png" alt="Банковская карта" style="width: 100px;"><span class="onepate">Банковская карта</span></div>
<div class="sberonline"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/sberonline.png" alt="Сбербанк онлайн" style="width: 100px;"><span class="onepate">Сбербанк онлайн</span></div>
<div class="koshelek"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/inet.png" alt="Интернет кошелек" style="width: 100px;"><span class="onepate">Интернет кошелек</span></div>
</div>
	<div class="price-section-hot">
			<div  style="font-size: 160%;">
				<span style="color:red">Внимание!</span><br>
				Получите скидку 10% при заказе двух лицензий! <br>Далее 10% на каждую следующую лицензию: 30% - на заказ трех лицензий, 40% - четырех и т.д.!
			</div>
			<div class="post_order pricetable" style="    width: 400px !important;">Заказать со скидкой</div>
	</div>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>

	<script>
		// price table
		// $(function(){

		// 	$('.price-section-in-excerpt').hide();

		// 	$('.price-section-open').click(function() {
		// 		event.preventDefault();
		// 		$(this).parent('.price-section-in').children('.price-section-in-excerpt').toggle();
		// 		$(this).parent('.price-section-in').toggleClass('active');
				
		// 	});

		// });
	</script>
