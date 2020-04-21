

<?php 
$title = get_post_custom_values('title')[0];
$subtitle = get_post_custom_values('subtitle')[0];
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <!-- Page Hero -->
  <header class="masthead" 
  <?php if(has_post_thumbnail()) : ?>
  style="background-image: url('<?php the_post_thumbnail_url(); ?>')"
  <?php endif; ?>
  >
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php echo $title ?></h1>
            <span class="subheading"><?php echo $subtitle; ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>
<?php endwhile; endif; ?>
