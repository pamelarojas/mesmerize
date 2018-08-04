<?php
$options		 = fpb_get_option( 'front_page_builder_options' );
$sortable_value	 = maybe_unserialize( $options[ 'home_layout' ] );
?> 			 
<div class="fpb-main-menu">

	<div class="no-gutter">     
		<nav id="fpb-main-navigation" class="navbar navbar-inverse" role="navigation">                    
			<?php if ( $options[ 'header-logo' ] != '' ) : ?>
				<div class="fpb-header-img navbar-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( $options[ 'header-logo' ] ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
				</div>
			<?php else : ?>
				<div class="fpb-header-text navbar-brand">
					<h1 class="main-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				</div>
			<?php
			endif;
			if ( !empty( $sortable_value ) ) : // Check static front page, homepage template and values
				?> 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#fpb-main-navigation-inner" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">
							<?php _e( 'Toggle navigation', 'front-page-builder' ); ?>
						</span>                            
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>                     
					</button>                    
				</div>
				<div id="fpb-main-navigation-inner" class="collapse navbar-collapse navbar-2-collapse" >      
					<ul class="nav navbar-nav navbar-right">        
						<?php foreach ( $sortable_value as $checked_value ) : ?>
							<?php $title = str_replace( '_section', '', $checked_value ); ?>				      
							<?php if ( $options[ $checked_value . '_menu_title' ] != '' ) : ?>
								<li> 
									<a class="nav-<?php echo $checked_value; ?>" href="#<?php echo $checked_value; ?>"><?php echo $options[ $checked_value . '_menu_title' ]; ?></a>
								</li>
							<?php endif; ?>				       
						<?php endforeach; ?> 	       
					</ul>    
				</div>
			<?php endif; ?>
			<!-- /.navbar-collapse -->			                             
		</nav>
	</div>

</div>
