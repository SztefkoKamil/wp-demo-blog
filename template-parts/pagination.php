
<?php 
$ppp = $wp_query->query_vars['posts_per_page'];
$found = $wp_query->found_posts;
if($found > $ppp): 
?>

<div class="row">
  <div class="col-lg-8 col-md-10 mx-auto border-bottom border-gray">
    <?php the_posts_pagination(); ?>
  </div>
</div>

<?php endif; ?>