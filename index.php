<?php get_header(); ?>

     <div id="main" class="site-main">
<?php if (have_posts()) {?>
  <?php while (have_posts()) {?>
  <?php the_post();?>
 
          
          <div id="primary" class="content-area">
               <div id="content" class="site-content article-wrapper">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title('<h3>','</h3>'); ?></a>
                <?php the_excerpt(); ?>
               </div><link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro' rel='stylesheet' type='text/css'>
               <div class="author"><p>This post was written by <?php the_author(); ?></p>
               <?php the_category( $separator, $parents, $post_id ); ?>
               </div>


  <?php } ?>
<?php } ?>

</div>


          <!-- #primary .content-area -->
          
     <!-- #main .site-main -->
     
</div> <!-- #page .hfeed .site -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>