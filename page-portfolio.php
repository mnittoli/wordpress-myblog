<h1>Hello</h1>

<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>

<?php get_header(); ?>
<div id="main" class="site-main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<div id="content" class="site-content article-wrapper">
				<h1><?php the_title(); ?></h1>
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