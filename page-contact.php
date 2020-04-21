

<?php get_header(); ?>
<?php get_template_part('/template-parts/hero'); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php the_content(); ?>
        <form name="sentMessage" id="contactForm" novalidate class="mt-5">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label><?php _e('Name', 'Webkas Demo Blog Theme'); ?></label>
              <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label><?php _e('Email Address', 'Webkas Demo Blog Theme'); ?></label>
              <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label><?php _e('Phone Number', 'Webkas Demo Blog Theme'); ?></label>
              <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label><?php _e('Message', 'Webkas Demo Blog Theme'); ?></label>
              <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group submit-wrapper">
            <button type="submit" class="btn btn-primary" id="sendMessageButton"><?php _e('Send', 'Webkas Demo Blog Theme'); ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php endwhile; endif; ?>
  
  <?php get_footer(); ?>