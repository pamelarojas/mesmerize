<?php 
$options = fpb_get_option( 'front_page_builder_options' );
$grid = esc_attr( $options['blog_section_per_row'] );
?>
<article class="article-content col-md-<?php echo $grid; ?> col-sm-6">
	<div <?php post_class( 'row' ); ?>>
		<div class="col-md-12">                             
			<?php if ( has_post_thumbnail() ) : ?>                               
				<a href="<?php the_permalink(); ?>">
					<div class="featured-thumbnail">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				</a>                                                           
			<?php endif; ?>
		</div>
		<div class="home-header col-md-12"> 
			<header>
				<time class="single-meta-date published" datetime="<?php the_time( 'Y-m-d' ); ?>">
					<span class="day"><?php the_time( 'd', $post->ID ); ?></span>
					<span class="month"><?php the_time( 'M', $post->ID ); ?></span>
				</time>
				<h2 class="page-header">                                
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>                            
				</h2>
			</header>                                                      
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->                                                                                                                       
			<div class="clear"></div>                                  
			<p class="text-center">                                      
				<a class="btn btn-default btn-md fpb-button" href="<?php the_permalink(); ?>">
					<?php esc_html_e( 'Read more', 'front-page-builder' ); ?> 
				</a>                                  
			</p>                            
		</div>                      
	</div>
	<div class="clear"></div>
</article>