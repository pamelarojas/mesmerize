<?php
$options		 = fpb_get_option( 'front_page_builder_options' );
$repeater_value	 = $options[ 'repeater_services' ];
?>
<div class="section">  
	<div class="<?php echo esc_attr( $options[ 'services_section_layout' ] ); ?>">
		<div class="container-heading text-center <?php echo esc_attr( $options[ 'services_section_title_style' ] ); ?>">
			<?php if ( $options[ 'services_section_title' ] ) : ?>
				<h2 class="section-title">
					<?php echo esc_html( $options[ 'services_section_title' ] ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( $options[ 'services_section_desc' ] ) : ?>
				<div class="sub-title"><span><?php echo esc_html( $options[ 'services_section_desc' ] ); ?></span></div>
			<?php endif; ?>
		</div>
		<div class="services-container row">
			<?php if ( !empty( $repeater_value ) ) : ?>
				<?php foreach ( $repeater_value as $row ) : ?>
					<div class="services-inner-container <?php echo esc_attr( $options[ 'services_section_row' ] ); ?> <?php echo esc_attr( $options[ 'services_layout' ] ); ?>">
						<?php if ( $row[ 'services_url' ] != '' ) : ?>
							<a class="services-button" href="<?php echo esc_url( $row[ 'services_url' ] ); ?>">
							<?php endif; ?>
							<div class="services-inner-block">
								<?php if ( isset( $row[ 'services_icon' ] ) && !empty( $row[ 'services_icon' ] ) ) : ?>
									<i class="services-icon fa-3x <?php echo esc_html( $row[ 'services_icon' ] ); ?>"></i>
								<?php endif; ?>
								<?php if ( isset( $row[ 'services_title' ] ) && !empty( $row[ 'services_title' ] ) ) : ?>
									<h2 class="services-title">
										<?php echo esc_html( $row[ 'services_title' ] ) ?>
									</h2>
								<?php endif; ?>
								<?php if ( isset( $row[ 'services_desc' ] ) && !empty( $row[ 'services_desc' ] ) ) : ?>
									<div class="services-desc">
										<?php echo esc_html( $row[ 'services_desc' ] ) ?>
									</div>
								<?php endif; ?>
							</div>
							<?php if ( $row[ 'services_url' ] != '' ) : ?>
							</a>
						<?php endif; ?>		
					</div>
					<?php
				endforeach;
			endif;
			?>		
		</div>
	</div>
</div>
<div class="<?php echo esc_attr( $options[ 'services_section_bottom_border' ] ); ?>"></div>
