
<?php get_header(); ?>
<?php get_template_part('/template-parts/hero'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      <?php the_content(); ?>
      </div>
    </div>
  </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>