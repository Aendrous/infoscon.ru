<!DOCTYPE html>
<html lang="ru">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
    <title>ИНФОСВЯЗЬ КОНСАЛТИНГ / лицензии на услуги связи (регистрация, продление, переоформление)</title>
<!-- 	<meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>" />
	<meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>" /> -->
	
	<?php $host = $_SERVER['REQUEST_URI']; ?>

<?php 
	wp_head();
	?>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
<header>
<div id="mens" class="mobile_menu">
<a href="/">
	<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="ИнфоСвязь Консалтинг" class="gohome">
</a>
</div>
		<section class="header">	
			<div class="logo">
				<img src="<?php bloginfo('template_url'); ?>/images/logo_infosvyaz_ru.png" alt="Компания ИнфоСвязь Консалтинг" class="gohome"><br>
				<img src="<?php bloginfo('template_url'); ?>/images/logo-slogan.png" alt="Связисты для связистов" class="gohome" style="margin-top: -5px;">
			</div>
            <nav class="dws-menu">
                <input type="checkbox" name="toggle" id="menu" class="toggleMenu">
                <label for="menu" class="toggleMenu"><i class="fa fa-bars"></i>Меню</label>
                <ul>
                    <li><a href="https://infoscon.ru/index/"><i class="fa fa-home"></i>Главная</i></a></li>
                    <li><a href="https://infoscon.ru/kompaniya/"><i class="fa fa-handshake-o"></i>О нас</a></li>
                    <li><a href="https://infoscon.ru/uslugi/"><i class="fa fa-shopping-cart"></i>Услуги</a>
                        <ul>
                            <li><a href="/uslugi/litsenzii-svyazi/">Лицензии связи</a></li>
                            <li><a href="/uslugi/litsenzii-na-veshhanie/">Лицензии на вещание</a></li>
                            <li><a href="/uslugi/razresheniya-na-chastoty/">Разрешения на частоты</a></li>
                            <li><a href="/uslugi/smi/">Регистрация СМИ</a></li>
                            <li><a href="/prodlenie-litsenzij-svyazi/">Продление и переоформление</a></li>
                        </ul>
                    </li>
                    <li><a href="https://infoscon.ru/price/"><i class="fa fa-ruble"></i>Цены</a></li>
                    <li><a href="https://infoscon.ru/kontakty/"><i class="fa fa-envelope-open"></i>Контакты</a></li>
                </ul>
            </nav>

			<?php wp_nav_menu('menu=top_menu&menu_class=top_menu&container=&'); ?>


                      <a class="order" id="freeCons">Получить спецпредложение</a>
			<div class="contacts">
				<div class="phone">+7 (495) 109-05-95 <sub>(многоканальный)</sub></div>		
				<div class="info">
                                <div class="mailtol"><a href="mailto:info@infoscon.ru">info@infoscon.ru</a></div>
				<!--<div class="num">+7(917)585-80-57</div>-->
				<div class="w"><a style="color: #38a0db;
    font-weight: 500;" href="https://wa.me/79175858057?text=Я%20заинтересован%20в%20услуге%20...%20(укажите услугу)"><img src="<?php bloginfo('template_url'); ?>/images/lol/whatsapp.png" alt="Написать в вотсап">
</a></div>
				<div class="v"><a style="color: #38a0db;
    font-weight: 500;" href="tg://resolve?domain=infoscon"><img src="<?php bloginfo('template_url'); ?>/images/lol/telegram.png" alt="В телеграм">
</a></div>
				<div class="v"><a style="color: #38a0db;
    font-weight: 500;" href="tel:+79175858057" alt="Позвонить">&nbsp+7(917)585-8057</a></div>
				<div class="priemzakazov">Прием заказов круглосуточно</div>
			</div>
			</div>
		</section>
	</header>



<div class="main">


	<?php if (!is_Home() && !is_404() && !is_Page() && !is_category() && !in_category(1)){
		echo '<section class="breadcrumbs">';
		yoast_breadcrumb('<div class="breadcrumbs__nav">','</div>');
		echo '</section>';
	}2
	?>

