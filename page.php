<?php get_header(); ?>
<div id="main" class="site-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<div id="content" class="site-content article-wrapper">
			<?php if (in_category('category-blossoms')) {
				<h1><?php the_title(); ?></h1>
				    <?php the_content(); ?>
				    <?php previous_post_link(); ?>
				     <?php next_post_link(); ?>
				    <?php get_search_form( $echo ); ?>
				<?php endwhile; else: ?>
				    <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
				<?php endif; ?>
			<php } ?>	

			</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>