<?php
/*
 * Template Name: Front Page Builder Template
 * Description: A Page Template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
	</head>
	<body id="blog" <?php body_class(); ?>>
		<!-- start content container -->
		<div class="fpb-content">
			<?php
			$options		 = fpb_get_option( 'front_page_builder_options' );
			$sortable_value	 = maybe_unserialize( $options [ 'home_layout' ] );
			$templates		 = new FPB_Template_Loader;

			if ( $options[ 'menu_section_enable' ] == 1 ) {
				$templates->get_template_part( 'homepage', 'menu' );
			}

			if ( !empty( $sortable_value ) ) :

				$i = 0;
				foreach ( $sortable_value as $checked_value ) :
					?>
					<section id="<?php echo esc_attr( $checked_value ) ?>" class="section<?php echo absint( $i ) ?>">
						<?php $templates->get_template_part( 'homepage', $checked_value ); ?>
					</section>
					<?php
					$i++;
				endforeach;
			endif;
			//var_export( get_option( 'front_page_builder_options', array() ) );
			//var_export(fpb_default());
			?>
		</div>
		<!-- end content container -->
		<?php wp_footer(); ?>
	</body>
</html>
