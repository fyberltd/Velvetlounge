<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet Lounge</title>
    <link rel="stylesheet" href="https://use.typekit.net/abf6sjy.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
        window.addEventListener("load", function () {
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#252e39"
                    },
                    "button": {
                        "background": "transparent",
                        "text": "#14a7d0",
                        "border": "#14a7d0"
                    }
                }
            })
        });
    </script>
    <?php wp_head(); ?>
</head>
<!-- https://cookieconsent.osano.com/download/ -->

<body <?php body_class() ?>>
    <header id="header" class="<?php if( is_front_page() ){ echo 'homepage'; }?>">
        <div class="content">

            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo bloginfo('template_directory'); ?>/images/PNG/velvet lounge logo_white.png"
                    alt="logo">
            </a>

            <div class="nav-right">
                <nav>
                    <?php wp_nav_menu( array('theme_location' => 'header_nav', 'container_id' => 'header_nav') ); ?>
                </nav>
                <div class="social-row">
                    <a href="" class="facebook"></a>
                    <a href="" class="instagram"></a>
                </div>
            </div>
        </div>
    </header>
    <div id="wrapper">