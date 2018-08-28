<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Life Honey</title>
    <?php wp_head(); ?>
    <!-- tells WP to print css before site loads -->
  </head>
  <body>

    <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
    <!-- prints nav menu on site; => is PHP syntax -->

  <!--
  Don't have to close
</body> & </html> tags
b/c they'll be closed in footer.php
-->
