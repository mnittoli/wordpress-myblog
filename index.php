<?php get_header(); ?>
<?php if (have_posts()) {?>
  <?php while (have_posts()) {?>
  <?php the_post();?>
 <?php } ?>
<?php } ?>
          <nav role="navigation" class="site-navigation main-navigation"></nav><!-- .site-navigation .main-navigation -->
     </header><!-- #masthead .site-header -->
     <div id="main" class="site-main">
          <div id="primary" class="content-area">
               <div id="content" class="site-content">
                <?php the_title('<h3>','</h3>');?>
                <?php the_content();?>
               </div><link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro' rel='stylesheet' type='text/css'>


<?php
<?php if ( have_posts() ) { ?>
  <?php while ( have_posts() ) { ?>
    <?php the_post(); ?>
    <?php the_title('<h3>', '</h3>'); ?>
    <?php the_content(); ?>
    <?php the_category(); ?>
    <?php echo'<h3>'; the_time(); echo'</h3>'; ?>
  <?php } ?>
<?php } ?>
?>


          <!-- #primary .content-area -->
          
     <!-- #main .site-main -->
     
</div> <!-- #page .hfeed .site -->
</body>
<?php get_sidebar(); ?>
<?php } ?>
<?php } ?>
<?php get_footer(); ?>
</html>