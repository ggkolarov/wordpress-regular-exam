<?php get_header(); ?>

<?php the_archive_title(); ?>

<div class="date-info"><?php echo the_date(); ?></div>

<ul class="properties-listing">
	<?php if ( have_posts() ) : ?>
	
		<?php while( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/post', 'item' ); ?>

		<?php endwhile; ?>

		<?php posts_nav_link(); ?>

		<?php else : ?>

		<?php _e( 'Not found posts', 'softuni' ); ?>
		
	<?php endif; ?>
</ul>		

<?php get_footer(); ?>