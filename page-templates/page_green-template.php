<?php /* Template Name: Green Template */ ?>
<?php get_header(); ?>
<div id="main" class="site-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<div id="content" class="site-content article-wrapper">
				<h1 class="green-heading"><?php the_title(); ?></h1>
				    <?php the_content(); ?>
				    <?php previous_post_link(); ?>
				    <?php next_post_link(); ?>
				    <?php get_search_form( $echo ); ?>
				<?php endwhile; else: ?>
				    <?php _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); ?>
				<?php endif; ?>

			</div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>