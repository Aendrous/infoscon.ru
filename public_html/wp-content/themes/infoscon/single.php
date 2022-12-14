<?php get_header(); ?>






<section class="post">								
	<div class="container">

	<?php if (have_posts()): while (have_posts()): the_post(); ?>

		<h1><?php the_title(); ?></h1>

		<div class="post_content">
			<?php the_content(); ?>
<div class="post_order pricetable">Узнать подробнее</div>
		</div>


	<?php endwhile; endif; ?>

	<div class="single_footer">

		<!--<?php include('steps.php');?> -->
		<?php include('features.php');?>
<!-- <div class="post_order pricetable">Рассчитать стоимость лицензии</div> -->
<?php 

		next_post_link('%link', 'Так же в этом разделе: %title', TRUE);
?>
	</div>
</section>





<?php get_footer(); ?>