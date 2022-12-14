<?php get_header(); ?>


<!-- Услуги -->


<section class="page-services"> 
	<div class="container">

		<div class="description">
			<?php 
				if (have_posts()): while (have_posts()): the_post(); 
				the_content();
				endwhile; endif; 
				wp_reset_query(); 
			?>
		</div>
<div class="order" id="bottomForm" style="width: 625px !important;">Получить бесплатную консультацию</div>


		<div class="uslugi">
			<h2>Какую лицензию связи Вам необходимо получить?</h2>

			<?php
				$categories=get_categories('orderby=id&order=ASC');
				foreach($categories as $category) {
					if ($category->term_id!=1){ 
						echo '<ul>';
						echo '<h2><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "Все услуги в категории %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </h2> ';

if($category->description) echo '<div class="catdescription"><span class="desct">'. $category->description .' </span> </div>';					

						$IDcat = 'cat='.$category->term_id;
						 query_posts($IDcat); 
								while (have_posts()) : the_post(); ?>
								<!-- <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> -->                                 
								<?php endwhile; 
						echo '</ul>';
					 }
						wp_reset_query(); 
					}
			?>	
		</div>

	</div>
<h2 style="text-align: center;font-size: 32px !important;">Срочное оформление документов</h2>
<div class="order" id="bottomForm">Заказать</div>

</section> <!-- / PAGE -->


<?php get_footer(); ?>