<?php
    /* template name: Booking */
?>
<?php get_header(); ?>
<section id="booking_page">
    <div class="container background">
        <div class="row justify-content-md-center">
            <div class="col-12 col-lg-10 col-xl-8">
                <h1 class="page_title">BOOK BELOW</h1>
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