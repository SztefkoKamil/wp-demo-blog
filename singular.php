
<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

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
            <h1><?php the_title(); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto <?php if( is_single() && comments_open() && !post_password_required() ) { echo 'border-bottom border-gray'; } ?>">
      <?php the_content(); ?>
      </div>
    </div>
  </div>
  
  <?php if(is_single() && comments_open() && !post_password_required()) : ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto mt-4">

        <div class="comments-wrapper section-inner">
          <?php comments_template(); ?>
        </div>

      </div>
    </div>
  </div>

  <?php endif; ?>
  
<?php
endwhile; endif;
get_footer();
?>