<?php
    /* template name: menu */
?>
<?php get_header(); ?>
<section id="menu_page">
    <nav class="row" id="food-links">
        <div class="col-12">
            <ul class="quicklinks">
                <li><a data-scroll href="#starters">Starters</a></li>
                <li><a data-scroll href="#mains">Mains</a></li>
                <li><a data-scroll href="#biryani">Biryani</a></li>
                <li><a data-scroll href="#grilled">Grilled Dishes</a></li>
                <li><a data-scroll href="#famous">Famous Curry Dishes</a></li>
                <li><a data-scroll href="#vegetable">Vegetables</a></li>
                <li><a data-scroll href="#accompaniments">Accompaniments</a></li>
            </ul>
        </div>
    </nav>
    <section id="food_menu">
        <div class="container">
            <!--             <div class="row" id="pretext">
                <div class="col-10 mx-auto">
                    <h3>
                        All our ingredients are fresh and locally sourced where possible. As a business we firmly believe in supporting the British Farming Industry and always aim to buy our raw materials locally.
                    </h3>
                </div>
            </div> -->
            <!-- starters -->
            <div id="starters" class="row section">
                <div class="col-8">
                    <h2 class="heading">Starters</h2>
                    <p class="desctitle">
                        All starters are served with salad and mint sauce. Most starters are pre-marinated
                        but if you prefer your food less spicy, please speak to a waiter to
                        see if we can accommodate to your needs.
                    </p>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <!-- breakfast toast-->
                            <?php if( have_rows('starter') ): ?>
                            <ul class="menu_list">
                                <?php while( have_rows('starter') ): the_row(); 

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
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                        <span class="price">£
                                            <?php echo $price; ?>
                                        </span>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mains -->
            <div id="mains" class="row section">
                <div class="col-8">
                    <h2 class="heading">Mains</h2>
                    <p class="desctitle">
                        All our food is cooked using fresh spices and ingredients. We do not use any artificial
                        food colouring or flavours nor do we include any preservatives in any of our food.
                    </p>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <!-- breakfast toast-->
                            <?php if( have_rows('mains') ): ?>
                            <ul class="menu_list">
                                <?php while( have_rows('mains') ): the_row(); 

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
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                        <span class="price">£
                                            <?php echo $price; ?>
                                        </span>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container gold">
            <!-- Biriani -->
            <div id="biryani" class="row section">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h2 class="heading">Biryani Dishes</h2>
                        <p class="desctitle">
                            Rice dishes cooked using Basmati long grain crops originated from Pakistan. Great taste,
                            great aroma creating the ultimate rice dish. Can be served with raitha or curry sauce.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <?php if( have_rows('biryani') ): ?>
                            <ul class="menu_list">
                                <?php while( have_rows('biryani') ): the_row(); 

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
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                        <span class="price">£
                                            <?php echo $price; ?>
                                        </span>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <!-- breakfast toast-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- grilled -->
            <div id="grilled" class="row section">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h2 class="heading">Grilled Dishes</h2>
                        <p class="desctitle">
                            Rice dishes cooked using Basmati long grain crops originated from Pakistan. Great taste,
                            great aroma creating the ultimate rice dish. Can be served with raitha or curry sauce.
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <?php if( have_rows('grilled') ): ?>
                            <ul class="menu_list">
                                <?php while( have_rows('grilled') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');

                    ?>
                                <li>
                                    <p class="foodname">
                                        <span>
                                            <?php echo $foodname; ?><span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                        <span class="price">£
                                            <?php echo $price; ?>
                                        </span>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <!-- breakfast toast-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container gold">
            <!-- grilled -->
            <div id="famous" class="row section">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h2 class="heading">Famous Curry Dishes</h2>
                        <p class="desctitle">
                            Madras, Korma, Rogan Josh, Dhansak, Dopiaza, Pathia, Vindaloo, Balti
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <?php if( have_rows('famous') ): ?>
                            <div class="row justify-content-center">
                                <?php while( have_rows('famous') ): the_row(); 
                    // vars
                    $foodname = get_sub_field('foodname');
                    $price = get_sub_field('price');

                    ?>
                                <div class="col-4 flex-center">
                                    <p class="foodname">
                                        <?php echo $foodname; ?>
                                        <span class="price">£
                                            <?php echo $price; ?>
                                        </span></p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- breakfast toast-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- grilled -->
            <div id="vegetable" class="row section">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="heading">Vegetable&nbsp;Mains</h2>
                        <p class="desctitle">
                            Also available as a side
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <?php if( have_rows('vegetable') ): ?>
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
                            <?php endif; ?>
                        </div>
                        <!-- breakfast toast-->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- grilled -->
            <div id="accompaniments" class="row section">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <h2 class="heading">Accompaniments</h2>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-8">
                            <?php if( have_rows('accompaniments') ): ?>
                            <div class="menu_list row">
                                <?php while( have_rows('accompaniments') ): the_row(); 

                    // vars
                    $foodname = get_sub_field('foodname');
                    $addinfo = get_sub_field('allergen-aditional-information');
                    $desc = get_sub_field('desc');
                    $price = get_sub_field('price');
                    $priceSmall = get_sub_field('pricesmall');

                    ?>
                                <div class="col-6">
                                    <p class="foodname">
                                        <span class="span">
                                            <?php echo $foodname; ?>
                                            <span class="addinfo">
                                                <?php echo $addinfo; ?>
                                            </span></span>
                                        <span class="price">£
                                            <?php echo $price; ?>
                                        </span>
                                    </p>
                                    <p class="desc">
                                        <?php echo $desc; ?>
                                    </p>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <!-- breakfast toast-->
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-8 flex-col-center">
                    <div class="logo"></div>
                    <h2 class="heading">(G) - Gluten (V) - Vegetarian
                        (D) - Dairy (VE) - Vegan</h2>
                    <p>
                        Allergens Information: We do not use nuts in any of our curries. We do however use
                        Coconut Powder in our Peshwari Nan can be found in our desserts. Also some of our
                        ingredients state ‘may contain traces of nuts.’ Therefore, we do not work in a nut free
                        kitchen. Our oils are used for all food types and cross contamination is present. If you suffer from any allergy related issues, please inform a member of staff, and we will try our utmost best to accommodate your needs or advise you to the best of&nbsp;our&nbsp; knowledge.</p>
                </div>
            </div>
        </div>
    </section>
</section>
<?php get_footer(); ?>