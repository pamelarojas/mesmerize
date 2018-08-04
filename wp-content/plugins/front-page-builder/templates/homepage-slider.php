<?php
$options		 = fpb_get_option( 'front_page_builder_options' );
$repeater_value	 = $options[ 'repeater_slider' ];
?>

<div class="<?php echo esc_attr( $options[ 'slider_layout' ] ) ?>">
	<div class="flexslider-container">
		<div class="homepage-slider fpb-flexslider" data-start="<?php echo esc_attr( $options[ 'slider_start' ] ); ?>" data-animation="<?php echo esc_attr( $options[ 'slider_animation' ] ); ?>" data-interval="<?php echo absint( $options[ 'slider_interval' ] ); ?>">
			<ul class="slides">
				<?php if ( !empty( $repeater_value ) ) : ?>
					<?php foreach ( $repeater_value as $row ) : ?>
						<?php if ( isset( $row[ 'home_slider_image' ] ) && !empty( $row[ 'home_slider_image' ] ) ) { ?>
							<?php $image_id = wp_get_attachment_url( $row[ 'home_slider_image' ] ); ?>                                                  
							<li class="slider-item-id-<?php echo absint( $post->ID ); ?>" style="background-image: url(<?php
							if ( $image_id ) {
								echo esc_url( $image_id );
							} else {
								echo esc_url( $row[ 'home_slider_image' ] );
							}
							?>);" >

								<div class="flexslider-inner-container">
									<div class="flexslider-inner text-center <?php echo esc_attr( $row[ 'home_slider_position' ] ); ?>">
										<div class="flexslider-inner-block">
											<?php if ( isset( $row[ 'home_slider_title' ] ) && !empty( $row[ 'home_slider_title' ] ) ) : ?>
												<h2 class="flexslider-title">
													<?php echo esc_html( $row[ 'home_slider_title' ] ); ?>
												</h2>
											<?php endif; ?>
											<?php if ( isset( $row[ 'home_slider_desc' ] ) && !empty( $row[ 'home_slider_desc' ] ) ) : ?>
												<p class="flexslider-desc hidden-xs">
													<?php echo esc_html( $row[ 'home_slider_desc' ] ); ?>
												</p>
											<?php endif; ?>
											<?php if ( isset( $row[ 'home_slider_url' ] ) && !empty( $row[ 'home_slider_url' ] ) ) : ?>
												<a class="btn btn-default btn-sm fpb-button" href="<?php echo esc_url( $row[ 'home_slider_url' ] ); ?>">
													<?php echo esc_html( $row[ 'home_slider_button_text' ] ); ?>
												</a>
											<?php endif; ?>
										</div>
									</div>
								</div>	
							</li>	
							<?php
						}
					endforeach;
				endif;
				?>		
			</ul>
		</div>
	</div>
</div>

