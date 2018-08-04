<?php
$options = fpb_get_option( 'front_page_builder_options' ); 
?>
<div class="section">
	<div class="<?php echo esc_attr( $options['contact_section_layout'] ); ?>">
		<div class="container-heading text-center <?php echo esc_attr( $options['contact_section_title_style'] ); ?>">
			<?php if ( $options['contact_section_title'] != '' ) : ?>
				<h2 class="section-title">
          <?php echo esc_html( $options['contact_section_title'] ); ?>
        </h2>
			<?php endif; ?>
			<?php if ( $options['contact_section_desc'] != '' ) : ?>
				<div class="sub-title"><span><?php echo esc_html( $options['contact_section_desc'] ); ?></span></div>
			<?php endif; ?>
		</div>
	</div>
	<?php if ( $options['google-map-api'] != '' && $options['google-map-enable'] == 1 ) : ?>
		<div id="map-canvas"></div>
	<?php endif; ?>	
	<div class="<?php echo esc_attr( $options['contact_section_layout'] ); ?>">
		<div class="contact-home">
			<div class="row">
				<div class="col-sm-8">
					<?php if ( $options['contact_form'] != '' ) : ?>
						<?php echo do_shortcode( '[contact-form-7 id="' . $options['contact_form'] . '"]' ); ?>
					<?php endif; ?>
				</div>
				<div class="col-sm-4">
					<?php if ( $options['contact_company_text'] != '' ) : ?>
						<div class="about-us">
							<?php echo wp_kses_post( $options['contact_company_text'] ); ?>
						</div> 
					<?php endif; ?>
				</div>
			</div>
			<!--/row-->
		</div>
	</div>
</div>
<div class="<?php echo esc_attr( $options['contact_section_bottom_border'] ); ?>"></div>
<?php if ( $options['google-map-api'] != '' && $options['google-map-enable'] == 1 ) : ?>
	<script src="https://maps.google.com/maps/api/js?key=<?php echo esc_html( $options['google-map-api'] ); ?>" type="text/javascript"></script>
	<script type="text/javascript">
	    /* google maps */
	    jQuery( function ( $ ) {
	        google.maps.visualRefresh = true;

	        var map;
	        function initialize() {
	            var geocoder = new google.maps.Geocoder();
	            var address = $( '#map-input' ).text(); /* change the map-input to your address */
	            var mapOptions = {
					scrollwheel: false,
	                zoom: 15,
	                mapTypeId: google.maps.MapTypeId.ROADMAP
	            };
	            map = new google.maps.Map( document.getElementById( 'map-canvas' ), mapOptions );

	            if ( geocoder ) {
	                geocoder.geocode( { 'address': address }, function ( results, status ) {
	                    if ( status == google.maps.GeocoderStatus.OK ) {
	                        if ( status != google.maps.GeocoderStatus.ZERO_RESULTS ) {
	                            map.setCenter( results[0].geometry.location );

	                            var infowindow = new google.maps.InfoWindow(
	                                {
	                                    content: address,
	                                    map: map,
	                                    position: results[0].geometry.location,
	                                } );

	                            var marker = new google.maps.Marker( {
	                                position: results[0].geometry.location,
	                                map: map,
	                                title: address
	                            } );

	                        } else {
	                            alert( "No results found" );
	                        }
	                    }
	                } );
	            }
	        }
	        google.maps.event.addDomListener( window, 'load', initialize );
	    } );
	    /* end google maps */
	</script>
<?php endif; ?>
 