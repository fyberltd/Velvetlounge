<?php get_header(); ?>

<div id="single_blog_post">
	<div class="container">
		<?php while( have_posts() ): the_post(); ?>
			<h1><?php echo get_the_title(); ?></h1>
			
			<div class="row">
				<div class="col-9">
					<div id="post_content">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="col-3">
					<div id="post_sidebar">
						<h2>Side Bar</h2>
						<ul class="sidebar_elements">
							<?php dynamic_sidebar('single_sidebar'); ?>	
						</ul>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	
	<div id="lastest_posts">
		<?php 
			$args = array(
				'post_type'			=> 'post',
				'posts_per_page'	=> 3,
				'orderby' 			=> 'date'
			);

			$query = new WP_Query( $args );
		?>
		
		<div class="container">
			<?php if( $query->have_posts() ): ?>
				<h2>Recent Posts</h2>

				<div class="row blog_posts">
					<?php while( $query->have_posts() ): $query->the_post(); ?>
						<div class="col-4 post">
							<a href="<?php the_permalink(); ?>">
								<?php the_post_thumbnail(); ?>
								
								<h3 class="title"><?php echo get_the_title(); ?></h3>
							</a>

							<p class="date"><?php echo get_the_date(); ?></p>

							<p class="excerpt"><?php echo get_the_excerpt(); ?></p>
							
							<p class="categories">Categories: <?php echo get_the_category_list(','); ?></p>

							<p class="tags">Tags: <?php echo get_the_tag_list('',',',''); ?></p>
						</div>	
			  		<?php endwhile; wp_reset_postdata(); ?>
		  		</div>
		  	<?php endif; ?>
		</div>
	</div>
</div>
		

<?php get_footer(); ?>