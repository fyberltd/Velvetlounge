<?php
    /*template name: homepage*/
?>
<?php 
    get_header();
?>
<script>
    AOS.init();
</script>
<div id="home_page">
    <section id="hero">
        <!-- <div class="row background">
            <div class="col-7 left-background"></div>
            <div class="col-5 right-background"></div>
        </div> -->
        <h2>Welcome to</h2>
        <div class="logo"></div>
        <div class="btn-row">
            <a href="" class="button gold-back">Order Online</a><a href="" class="button dark">Reservations</a>
        </div>
    </section>
    <article id="intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 text-box">
                    <div data-aos-duration="3000" data-aos="fade-left">
                        <h2 class="bold">Velvet Lounge </h2>
                        <p>offers a unique dining experience, that of which can be related to mountainous areas of the
                            Indian sub-continent. Diners are guaranteed to be amazed with the food, service and the
                            surroundings. </p>
                        <p>Our aim is to create an enticing and memorable atmosphere. Velvet Lounge serves South Asian
                            starters, home style curries and has a fully licensed bar, serving beers, wines and spirits.
                            Also, traditional desserts are served to complete the dining experience. </p>
                    </div>
                </div>

                <figure class="col-xl-6">
                </figure>
            </div>
        </div>
    </article>
    <article id="about">
        <div class="container-fluid">
            <div class="row">
                <figure class="col-xl-6">
                </figure>
                <div class="col-xl-6 text-box">
                    <div data-aos-duration="3000" data-aos="fade-right">
                        <h2>About Velvet Lounge</h2>
                        <p>
                            All good Indian Restaurants jealously guard their recipe for the spice blends which make
                            each
                            dish distinctive. The spices are freshly pounded, fried in ghee to bring out their flavour
                            and
                            then combined with other herbs&nbsp;and&nbsp;ingredients.
                        </p>
                        <p>
                            Velvet Lounge offers a rich range of dishes for you to choose from to create the perfect
                            Indian
                            meal.
                            Some dishes may contain nuts, please ask a member of staff&nbsp;for&nbsp;assistance.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
<?php
    get_footer();
?>