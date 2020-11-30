<?php
    /* template name: Booking */
?>
<?php get_header(); ?>
<section id="booking_page">
    <div class="container background">
        <div class="row justify-content-md-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <h1 class="page_title">BOOK BELOW</h1>
                <?php if( have_rows('opening_times') ): ?>
			<?php while( have_rows('opening_times') ): the_row();
			$monday=get_sub_field('monday');
			$tuesday=get_sub_field('tuesday');
			$wednesday=get_sub_field('wednesday');
			$thursday=get_sub_field('thursday');
			$friday=get_sub_field('friday');
			$saturday=get_sub_field('saturday');
			$sunday=get_sub_field('sunday');
			?>
			<div class="datadiv" style="display:none;" 
			data-monday="<?php the_sub_field('monday'); ?>"
			data-tuesday="<?php the_sub_field('tuesday'); ?>"
			data-wednesday="<?php the_sub_field('wednesday'); ?>"
			data-thursday="<?php the_sub_field('thursday'); ?>"
			data-friday="<?php the_sub_field('friday'); ?>"
			data-saturday="<?php the_sub_field('saturday'); ?>"
			data-sunday="<?php the_sub_field('sunday'); ?>">
				<p>Colors: <?php the_sub_field('sunday'); ?></p>

		</div>
		<?php endwhile;?>
		<?php endif;?>
                <hr align="center" class="small-hr">
                <p class="intro">Whether you want to book a table for a small group or large party, please get in touch with us - call us to book or complete the enquiry form today.<br>
                </p>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <div id="booking_form">
                    <?php echo do_shortcode( '[contact-form-7 id="153" title="booking"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>