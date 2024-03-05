</div><!-- end of wrapper for sticky footer-->
<footer id="footer">
    <div class="container-fluid content">
        <div class="row">
            <div class="col-lg-4 col-xl-2 offset-lg-1 flex-center">
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/PNG/velvet lounge logo_white.png"
                        alt="logo">
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <address class="col-lg-3 col-xl-2 offset-lg-1">
                <p>
                    159 Huddersfield Rd,
                </p>
                <p>
                    Mirfield,
                </p>
                <p>
                    WF14 9DQ
                </p>
                <p>
                    <a href="tel:01924496655">01924 496655</a>
                </p>
            </address>
            <nav class="col-lg-3 col-xl-2">
                <?php wp_nav_menu( array('theme_location' => 'footer_nav', 'container_id' => 'footer_nav') ); ?>
            </nav>
            <div class="col-lg-3 col-xl-2 social-row flex-center">
                <a href="https://www.facebook.com/velvetloungemirfield/" target="_blank" class="facebook"></a>
                <a href="https://www.instagram.com/velvetlounge_mirfield/" target="_blank" class="instagram"></a>
            </div>
        </div>
        <div id="bottom_bar">
            <!-- <p><a href="#">Privacy Policy</a> - <a href="#">Cookies Policy</a></p> -->
            <p>&copy; 2020 Velvet Lounge - Website by <a target="_blank" href="https://fyber.co.uk">Fyber</a></p>
        </div>
    </div>
</footer>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="//instant.page/1.2.2" type="module"
    integrity="sha384-2xV8M5griQmzyiY3CDqh1dn4z3llDVqZDqzjzcY+jCBCk/a5fXJmuZ/40JJAPeoU"></script>
<?php wp_footer(); ?>
</body>

</html>