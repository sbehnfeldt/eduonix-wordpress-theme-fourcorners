<!doctype html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'partials/head' ); ?>

<body>
<?php get_template_part( 'partials/header' ); ?>
<section class="title-section">
	<p class="welcome-text">Welcome To</p>
	<h1>Gallery</h1>
	<p class="sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur consectetur corporis
		enim esse expedita explicabo ipsa ipsam maxime minima, molestiae perferendis provident recusandae, reprehenderit
		rerum similique vel vero voluptate voluptatem.</p>
</section>

<main>
	<section class="gallery">
		<?php
		$query = new WP_Query( [
			'category_name' => 'gallery'
		] );
		while ( $query->have_posts() ): $query->the_post(); ?>
			<div class="large-4 small-12 columns">

				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail( 'full', [ 'class' => 'hvr-grow' ] ); ?>
				</a>
			</div>

		<?php endwhile; ?>
	</section>
	<div class="clearfix"></div>
</main>

<?php get_template_part( 'partials/footer' ); ?>
</body>
</html>
