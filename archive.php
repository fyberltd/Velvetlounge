<?php
	/*template name: Blog Archive*/
?>

<?php 
	get_header();
?>

<div id="blog_archive">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1>Blog</h1>
			</div>
		</div>

		<?php 
			$args = array(
				'post_type'			=> 'post',
				'posts_per_page'	=> 1,
				'paged'				=> 1,
				'orderby' 			=> 'date'
			);

			$query = new WP_Query( $args );

			$no_of_posts = $query->found_posts;
		?>

		<?php if( $query->have_posts() ): $counter = 0; ?>
			<div class="row blog_posts">
				<?php while( $query->have_posts() ): $query->the_post(); ?>
					<div class="col-4 post">
						<a href="<?php the_permalink(); ?>">
							<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail('large'); ?>
							<?php else: 
								$default_thumbnail = wp_get_attachment_image_src(31, 'large');
							?>
								<img src="<?php echo $default_thumbnail[0]; ?>" alt="Default Thumbnail">
							<?php endif; ?>
							
							<h3 class="title"><?php echo get_the_title(); ?></h3>
						</a>

						<p class="date"><?php echo get_the_date(); ?></p>

						<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
						
						<p class="categories">Categories: <?php echo get_the_category_list(', '); ?></p>

						<p class="tags">Tags: <?php echo get_the_tag_list('',', ',''); ?></p>
					</div>
					<?php $counter++; ?>
		  		<?php endwhile; wp_reset_postdata(); ?>
				
				<div class="loading_icon">
					<img src="<?php echo bloginfo('template_directory'); ?>/images/loading.gif" alt="Loading GIF">
				</div>
	  		</div>
			
			<!-- if the total number of posts is greater than posts_per_page display button -->
	  		<?php if( $counter != $no_of_posts ): ?>
	  			<div class="row justify-content-center">
		  			<a href="javascript:;" id="archive_load_more" class="load_btn" data-page="1">SEE MORE</a>
	  			</div>
	  		<?php endif; ?>
	  	<?php endif; ?>
	</div>
</div>

<?php 
	get_footer();
?>