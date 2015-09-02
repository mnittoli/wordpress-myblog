<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url');?>">
<link rel="stylesheet" href="http://basehold.it/30">
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
<script>
  WebFont.load({
    google: {
      families: ['raleway', 'Open Sans']
    }
  });
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="jquery.fittext.js"></script>
<script>
  jQuery("#responsive_headline").fitText();
</script>
</head>
<body>
<div id="page" class="hfeed site">
     <header id="masthead" class="site-header" role="banner">
          <hgroup><h1 id="responsive_headline"><?php bloginfo('description');?></h1></hgroup>