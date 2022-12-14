<?php get_header(); ?>
<blockquote>
<h1 style="color: rgb(70, 70, 70);font-weight: 400;font-size: 18px;text-align: center;margin-bottom: -15px;font-style: normal;">Помощь и содействие в оформлении лицензий на услуги связи, вещание и регистрация СМИ по всей России с 2005 года</h1>
<div class="fucks">
<div class="onelog"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/infosvaz.png" alt="«Инфосвязь Консалтинг»" style="display: block;width: 50px;margin: 0 auto 10px;">
<span class="prostospan">«Инфосвязь Консалтинг» оформит или продлит для вашей компании любую из 20 видов лицензий связи по всей России «под ключ», а вы спокойно решите другие вопросы.</span></div>
<div class="twolog"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/garantii.png" alt="Гарантируем получение или продление вашей лицензии" style="display: block;width: 50px;margin: 0 auto 10px;">
<span class="prostospan">Гарантируем получение или продление вашей лицензии или вернем деньги в двойном размере – это будет прописано в договоре.</span></div>
<div class="freelog"><img src="https://infoscon.ru/wp-content/themes/infoscon/images/lol/konsult.png" alt="Закажите бесплатную консультацию" style="display: block;width: 50px;margin: 0 auto 10px;">
<span class="prostospan">Закажите бесплатную консультацию по оформлению лицензии или регистрации СМИ для Вашей компании и получите скидку 1000 рублей!</span></div>
</div>
</blockquote>
					<?php
					 require('header_services.php'); 
					 
			?>
		<section class="about">
			<?php
				$post_id = 607;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $queried_post->post_content;
			?>

		</section>
<section class="bistr">
<div class="container">
<div class="grad"><h2 class="sh">Подготовим документы на получение лицензий быстрее!</h2>
<div id="bottomForm" class="order">Узнать подробнее</div>
</div>
</div>
</section>
<div class="babs">
<img src="https://infoscon.ru/wp-content/uploads/2017/02/WOMAN-THUMBS-UP1.jpeg" style="width: 300px;text-align: center;" alt="баба">
</div>
			<section class="about">
<?php include('steps.php');?>

			<?php
				$post_id = 51;
				$queried_post = get_post($post_id);
				$title = $queried_post->post_title;
				echo $queried_post->post_content;
			?>
	

			
		</section>
	
		<section class="newsart">
			<section>
<!-- 				<h1>Новости и статьи</h1> -->
				<ul class="service_catalog newsart">
					<?php query_posts('cat=1&posts_per_page=3'); ?>
					<?php while (have_posts()) : the_post(); ?>
						<? require('info_loop.php') ?>	
					<?php endwhile; ?>
					<?php wp_reset_query();?>

				</ul>
					<div style="width: 100%;text-align: right; font-size: 120%; margin: 7px; font-weight: 500;"><a href="/informrazdel/">Все статьи</a></div>
			</section>
		</section>


<?php get_footer(); ?>