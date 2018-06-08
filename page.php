<?php get_header(); ?>
<div class="container blue-earl-events">
	<div class="row">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<header>
			<div class="col">
				<h1 class="text-white mb-5 text-uppercase"><?php the_title(); ?></h1>
			</div>
		</header>
	</div>
	<div class="row mt-5">
		<div class="col-md-12 mb-4">
			<main>
				<?php the_content(); ?>
				<br />
				<?php the_tags('<span class="badge badge-primary">Related:</span> ' , ', ', ''); ?>
			</main>
			<br />
		</div>
	</div>
	<?php endwhile; else : ?>
		<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
</div>
<?php get_footer(); ?>
