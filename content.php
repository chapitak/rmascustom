<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
	
		<div class="featured-media">	
			
			<a href="<?php the_permalink(); ?>" rel="bookmark">
			
				<?php the_post_thumbnail( 'post-image' ); ?>
			
			</a>
			
		</div><!-- .featured-media -->
			
	<?php endif; ?>
	
	<div class="post-inner">
		
		<div class="post-header">

			<?php if ( get_post_type() == 'post' ) : ?>
			
				<p class="post-date">
				
					<a href="<?php the_permalink(); ?>"><?php the_time( get_option( 'date_format' ) ); ?></a>
					
					<?php if ( is_sticky() ) : ?>
					
						<span class="sep">/</span> <span class="is-sticky"><?php _e( 'Sticky', 'rams' ); ?></span>
					
					<?php endif; ?>
					
				</p>

			<?php endif; ?>
			
		    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<div style="float:right;">
							<?php _e( 'Author', 'rams' ); ?></strong><?php the_author_posts_link(); ?> <br>
							<?php if ( has_category() ) : ?>
								<span style="float:right;"><strong></strong><?php the_category( ', ' ); ?></span>
							<?php endif; ?>
						</div>
		    	    
		</div><!-- .post-header -->

		<?php if ( get_the_content() ) : ?>
		
			<div class="post-content">
			
				<?php the_content(); ?>
				
			
			</div><!-- .post-content -->
			<span style="float:right;">
			<a href="<?php the_permalink(); ?>/#respond"> <!-- The blog permalink with the anchor ID after -->
				<!-- <i class="fa fa-comments-o"></i> Leave a Comment -->
			코멘트 남기기	
			</a>
			</span>
			
		<?php endif; ?>
	
	</div><!-- .post-inner -->

</div><!-- .post -->