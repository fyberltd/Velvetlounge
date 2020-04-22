<?php
    /* template name: menu */
?>
<?php get_header(); ?>
<section id="menu_page">
    <nav class="row" id="food-links">
        <div class="col-lg-12">
            <ul class="quicklinks">
                <?php if( have_rows('starter') ): ?><li><a class="quicknav" href="#starters">Starters</a></li>
                <?php endif; ?>
                <?php if( have_rows('mains') ): ?><li><a class="quicknav" href="#mains">Mains</a></li> <?php endif; ?>
                <?php if( have_rows('biryani') ): ?><li><a class="quicknav" href="#biryani">Biryani</a></li> <?php endif; ?>
                <?php if( have_rows('grilled') ): ?><li><a class="quicknav" href="#grilled">Grilled Dishes</a></li>
                <?php endif; ?>
                <?php if( have_rows('famous') ): ?><li><a class="quicknav" href="#famous">Famous Curry Dishes</a></li>
                <?php endif; ?>
                <?php if( have_rows('vegetable') ): ?><li><a class="quicknav" href="#vegetable">Vegetables</a></li>
                <?php endif; ?>
                <?php if( have_rows('childrens') ): ?><li><a class="quicknav" href="#children">Childrens</a></li>
                <?php endif; ?>
                <?php if( have_rows('drinks') ): ?><li><a class="quicknav" href="#drinks">Drinks</a></li> <?php endif; ?>
                <?php if( have_rows('accompaniments') ): ?><li><a class="quicknav" href="#accompaniments">Accompaniments</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <section id="food_menu">
        <?php if( have_rows('starter') ): ?>
        <div class="container">
            <!--             <div class="row" id="pretext">
                <div class="col-lg-10 mx-auto">
                    <h3>
                        All our ingredients are fresh and locally sourced where possible. As a business we firmly believe in supporting the British Farming Industry and always aim to buy our raw materials locally.
                    </h3>
                </div>
            </div> -->
            <!-- starters -->
            <div id="starters" class="row section" data-aos="fade-up">
                <div class="col-lg-8">
                    <h2 class="heading">Starters</h2>
                    <p class="desctitle">
                        All starters are served with salad and mint sauce. Most starters are pre-marinated
                        but if you prefer your food less spicy, please speak to a waiter to
                        see if we can accommodate&nbsp;to&nbsp;your&nbsp;needs.
                    </p>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">


                            <ul class="menu_list">
                                <?php while( have_rows('starter') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <div class="foodname">
                                        <p>
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></p>
                                            <?if ($price): ?>
                                        <?if ($price): ?>
                                        <p class="price">£&nbsp;<?php echo $price; ?>
                                        </p>
                                        <?php endif ?>
                                        <?php endif ?>
                                    </div>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <!-- Mains -->
            <?php if( have_rows('mains') ): ?>
            <div id="mains" class="row section" data-aos="fade-up">
                <div class="col-lg-8">
                    <h2 class="heading">Mains</h2>
                    <p class="desctitle">
                        All our food is cooked using fresh spices and ingredients. We do not use any artificial
                        food colouring or flavours nor do we include any preservatives in any&nbsp;of&nbsp;our&nbsp;food.
                    </p>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">


                            <ul class="menu_list">
                                <?php while( have_rows('mains') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <div class="foodname">
                                        <p>
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></p>
                                        <?if ($price): ?>
                                        <p class="price">£&nbsp;<?php echo $price; ?>
                                        </p>
                                        <?php endif ?>
                                    </div>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if( have_rows('biryani') ): ?>
        <div class="container gold">
            <!-- Biriani -->
            <div id="biryani" class="row section" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="heading">Biryani Dishes</h2>
                        <p class="desctitle">
                            Rice dishes cooked using Basmati long grain crops originated from Pakistan. Great taste,
                            great aroma creating the ultimate rice dish. Can be served with raitha&nbsp;or&nbsp;curry&nbsp;sauce.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <ul class="menu_list">
                                <?php while( have_rows('biryani') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <div class="foodname">
                                        <p>
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></p>
                                        <?if ($price): ?>
                                        <p class="price">£&nbsp;<?php echo $price; ?>
                                        </p>
                                        <?php endif ?>
                                    </div>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div> <?php endif; ?>
        <?php if( have_rows('grilled') ): ?>
        <div class="container">

            <div id="grilled" class="row section" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="heading">Grilled Dishes</h2>
                        <p class="desctitle">
                            Rice dishes cooked using Basmati long grain crops originated from Pakistan. Great taste,
                            great aroma creating the ultimate rice dish. Can be served with raitha&nbsp;or&nbsp;curry&nbsp;sauce.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <ul class="menu_list">
                                <?php while( have_rows('grilled') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <div class="foodname">
                                        <p>
                                            <?php echo $foodname; ?>
                                        </p>
                                        <?if ($price): ?>
                                        <p class="price">£&nbsp;<?php echo $price; ?>
                                        </p>
                                        <?php endif ?>
                                    </div>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div><?php endif; ?>
        <?php if( have_rows('famous') ): ?>
        <div class="container gold">

            <div id="famous" class="row section" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="heading">Famous Curry Dishes</h2>
                        <p class="desctitle">
                            Madras, Korma, Rogan Josh, Dhansak, Dopiaza, Pathia, Vindaloo, Balti
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">

                            <div class="row justify-content-center">
                                <?php while( have_rows('famous') ): the_row(); 
                    // vars
                    $foodname = get_sub_field('foodname');
                    $price = get_sub_field('price');

                    ?>
                                <div class="col-lg-4 flex-center">
                                    <p class="foodname">
                                        <?php echo $foodname; ?>
                                        <span class="price">£&nbsp;<?php echo $price; ?>
                                        </span></p>
                                </div>
                                <?php endwhile; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div> <?php endif; ?>
        <?php if( have_rows('vegetable') ): ?>
        <div class="container">

            <div id="vegetable" class="row section" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2 class="heading">Vegetable&nbsp;Mains</h2>
                        <p class="desctitle">
                            Also&nbsp;available&nbsp;as&nbsp;a&nbsp;side
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <ul class="menu_list">
                                <?php while( have_rows('vegetable') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');
                    $priceSmall = get_sub_field('pricesmall');

                    ?>
                                <li>
                                    <p class="foodname">
                                        <span class="span">
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                        <span class="price">
                                            <?php echo $price; ?>
                                            <span class="price-small">
                                                <?php echo $priceSmall; ?>
                                            </span>
                                        </span>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>

                        </div>

                    </div>
                </div>
            </div><?php endif; ?>
        </div> <?php if( have_rows('childrens') ): ?>
        <div class="container">
            <div id="childrens" class="row section" data-aos="fade-up">
                <div class="col-lg-8">
                    <h2 class="heading">Childrens</h2>
                    <!-- <p class="desctitle">
                        All our food is cooked using fresh spices and ingredients. We do not use any artificial
                        food colouring or flavours nor do we include any preservatives in any of our food.
                    </p> -->
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">

                            <ul class="menu_list">
                                <?php while( have_rows('childrens') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <div class="foodname">
                                        <p>
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></p>
                                        <?if ($price): ?>
                                        <p class="price">£&nbsp;<?php echo $price; ?>
                                        </p>
                                        <?php endif ?>
                                    </div>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div> <?php endif; ?>
        <?php if( have_rows('drinks') ): ?>
        <div class="container">
            <div id="drinks" class="row section" data-aos="fade-up">
                <div class="col-lg-8">
                    <h2 class="heading">Drinks</h2>
                    <!-- <p class="desctitle">
                        All our food is cooked using fresh spices and ingredients. We do not use any artificial
                        food colouring or flavours nor do we include any preservatives in any of our food.
                    </p> -->
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">


                            <ul class="menu_list">
                                <?php while( have_rows('drinks') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <p class="foodname">
                                        <span>
                                            <?php echo $foodname; ?>
                                            <?if ($price): ?>
                                            <span class="price">£&nbsp;<?php echo $price; ?>
                                            </span>
                                            <?php endif ?>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php if( have_rows('accompaniments') ): ?>
        <div class="container">
            <div id="accompaniments" class="row section" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="heading">Accompaniments</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">

                            <div class="menu_list row">
                                <?php while( have_rows('accompaniments') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');
                    $priceSmall = get_sub_field('pricesmall');

                    ?>
                                <div class="col-lg-6">
                                    <p class="foodname">
                                        <span class="span">
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                            <?if ($price): ?>
                                            <span class="price">£&nbsp;<?php echo $price; ?>
                                            </span>
                                            <?php endif ?>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </div>
                                <?php endwhile; ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="row justify-content-center">
                <div class="col-lg-8 flex-col-lg-center">
                    <div class="logo"></div>
                    <h2 class="heading">(G) - Gluten (V) - Vegetarian
                        (D) - Dairy (VE) - Vegan</h2>
                    <p>
                        Allergens Information: We do not use nuts in any of our curries. We do however use
                        Coconut Powder in our Peshwari Nan can be found in our desserts. Also some of our
                        ingredients state ‘may contain traces of nuts.’ Therefore, we do not work in a nut free
                        kitchen. Our oils are used for all food types and cross contamination is present. If you suffer
                        from any allergy related issues, please inform a member of staff, and we will try our utmost
                        best to accommodate your needs or advise you to the best of&nbsp;our&nbsp; knowledge.</p>
                </div>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>