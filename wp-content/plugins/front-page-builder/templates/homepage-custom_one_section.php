<?php
$options = fpb_get_option( 'front_page_builder_options' ); 
?>
<div class="section">  
	<div class="<?php echo esc_attr( $options['custom_one_section_layout'] ); ?>">
		<div class="container-heading text-center <?php echo esc_attr( $options['custom_one_section_title_style'] ); ?>">
			<?php if ( $options['custom_one_section_title'] != '' ) : ?>
				<h2 class="section-title">
          <?php echo esc_html( $options['custom_one_section_title'] ); ?>
        </h2>
			<?php endif; ?>
			<?php if ( $options['custom_one_section_desc'] != '' ) : ?>
				<div class="sub-title"><span><?php echo esc_html( $options['custom_one_section_desc'] ); ?></span></div>
			<?php endif; ?>
		</div>
		<div class="custom-section">
			<?php if ( $options['custom_one_page'] != '' ) : ?>
				<?php $the_query = new WP_Query( array( 'post_type' => 'page', 'page_id' => absint( $options['custom_one_page'] ) ) ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="custom-one-content">
							<?php the_content(); ?>
						</div>
					<?php endwhile; ?>    
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p><?php esc_html_e( 'Sorry, no pages matched your criteria.', 'front-page-builder' ); ?></p>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<div class="<?php echo esc_attr( $options['custom_one_section_bottom_border'] ); ?>"></div>
