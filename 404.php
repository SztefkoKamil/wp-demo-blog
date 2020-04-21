<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="robots" content="noindex, nofollow">
  <?php wp_head(); ?>
  <title><?php wp_title(''); ?></title>
</head>
<body <?php body_class(); ?> >



  <div class="container" style="padding:100px 0;">

    <h1 class="text-center mb-5"><?php _e('This page not exists.', 'Webkas Demo Blog Theme'); ?></h1>
    <div class="d-flex justify-content-center">
      <a class="btn btn-info" href="<?php echo get_bloginfo('url'); ?>"><?php _e('go back to Home page', 'Webkas Demo Blog Theme'); ?></a>
    </div>

  </div>



  <?php wp_footer(); ?>

</body>
</html>
