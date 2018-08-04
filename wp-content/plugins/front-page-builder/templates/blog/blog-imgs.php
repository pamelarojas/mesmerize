<?php 
$options = fpb_get_option( 'front_page_builder_options' );
$grid = esc_attr( $options['blog_section_per_row'] );
?>
<article class="article-content blog-img col-md-<?php echo $grid; ?> col-sm-6">
	<div <?php post_class( 'row' ); ?>>

			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>">
					<div class="featured-thumbnail">
						<?php the_post_thumbnail( 'full' ); ?>
					</div>
				</a>
			<?php endif; ?>

		<div class="home-header">
			<header>
				<h2 class="page-header">
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
						<?php the_title(); ?>
					</a>
				</h2>
			</header>                         
		</div>                      
  </div>
	<div class="clear"></div>
</article>