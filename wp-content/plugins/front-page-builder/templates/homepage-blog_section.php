<?php
$options = fpb_get_option( 'front_page_builder_options' ); 
?>
<div class="section">
	<div class="<?php echo esc_attr( $options['blog_section_layout'] ); ?>">
		<div class="container-heading text-center <?php echo esc_attr( $options['blog_section_title_style'] ); ?>">
			<?php if ( $options[ 'blog_section_title'] ) : ?>
				<h2 class="section-title">
          <?php echo esc_html( $options['blog_section_title'] ); ?>
        </h2>
			<?php endif; ?>
			<?php if ( $options['blog_section_desc'] ) : ?>
				<div class="sub-title"><span><?php echo esc_html( $options['blog_section_desc'] ); ?></span></div>
			<?php endif; ?>
		</div>
		<div class="blog-home row no-gutter">
			<?php
			$query_args	 = array(
				'post_type'		 => 'post',
				'posts_per_page' => absint( $options['blog_section_number_posts'] ),
				'ignore_sticky_posts' => 1,
			);
			$the_query	 = new WP_Query( $query_args );
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
          $templates = new FPB_Template_Loader; 
					$templates->get_template_part( 'blog/blog', $options['blog_section_style'] );
				endwhile;
				wp_reset_postdata();
			else :
				?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'front-page-builder' ); ?></p>
			<?php endif; ?>
			<?php if ( $options['blog_section_button'] && get_option( 'page_for_posts' ) != '0' ) : ?>
				<p class="all-posts-button col-md-12 text-center">                                      
					<a class="btn btn-default btn-md fpb-button" href="<?php echo get_post_type_archive_link( 'post' ); ?>">
						<?php echo esc_html( $options['blog_section_button_text'] ); ?>
					</a>                                  
				</p> 
			<?php endif; ?>	
		</div>
	</div>
</div>
<div class="<?php echo esc_attr( $options['blog_section_bottom_border'] ); ?>"></div>
