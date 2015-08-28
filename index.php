<?php get_header(); ?>
<?php if (have_posts()) {?>
  <?php while (have_posts()) {?>
  <?php the_post();?>
 
          <nav role="navigation" class="site-navigation main-navigation"></nav><!-- .site-navigation .main-navigation -->
     </header><!-- #masthead .site-header -->
     <div id="main" class="site-main">
          <div id="primary" class="content-area">
               <div id="content" class="site-content">
                <?php the_title('<h3>','</h3>');?>
                <?php the_content();?>
               </div><link href='http://fonts.googleapis.com/css?family=Source+Serif+Pro' rel='stylesheet' type='text/css'>


  <?php } ?>
<?php } ?>



          <!-- #primary .content-area -->
          
     <!-- #main .site-main -->
     
</div> <!-- #page .hfeed .site -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
</body>
</html>