<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body>
<?php get_template_part( 'partials/header' ); ?>
<main>
	<?php $count = 0; ?>
	<?php $featured_query = new WP_Query( [
		'category_name' => 'featured'
	] ); ?>

	<?php while ( $featured_query->have_posts() ) :$featured_query->the_post(); ?>
		<?php
		$count ++;
		$float = ( $count % 2 != 0 ) ? 'no-float' : 'float-right';
		?>
		<article class="post">
			<div class="post-desc <?php echo $float; ?>">
				<span><?php the_time( 'F j, Y g:i a' ); ?></span>
				<h3><?php the_title(); ?></h3>
				<?php the_excerpt(); ?>
				<h3><a href="<?php the_permalink(); ?>" class="read-btn read-more-btn hvr-bounce-out">Read More</a></h3>
			</div>
			<div class="post-img">
				<?php the_post_thumbnail( 'home-thumb' ); ?>
			</div>
		</article>
	<?php endwhile; ?>

	<div class="clearfix"></div>
</main>

<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
