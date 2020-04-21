<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

  <title><?php wp_title(''); ?></title>

</head>

<body <?php body_class(); ?> >

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <?php if ( function_exists( 'the_custom_logo' ) && null !== the_custom_logo() ) : ?>
        <div class="navbar-brand">
          <?php the_custom_logo(); ?>
        </div>
      <?php else : ?>
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">LOGO</a>
      <?php endif; ?>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <?php  wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'nav-menu collapse navbar-collapse',
            'menu_id' => 'navbarResponsive'
          )
        ); ?>

    </div>
  </nav>