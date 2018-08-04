<article class="article-content blog-inline">
	<div <?php post_class(); ?>>
		<header>
			<time class="single-meta-date published" datetime="<?php the_time( 'Y-m-d' ); ?>">
				<span class="day"><?php the_time( 'd', $post->ID ); ?></span>
				<span class="month"><?php the_time( 'M', $post->ID ); ?></span>
				<span class="year"><?php the_time( 'Y', $post->ID ); ?></span>
			</time>
			<h2 class="page-header">                                
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
					<?php the_title(); ?>
				</a>                            
			</h2>
			<div class="post-meta text-left">
				<span><?php esc_html_e( 'By', 'front-page-builder' ); ?></span><span class="author-link"><?php the_author_posts_link(); ?></span>
			</div>
		</header>
		<div class="home-header">
			<?php if ( has_post_thumbnail() ) : ?>                               
				<a href="<?php the_permalink(); ?>">
					<div class="featured-thumbnail">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				</a>                                                           
			<?php endif; ?>
			<div class="entry-summary text-center">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->                                                                                                                       
			<div class="clear"></div>                                                          
		</div> 
	</div>
	<div class="clear"></div>
</article>