
<?php
get_header();

global $wp_query;
$total_results = $wp_query->found_posts;
?>

<div class="container mt-5 pt-5">
<div class="row mb-4">
  <div class="col-lg-8 col-md-10 mx-auto">
    <h1 class="text-center"><?php _e('Search results', 'Webkas Demo Blog Theme'); ?></h1>
    <p class="text-center"><?php echo $total_results; _e(' posts found', 'Webkas Demo Blog Theme'); ?></p>
  </div>
</div>

<?php if ( $wp_query->have_posts()) : while ( $wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto border-bottom border-gray">
    <h4><?php the_title(); ?></h4>
    <p><?php the_excerpt(); ?></p>
  </div>
</div>

<?php
endwhile;

get_template_part('/template-parts/pagination');

endif;
?>

</div>

<?php get_footer(); ?>