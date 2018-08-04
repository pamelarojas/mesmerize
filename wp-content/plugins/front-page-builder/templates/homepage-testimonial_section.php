<?php
$options = fpb_get_option( 'front_page_builder_options' ); 
$repeater_value = $options['repeater_testimonial'];
?>
<div class="section">  
	<div class="<?php echo esc_attr( $options['testimonial_section_layout'] ); ?>">
		<div class="container-heading text-center <?php echo esc_attr( $options['testimonial_section_title_style'] ); ?>">
			<?php if ( $options['testimonial_section_title'] != '' ) : ?>
				<h2 class="section-title">
					<?php echo esc_html( $options['testimonial_section_title'] ); ?>
				</h2>
			<?php endif; ?>
			<?php if ( $options['testimonial_section_desc'] != '' ) : ?>
				<div class="sub-title"><span><?php echo esc_html( $options['testimonial_section_desc'] ); ?></span></div>
			<?php endif; ?>
		</div>
		<?php
		if ( !empty( $repeater_value ) ) : 
			$autostart = $options['testimonial_autostart'];
			if ( $autostart == 'true' ) {
				$interval = $options['testimonial_interval'];
			} else {
				$interval = 'false';
			}
			?>
			<div class="row">
				<div class="col-md-12" data-wow-delay="0.2s">                        
					<div class="carousel slide" data-ride="carousel" id="quote-carousel" data-interval="<?php echo $interval; ?>">                            
						<!-- Bottom Carousel Indicators -->                            
						<ol class="carousel-indicators">                                
							<?php
							$i = 0;
							foreach ( $repeater_value as $row ) :
								?>                                                                    
								<li data-target="#quote-carousel" data-slide-to="<?php echo $i; ?>" class="<?php if ( $i == 0 ) echo 'active '; ?>">                                     
									<?php if ( isset( $row[ 'testimonial_image' ] ) && !empty( $row[ 'testimonial_image' ] ) ) : ?>
										<?php $image_thumb = wp_get_attachment_image( $row[ 'testimonial_image' ], 'thumbnail', false, array( 'class' => 'img-responsive' ) ); ?>                                       
										<?php
										if ( $image_thumb ) {
											echo $image_thumb;
										} else {
											echo '<img class="img-responsive" src="' . esc_url( $row[ 'testimonial_image' ] ) . '" alt="">';
										}
										?>                                   
									<?php endif; ?>
								</li>                                  
								<?php $i++; ?>                                
							<?php endforeach; ?>                            
						</ol>                            
						<!-- Carousel Slides / Quotes -->                            
						<div class="carousel-inner text-center">                                
							<?php
							$j = 0;
							foreach ( $repeater_value as $row ) :
								?>                                  
								<div class="item <?php if ( $j == 0 ) echo 'active '; ?>">                                    
									<blockquote>                                        
										<div class="row">                                            
											<div class="col-sm-8 col-sm-offset-2">                                                
												<?php if ( isset( $row[ 'testimonial_desc' ] ) && !empty( $row[ 'testimonial_desc' ] ) ) : ?>                                                  
													<p>
														<?php echo esc_html( $row[ 'testimonial_desc' ] ); ?>
													</p>                                                
												<?php endif; ?>                                                
												<small>                                                  
													<?php if ( isset( $row[ 'testimonial_name' ] ) && !empty( $row[ 'testimonial_name' ] ) ) : ?>                                                    
														<?php echo esc_html( $row[ 'testimonial_name' ] ); ?>                                                  
													<?php endif; ?>                                                  
													<?php if ( isset( $row[ 'testimonial_url' ] ) && !empty( $row[ 'testimonial_url' ] ) ) : ?>                                                    
														<?php echo ' | '; ?>
														<a href="<?php echo esc_url( $row[ 'testimonial_url' ] ); ?>">
															<?php echo esc_url( $row[ 'testimonial_url' ] ); ?>
														</a>                                                  
													<?php endif; ?>                                                
												</small>                                            
											</div>                                        
										</div>                                    
									</blockquote>                                  
								</div>                                  
								<?php $j++; ?>                                
							<?php endforeach; ?>                            
						</div>                            
						<!-- Carousel Buttons Next/Prev -->                            
						<a data-slide="prev" href="#quote-carousel" class="left carousel-control">
							<i class="fa fa-chevron-left"></i>
						</a>                            
						<a data-slide="next" href="#quote-carousel" class="right carousel-control">
							<i class="fa fa-chevron-right"></i>
						</a>                        
					</div>                    
				</div>                
			</div>
		<?php endif; ?>
	</div>
</div>
<div class="<?php echo esc_attr( $options['testimonial_section_bottom_border'] ); ?>"></div>
