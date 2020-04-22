<?php
	/* template name: Contact */
?>
<?php get_header(); ?>
<section id="contact_page">
    <div class="container">
        <div class="row" id="top_wrap">
            <div class="col-12 col-lg-6">
                <h2 class="title">Contact us today</h2>
                <ul id="contact_details">
                    <li>159 Huddersfield Rd</li>
                    <li>Mirfield</li>
                    <li>WF14 9DQ</li>
                    <li><a href="tel:01924496655">01924 496 655</a></li>
                    <!-- <li><a href="mailto:info@jinnhabistro.co.uk">info@jinnhabistro.co.uk</a></li> -->
                </ul>
                <div class="wrap">
                    <p> Monday: Closed</p>
                    <p>
                        Tuesday: 05:00pm - 11:00pm</p>
                    <p>
                        Wednesday: 05:00pm - 11:00pm</p>
                    <p>
                        Thursday: 05:00pm - 11:00pm</p>
                    <p>
                        Friday: 05:00pm - 11:00pm</p>
                    <p>
                        Saturday: 05:00pm - 11:00pm</p>
                    <p>
                        Sunday: 05:00pm - 11:00pm</p>
                    <p class="bold">
                        We are also open bank holidays as well as during the day on&nbsp;Christmas&nbsp;Day</p>
                </div>

            </div>
            <div class="col-12 col-lg-6">
                <div id="contact_form">
                    <?php echo do_shortcode( '[contact-form-7 id="154" title="contact"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2363.2645537531225!2d-1.707964684031462!3d53.67791025752471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bdefee6daa209%3A0xa17f4142130c77b3!2sRubys%20Lounge!5e0!3m2!1sen!2suk!4v1587398509289!5m2!1sen!2suk"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
    </div>
</section>
<?php get_footer(); ?>