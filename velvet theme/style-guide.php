<?php
    /*template name: style guide*/
?>
<?php 
    get_header();
?>
<div id="style-page" class="container-fluid">
    <div class="row flex-col-right">
        <div class="col-3 nav">
            <ul>
                <li><a href="#headings">Headings</a></li>
                <li><a href="#paragraph">paragraphs</a></li>
                <li><a href="#colors">colors</a></li>
                <li><a href="#buttons">buttons and links</a></li>
                <li><a href="#table">tables</a></li>
                <li><a href="#lists">lists</a></li>
                <li><a href="#contact_form">contact</a></li>
                <li><a href="#images">images</a></li>
            </ul>
        </div>
        <div class="col-9 padding-none">
            <section id="hero">
                <h1>logo goes here</h1>
                <h1>Hero Text</h1>
                <p>addition info. ::before rgba opacity can be changed</p>
                <a href="" class="button dark">Call to Action</a>
            </section>
            <section id="headings">
                <h1>
                    Header 1 $h1-font $h1-padding font family $family raleway
                </h1>
                <h2>
                    Header 2 4rem
                </h2>
                <h3>
                    Header 3 3rem
                </h3>
                <h4>
                    Header 4 2rem
                </h4>
                <h5>
                    Header 5 1rem probably too small
                </h5>
            </section>
            <section id="paragraph">
                <h2>Paragraphs</h2>
                <p>
                    $p-font $p-padding
                    paragraph text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci nunc, facilisis sit amet ex vel, consequat mattis eros. Nunc ex dui, interdum quis ligula a, bibendum fermentum augue. Donec in fringilla nunc, sed ultrices ante. Donec lectus lacus, commodo at arcu vel, blandit egestas velit. Ut maximus lacus pretium enim faucibus, vel viverra risus feugiat. Vestibulum varius sit amet tellus id aliquam. Nulla luctus leo sit amet iaculis placerat. Aenean sagittis purus ac ornare dapibus. In egestas finibus eleifend. Duis bibendum ipsum nec nisl dignissim, nec varius mi vulputate. Mauris vel turpis nec quam commodo aliquet vitae quis risus.
                </p>
                <p class="bold">
                    $p-bold
                    bold text
                    paragraph text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci nunc, facilisis sit amet ex vel, consequat mattis eros. Nunc ex dui, interdum quis ligula a, bibendum fermentum augue. Donec in fringilla nunc, sed ultrices
                </p>
                <p class="gold-background">
                    $gold
                    gold text
                    paragraph text Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas orci nunc, facilisis sit amet ex vel, consequat mattis eros. Nunc ex dui, interdum quis ligula a, bibendum fermentum augue. Donec in fringilla nunc, sed ultrices
                </p>
            </section>
            <section id="colors">
                <h2>Colours</h2>
                <ul>
                    <li class="gold">$gold</li>
                    <li class="light-gold">$gold lighten 10</li>
                    <li class="dark-gold">$gold darken 10</li>
                    <li class="saturate-gold">$gold saturate 10</li>
                    <li class="desaturate-gold">$gold desaturate 10</li>
                    <li class="black">$black</li>
                    <li class="offwhite">$offwhite</li>
                    <li class="light-grey">$light-grey</li>
                    <li class="dark-grey">$dark-grey</li>
                </ul>
            </section>
            <section id="buttons">
                <h2>Buttons</h2>
                <a href="" class="button gold-back">Button</a>
                <a href="" class="button">clear Button</a>
                <a href="" class="button dark">dark Button</a>
                <a href="">this is a link</a>
            </section>
            <h1>horizontal lines</h1>
            <hr align="center">
            <hr align="center" class="mid-hr">
            <hr align="center" class="small-hr">
            <section id="table">
                <h2>Table</h2>
                <table style="width:100%">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                </table>
            </section>
            <section id="lists">
                <h2>Unordered list </h2>
                <ul>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>
                <h2>Unordered list bulletpoints</h2>
                <ul class="bulletpoints">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>
                <h2>Horizontal unordered list </h2>
                <ul class="horizontal">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ul>
                <h2>ordered list</h2>
                <ol type="1">
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ol>
                <h2>discriptive list </h2>
                <dl>
                    <dt>Coffee</dt>
                    <dd>- black hot drink</dd>
                    <dt>Milk</dt>
                    <dd>- white cold drink</dd>
                </dl>
            </section>
            <section id="contact">
                <h2>Contact form</h2>
                <div class="row">
                    <div class="col-6">
                        <div id="contact_form">
                            <?php echo do_shortcode( '[contact-form-7 id="10" title="contact"]' ); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <address>
                            <p>69 Bingley Rd,</p>
                            <p>Bradford,</p>
                            <p>Shipley,</p>
                            <p>BD18 4SB</p>
                            <a href="mail:mail@domain.com"><span class="mail-icon">
                                    <svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" x="0px" y="0px" viewBox="0 0 100 100">
                                        <g transform="translate(0,-952.36218)">
                                            <path d="M 13.78125,975.3622 50,1004.5184 l 36.21875,-29.1562 -72.4375,0 z M 9,979.1747 l 0,50.1875 82,0 0,-50.1875 -39.125,31.5 a 3.0003,3.0003 0 0 1 -3.75,0 L 9,979.1747 z" stroke="none" marker="none" visibility="visible" display="inline" overflow="visible" />
                                        </g>
                                    </svg>
                                </span>mail@domain.com</a><br>
                            <a href="tel:0792919292"><span class="phone-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 500 500" enable-background="new 0 0 500 500" xml:space="preserve">
                                        <g>
                                            <g>
                                                <path d="M48.4,163.4c0-41.9,90.2-75.9,201.5-75.8s201.4,34.1,201.4,76l0,43.4c0,7.6-7.7,13.8-17.1,13.8l-55.1,0    c-9.4,0-17.1-6.2-17.1-13.8l0-30.2c0-23.3-49.5-42.7-111.4-42.8c-61.9,0-112.8,19.3-112.8,42.7l0,30.2c0,7.6-7.7,13.8-17.1,13.8    l-55.1,0c-9.4,0-17.1-6.2-17.1-13.8L48.4,163.4z" />
                                                <g>
                                                    <path d="M58.4,163.4c0-0.9,0.6-5.2,0.1-2.2c0.3-1.4,0.6-2.8,1-4.1c0.2-0.7,0.5-1.4,0.7-2     c-0.9,2.5-0.1,0.2,0.2-0.3c0.8-1.6,1.7-3.1,2.6-4.6c0.4-0.7,0.9-1.3,1.4-1.9c-1.4,1.9,0.2-0.3,0.5-0.5c1.1-1.3,2.2-2.6,3.5-3.8     c1.1-1.1,2.1-2.1,3.3-3.1c0.7-0.6,1.4-1.2,2.1-1.8c0.5-0.4,1-0.8,1.5-1.2c-0.7,0.6-0.7,0.5,0.3-0.2c15.7-11.5,33.7-18.5,52.1-24     c52.7-15.7,109.5-18.7,164.1-14.3c25.4,2,50.6,6,75.2,12.8c19.1,5.3,37.8,12.1,54.3,23.3c0.8,0.6,1.7,1.1,2.5,1.7     c0,0,2.6,2,1.1,0.8c1.5,1.1,2.9,2.4,4.3,3.6c1.3,1.2,2.6,2.4,3.8,3.7c0.6,0.6,1.1,1.3,1.7,1.9c0.4,0.4,0.7,0.8,1.1,1.3     c-0.7-1-0.7-1-0.1-0.1c1.7,2.3,3.1,4.7,4.3,7.2c1.1,2.2-0.7-2,0.1,0.3c0.2,0.7,0.5,1.4,0.7,2c0.2,0.7,0.3,1.4,0.5,2.1     c0.8,2.8,0.1-0.9,0.2,0.8c0.8,11.8,0.1,23.9,0.1,35.8c0,2.6,0,5.1,0,7.7c0,0.7,0,1.5,0,2.2c0,0.5-0.1,1.1-0.1,1     c-2,3.6-7.4,3.2-11.5,3.2c-14.2,0-28.4,0-42.6,0c-3.7,0-9,0.8-12.4-0.9c-1.2-0.6-2.4-1.7-2.5-2c-0.5-1.1-0.2-0.6-0.2-1.2     c-0.1-2.7,0-5.4,0-8.1c0-12.6,2.3-27.4-5.5-38.3c-11.5-16.3-33.1-23.9-51.5-28.7c-26.8-6.9-55.1-8.7-82.6-7     c-25.4,1.6-51.4,5.9-74.6,16.8c-14.4,6.8-29.5,18.1-30,35.5c-0.2,5.9,0,11.9,0,17.9c0,3.2,0,6.5,0,9.7c0,2.4,0.2,2.9-0.7,3.8     c-2.8,3-7.9,2.3-11.8,2.3c-7.2,0-14.5,0-21.7,0c-7.1,0-14.3,0-21.4,0c-3.8,0-8.9,0.7-12.2-1.6c-1.6-1.1-1.5-1.5-1.6-2.9     c-0.1-2.4,0-4.8,0-7.2c0-7.5,0-14.9,0-22.4C58.4,172,58.4,167.7,58.4,163.4c0-12.9-20-12.9-20,0c0,12.6,0,25.1,0,37.7     c0,7.7,0.5,14.8,6.2,20.8c6.3,6.7,15,8.7,23.8,8.7c14.6,0,29.2,0,43.8,0c5.5,0,11.4,0.4,16.8-1.1c11.1-3.1,18.6-12.3,18.8-23.8     c0.1-7.2,0-14.3,0-21.5c0-2.5,0-4.9,0-7.4c0-0.3,0-0.6,0-0.9c0-1.8-0.5,1.6,0-0.1c0.2-0.7,0.4-1.4,0.6-2c0.1-0.2,0.6-1.3,0-0.2     c-0.6,1.4,0.4-0.7,0.5-0.8c0.4-0.7,0.8-1.3,1.3-2c-1,1.4-0.1,0,0.5-0.5c1.3-1.4,2.7-2.8,4.2-4c0.8-0.7,0-0.1-0.1,0.1     c0.4-0.3,0.8-0.6,1.2-0.9c0.8-0.6,1.7-1.2,2.6-1.7c2.2-1.4,4.4-2.7,6.8-3.8c9.8-5,20.9-8.1,31.8-10.5c28.4-6.3,58.5-6.9,87.3-3.4     c12.5,1.5,25,4.2,37,8.2c4.9,1.7,9.2,3.4,13.8,5.7c2,1,3.9,2.1,5.7,3.3c0.9,0.6,1.7,1.1,2.6,1.7c1.7,1.1,0.4,0.2,1.5,1.1     c1.5,1.3,2.8,2.6,4.2,4c1.3,1.3,0.3,0.2,0.5,0.5c0.5,0.8,1,1.5,1.5,2.3c0.5,0.9,0.8,1.9,0.2,0.3c0.2,0.7,0.4,1.4,0.6,2     c0.4,1.2,0.2,1.8,0.1,0.1c0,0.5,0.1,1,0.1,1.6c-0.1,6.4,0,12.9,0,19.3c0,7.2-0.8,14.9,2.8,21.4c5.2,9.1,15.5,13,25.5,13.1     c14.1,0.1,28.2,0,42.3,0c4.3,0,8.7,0.2,13.1,0c13.3-0.9,25.1-9.9,25.6-23.8c0.5-12.9,0-26,0-38.9c0-13.5-3.9-24.6-12.7-34.9     c-12.2-14.2-30-23.1-47-30.2c-23.2-9.6-47.9-15.4-72.6-19.2c-58.9-9.1-120.2-8.4-178.6,3.6c-23.3,4.8-46.5,11.7-67.7,22.5     c-14.8,7.6-30.2,18-38.6,32.9c-3.6,6.4-5.6,13.4-5.7,20.8C38.3,176.2,58.3,176.2,58.4,163.4z" />
                                                </g>
                                            </g>
                                            <g>
                                                <path d="M412.9,379.6L338.3,251c-1.7-2.9-2.7-6.3-3-9.8l-0.5-6.7c-0.9-11.2-9.5-19.6-19.7-19.6H186    c-10.9,0-20,9.3-20,21.2v3.9c0,4.2-1,8.3-3.1,11.8L87.6,379.5c-8.5,14.4,1,33.5,16.7,33.5h291.9    C411.8,413,421.3,394.1,412.9,379.6z M249.9,370.1c-31.2,0-56.4-25.3-56.4-56.4c0-31.2,25.3-56.4,56.4-56.4    c31.1,0,56.4,25.3,56.4,56.4C306.3,344.9,281,370.1,249.9,370.1z" />
                                                <g>
                                                    <path d="M421.5,374.6c-14.3-24.6-28.5-49.2-42.8-73.8c-8.6-14.8-17.2-29.6-25.7-44.4c-1.9-3.3-3.9-6.6-5.7-9.9     c-1.2-2.1-1.8-4.1-2.1-6.5c-0.8-6-0.9-11.7-3.4-17.4c-4.9-11-15.7-17.6-27.6-17.7c-4.4,0-8.7,0-13.1,0c-18,0-36.1,0-54.1,0     c-17.2,0-34.4,0-51.6,0c-3.1,0-6.2-0.1-9.3,0c-16,0.5-28.3,12.6-29.9,28.4c-0.5,4.7,0.4,9.1-1.9,13.5c-0.4,0.8-0.9,1.5-1.4,2.3     c-2.6,4.4-5.2,8.7-7.8,13.1c-9.2,15.5-18.4,31.1-27.5,46.6c-9.4,16-18.9,32-28.3,47.9c-5.6,9.5-13.4,19.7-14.7,30.9     c-1.7,14.6,7,29.3,21.1,33.9c3.6,1.2,7.4,1.3,11.1,1.3c8.8,0,17.6,0,26.4,0c35.3,0,70.6,0,105.9,0c37.6,0,75.2,0,112.8,0     c11.7,0,23.4,0,35.1,0c10.6,0,20.4-0.1,28.9-8.1C427.1,404.5,428.6,387.5,421.5,374.6c-6.1-11.3-23.4-1.2-17.3,10.1     c4.3,8-0.1,18-8.1,18.3c-1.3,0-2.6,0-3.9,0c-9.1,0-18.2,0-27.3,0c-34.2,0-68.5,0-102.7,0c-36.4,0-72.9,0-109.3,0     c-12.1,0-24.1,0-36.2,0c-3.2,0-6.5,0-9.7,0c-2.5,0-4.2,0.1-5.8-0.5c-6.5-2.5-8.7-11.4-4.9-18.1c1.4-2.5,2.9-5,4.4-7.4     c7.8-13.2,15.6-26.4,23.4-39.7c15.6-26.4,31.3-52.6,46.7-79.1c0.7-1.2,1.3-2.3,1.9-3.6c3.1-6.7,2.5-12.9,3.3-19.8     c0.7-6.5,5.7-9.7,11.4-9.8c12.6-0.1,25.2,0,37.8,0c18.8,0,37.7,0,56.5,0c10.9,0,22.1-0.5,33,0c8,0.4,9.9,7.2,10.4,14.3     c0.6,6.9,2.4,13.1,5.8,19.1c6.3,10.9,12.7,21.8,19,32.8c16.9,29.2,33.9,58.4,50.8,87.6c1.2,2,2.3,4,3.5,6     C410.7,395.8,428,385.8,421.5,374.6z" />
                                                    <path d="M249.9,360.1c-19.1-0.2-37.2-12.1-43.6-30.5c-6.5-18.6-1-39.2,14.1-51.8c15-12.5,37-13.8,53.7-3.7     c16.1,9.8,25.1,29.3,21.5,47.9C291.3,344,272.3,359.9,249.9,360.1c-12.9,0.2-12.9,20.2,0,20c28-0.3,52.6-17.7,62.5-43.9     c9.6-25.5,1.2-56.1-19.8-73.3c-21.7-17.7-52.7-20.7-76.9-6c-24.1,14.6-36.1,43-30.7,70.4c6,30.7,34.2,52.5,65,52.9     C262.7,380.3,262.8,360.3,249.9,360.1z" />
                                                </g>
                                            </g>
                                        </g>
                                    </svg></span> 079191919191</a>
                        </address>
                    </div>
                </div>
            </section>
            <section id="images">
                <a href="">
                    <figure>
                        <img src="<?php echo bloginfo('template_directory');?>/images/shutterstock_117086992.jpg" alt="">
                        <figcaption>This is a fig caption</figcaption>
                    </figure>
                </a>
            </section>
        </div>
    </div>
</div>
<?php
    get_footer();
?>