<?php get_header(); ?>
<?php get_template_part('/template-parts/hero'); ?>

<?php
$temp_wp_query = $wp_query;
$paged = ( $page ) ? $page : 1;
$args = array( 'post_type' => 'post', 'paged' => $paged );
$wp_query = new WP_Query( $args );  
?>

<div class="container">

<?php
// The second loop. 
if ( $wp_query->have_posts()) : while ( $wp_query->have_posts()) : $wp_query->the_post(); 
?>

  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto border-bottom border-gray">

      <div class="post-preview">
        <a href="<?php the_permalink(); ?>">
          <h2 class="post-title">
            <?php the_title(); ?>
          </h2>
        </a>
        <?php the_excerpt(); ?>
        <p class="post-meta"><?php _e('Posted by', 'Webkas Demo Blog Theme');?> <strong><?php the_author(); ?></strong> - <?php the_date(); ?></p>
      </div>
      </div>
  </div>

  <?php endwhile; ?>
  
  <?php get_template_part('/template-parts/pagination'); ?>

  <?php
  $wp_query = $temp_wp_query;
  else :
  ?>

  <div><?php _e('No posts found', 'Webkas Demo Blog Theme'); ?></div>

  <?php endif; ?>

  <div class="row pt-5">
    <div class="col-lg-8 col-md-10 mx-auto">
    <?php 
      if(is_active_sidebar('blog-bottom-sidebar')) {
        dynamic_sidebar('blog-bottom-sidebar');
      } 
    ?>
    </div>
  </div>
  
</div>

<?php get_footer(); ?>
