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
        <div class="container center">
            <div class="col-xl-7" data-aos="fade-up">
                <p><span class="bold">Welcome to Velvet Lounge,</span> a modern and sleek restaurant serving an extraordinary selection of traditional favourites and specialty dishes from many&nbsp;different&nbsp;regions. </p>
            </div>
        </div>
    </article>
    <article id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 text-box" data-aos="fade-right">
                    <h2>About Velvet Lounge</h2>
                    <p>
                        All good Indian Restaurants jealously guard their recipe for the spice blends which make each dish distinctive. The spices are freshly pounded, fried in ghee to bring out their flavour and then combined with other herbs&nbsp;and&nbsp;ingredients.
                    </p>
                    <p>
                        Velvet Lounge offers a rich range of dishes for you to choose from to create the perfect Indian meal.
                        Some dishes may contain nuts, please ask a member of staff&nbsp;for&nbsp;assistance.
                    </p>
                </div>
                <figure class="col-xl-7"data-aos="fade-left" data-aos-delay="200">
                </figure>
            </div>
        </div>
    </article>
</div>
<?php
    get_footer();
?>