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
				<?php _e( 'Author', 'rams' ); ?></strong><?php the_author_posts_link(); ?> 
				<?php if ( has_category() ) : ?>
					<strong><?php _e( 'Categories', 'rams' ); ?></strong><?php the_category( ', ' ); ?>
				<?php endif; ?>
							<?php $postType = get_post_type_object(get_post_type());?>
							<span style="float:right;"><?php if ($postType) { echo (esc_html($postType->labels->singular_name)); }?></span>
			</div>
		    	    
		</div><!-- .post-header -->

		<?php if ( get_the_content() ) : ?>
		
			<div class="post-content">
			<img src = "<?php the_field('cover');?>"/><hr>
                                                        
            <strong>제목</strong>
            <?php the_field('title'); ?><br>
            
            
            <strong>연출 </strong>
            <?php the_field('director'); ?><br>
            
            
            <strong>개봉일 </strong>
            <?php the_field('release_date'); ?><br>
            
            
            <strong>관람일 </strong>
            <?php the_field('watch_date'); ?><br>
            
            
            <strong>상영시간 </strong>
            <?php the_field('running_time'); ?>분<br>
            
            
            <strong>장르 </strong>
            <?php the_field('genre'); ?><br>
            
            <strong>Rating </strong>
            <?php the_field('rating'); ?><hr>
                                                        
				<?php the_content(); ?>
			
			</div><!-- .post-content -->
			
		<?php endif; ?>
	
	</div><!-- .post-inner -->

</div><!-- .post -->
