<?php
	/* template name: Gallery */
?>
<?php get_header(); ?>
<section id="gallery_page">
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <div class="column">
                <div id="heading_wrap">
                    <h1><span>THE</span><br> PHOTO<br> GALLERY</h1>
                </div>
            </div>
            <?php 
				$images = get_field('gallery_images');
				// $image = $images[0];
				
				// display first image on load
				if( $images ): $i = 0;?>
            <?php while( $i < 1 ): ?>
            <div class="column">
                <?php if( $images[$i]['caption'] && $images[$i]['description'] ): ?>
                <div class="gallery_img blur" style="background-image: url(<?php echo $images[$i]['url']; ?>);"></div>
                <div class="overlay">
                    <div class="bg"></div>
                    <h2>
                        <?php echo $images[$i]['caption']; ?>
                    </h2>
                    <p>
                        <?php echo $images[$i]['description']; ?>
                    </p>
                </div>
                <?php elseif( $images[$i]['caption'] ): ?>
                <div class="gallery_img blur" style="background-image: url(<?php echo $images[$i]['url']; ?>);"></div>
                <div class="overlay">
                    <div class="bg"></div>
                    <h2>
                        <?php echo $images[$i]['caption']; ?>
                    </h2>
                </div>
                <?php else: ?>
                <div class="gallery_img" style="background-image: url(<?php echo $images[$i]['url']; ?>);"></div>
                <?php endif; ?>
            </div>
            <?php $i++; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <?php if ( have_posts() ) : ?>
    <div class="container-fluid pl-0 pr-0">
        <div class="row no-gutters">
            <?php echo do_shortcode( '[ajax_load_more acf="true" acf_post_id="205" acf_field_type="gallery" acf_field_name="gallery_images" post_type="post" transition_container="false" images_loaded="true" button_label="Load More" button_loading_label="Loading" offset="1" posts_per_page="4" scroll="false"]' );
					?>
        </div>
    </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>