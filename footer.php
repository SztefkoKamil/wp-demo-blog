  
  
  <footer style="border-top:1px solid #ddd;" class="mt-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <?php 
            if(is_active_sidebar('footer-sidebar')) {
              dynamic_sidebar('footer-sidebar');
            } 
          ?>
          <p class="copyright text-muted"><?php _e('Copyright', 'Webkas Demo Blog Theme'); ?> &copy; Kamil Sztefko <?php echo date('Y'); ?></p>
        </div>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>

</html>