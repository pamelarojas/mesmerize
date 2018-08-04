<article class="article-content fullwidth-blog">
	<div <?php post_class(); ?>>
		<time class="single-meta-date published" datetime="<?php the_time( 'Y-m-d' ); ?>">
			<span class="day"><?php the_time( 'd', $post->ID ); ?></span>
			<span class="month"><?php the_time( 'M', $post->ID ); ?></span>
			<span class="year"><?php the_time( 'Y', $post->ID ); ?></span>
			<?php the_category(''); ?>
		</time>
		<div class="home-header">
			<?php if ( has_post_thumbnail() ) : ?>                               
				<a href="<?php the_permalink(); ?>">
					<div class="featured-thumbnail">
						<?php the_post_thumbnail( 'front-page-builder-archive' ); ?>
					</div>
				</a>                                                           
			<?php endif; ?>
			<header>
				<h2 class="page-header text-center">                                
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>                            
				</h2>
			</header>                                                      
			<div class="entry-summary text-center">
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