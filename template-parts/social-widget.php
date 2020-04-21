<?php

class Social_Media extends WP_Widget {
 
	public function __construct() {
        parent::__construct(
					'social_media_footer',
					'Social media',
					array( 'description' => 'Social media anchors for footer sidebar.' )
			);
	}

	public function widget( $args, $instance ) {
        extract( $args );
 
        echo $before_widget;
        if ( !empty( $instance['title'] ) ) {
            echo $before_title . $instance['title'] . $after_title;
				}
        if ( !empty( $instance['content'] ) ) {
					echo '<div class="footer-widget__content">' . $instance['content'] . '</div>';
				}
				echo $after_widget;
				?>

					<ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="<?php echo $instance['twitter'] ?>" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $instance['facebook'] ?>" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $instance['github'] ?>" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
					</ul>
					
				<?php
	}

	public function form( $instance ) {
			// outputs the options form in the admin
      if ( isset( $instance[ 'twitter' ] ) ) {
					$twitter = $instance[ 'twitter' ];
			}
			else { $twitter = 'https://twitter.com'; }

			if ( isset( $instance[ 'facebook' ] ) ) {
					$facebook = $instance[ 'facebook' ];
			}
			else { $facebook = 'https://facebook.com'; }
			
			if ( isset( $instance[ 'github' ] ) ) {
					$github = $instance[ 'github' ];
			}
			else { $github = 'https://github.com'; }
			?>

			<!-- twitter link -->
			<p>
					<label for="<?php echo $this->get_field_name( 'twitter' ); ?>">
						<?php _e( 'Twitter link:', 'Webkas Demo Blog Theme' ); ?>
					</label>
					<input class="widefat" 
					id="<?php echo $this->get_field_id( 'twitter' ); ?>" 
					name="<?php echo $this->get_field_name( 'twitter' ); ?>" 
					type="text" 
					value="<?php echo esc_attr( $twitter ); ?>" />
			 </p>

			 <!-- facebook link -->
			<p>
					<label for="<?php echo $this->get_field_name( 'facebook' ); ?>">
						<?php _e( 'Facebook link:', 'Webkas Demo Blog Theme' ); ?>
					</label>
					<input class="widefat" 
					id="<?php echo $this->get_field_id( 'facebook' ); ?>" 
					name="<?php echo $this->get_field_name( 'facebook' ); ?>" 
					type="text" 
					value="<?php echo esc_attr( $facebook ); ?>" />
			 </p>
			 
			 <!-- github link -->
			<p>
					<label for="<?php echo $this->get_field_name( 'github' ); ?>">
						<?php _e( 'GitHub link:', 'Webkas Demo Blog Theme' ); ?>
					</label>
					<input class="widefat" 
					id="<?php echo $this->get_field_id( 'github' ); ?>" 
					name="<?php echo $this->get_field_name( 'github' ); ?>" 
					type="text" 
					value="<?php echo esc_attr( $github ); ?>" />
			 </p>
	<?php
	}
	
}

function register_my_widget() {
	register_widget('Social_Media');
}
add_action('widgets_init', 'register_my_widget');
