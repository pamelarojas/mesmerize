<?php
$options = fpb_get_option( 'front_page_builder_options' ); 
?>
<div class="section">
	<div class="<?php echo esc_attr( $options['bg_image_section_layout'] ); ?>">
		<div class="row">
			<div class="bg-image-section col-md-6">
				<div class="bg-section-title col-md-12">
					<?php echo esc_html( $options['bg_image_section_title'] ); ?>
				</div>
				<div class="bg-section-desc col-md-12">
					<?php echo wp_kses_post( $options['bg_image_section_desc'] ); ?>
				</div>
				<?php if ( $options['bg_image_section_button_url'] != '' && $options['bg_image_section_button'] ) : ?>   
					<div class="bg-section-button">
						<a href="<?php echo esc_url( $options['bg_image_section_button_url'] ); ?>" >
							<?php echo esc_html( $options['bg_image_section_button'] ); ?>
						</a>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
