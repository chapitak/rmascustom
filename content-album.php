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
		    	    
		</div><!-- .post-header -->

		<?php if ( get_the_content() ) : ?>
		
			<div class="post-content">
            <table width="100%" border="1" cellspacing="0" cellpadding="0">
								<tr>
								<td width="25%"><strong>앨범명</strong></td>
								<td width="75%"><?php the_field('title'); ?></td>
								</tr>
								<tr>
								<td><strong>아티스트</strong></td>
								<td><?php the_field('artist'); ?></td>
								</tr>
								<tr>
								<td><strong>발매일</strong></td>
								<td><?php the_field('release_date'); ?></td>
								</tr>
								<tr>
								<td><strong>장르</strong></td>
								<td><?php the_field('genre'); ?></td>
								</tr>
								<tr>
								<td><strong>참고점수</strong></td>
								<td><?php the_field('rating'); ?></td>
								</tr>
						</table>
                                               
				<?php the_content(); ?>
			
			</div><!-- .post-content -->
			
		<?php endif; ?>
	
	</div><!-- .post-inner -->

</div><!-- .post -->
