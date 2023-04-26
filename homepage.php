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
        <h2>Discover the Best of Modern Indian Cuisine in Mirfield, at Velvet Lounge</h2>
        <div class="logo"></div>
        <!-- <p class="white-text">10&#x25; discount on all&nbsp;online&nbsp;orders</p> -->
        <div class="btn-row">
            <a href="https://velvetlounge.food-now.co.uk/" target="_blank" class="button gold-back">Order Online</a><a href="<?php echo get_page_link(163)?>" class="button dark">Reservations</a>
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
        <!-- <article id="cocktails">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 text-box">
                    <div data-aos-duration="3000" data-aos="fade-left">
                        <h2 class="bold">Handcrafted Cocktails at Velvet Lounge</h2>
                        <p>Indulge in the vibrant flavours of modern Indian cuisine while sipping on a refreshing cocktail at Velvet Lounge. Our bar boasts over 14 cocktails, including mocktails, carefully crafted to perfectly complement your dining experience. From classic favourites to inventive new blends, there's a drink for every taste. Join us for a memorable evening of exceptional food and drink!</p>
                        <p></p>
                    </div>
                </div>

                <figure class="col-xl-6">
                </figure>
            </div>
        </div>
    </article> -->
</div>
<?php
    get_footer();
?>