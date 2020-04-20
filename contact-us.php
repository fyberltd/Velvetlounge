<?php
	/* template name: Contact */
?>
<?php get_header(); ?>
<section id="contact_page">
    <div class="container">
        <div class="row" id="top_wrap">
            <div class="col-12 col-md-6">
                <h2 class="title">Contact us today</h2>
                <ul id="contact_details">
                    <li>69 Bingley Rd,</li>
                    <li>Bradford,</li>
                    <li>Shipley,</li>
                    <li>BD18 4SB</li>
                    <li><a href="tel:01943600084">01274 396 666</a></li>
                    <li><a href="mailto:info@jinnhabistro.co.uk">info@jinnhabistro.co.uk</a></li>
                </ul>
                <div class="wrap">
                    <h3>Takeaway</h3>
                    <p>Call and collect on <a href="tel:01274396666">01274 39 66 66</a></p>
                    <p>10% off collection orders</p>
                </div>
                <div class="wrap">
                    <h3>Home Delivery Service</h3>
                    <p>Free home delivery service within a 3 mile radius</p>
                    <p>(min order £10) / (£1 per mile thereafter)</p>
                </div>
                <div class="wrap">
                    <h3>Bring Your Own Alcohol</h3>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="contact_form">
                    <?php echo do_shortcode( '[contact-form-7 id="154" title="contact"]' ); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d147.15210531384525!2d-1.7928500738194955!3d53.835149972711726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487be441b17347d5%3A0x3adeb9ec62a68057!2s69+Bingley+Rd%2C+Shipley+BD18+4SB!5e0!3m2!1sen!2suk!4v1553084648563" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</section>
<?php get_footer(); ?>