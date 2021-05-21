<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head();?>
    </head>
<body <?php body_class( 'class-name' ); ?>>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url();?>">
                    <img src="<?php echo get_template_directory_uri();?>/assets/logo.svg" alt="<?php echo get_bloginfo( 'name' );?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="main-menu">
                    <!-- <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Modellen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kopen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Huren</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nieuws</a>
                        </li>
                    </ul> -->

                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                            'depth' => 2,
                            'walker' => new Bootstrap_Nav_Menu_Walker()
                        ));
                    ?>
                </div>
            </div>
        </nav>
        <?php if( is_front_page()) : ?>
        <div class="header-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <span class="title">Duurzame tiny huisjes</span>
                        <h2 class="heading">Een ecologisch tiny huisje is zoveel mogelijk opgebouwd uit duurzame natuurlijke materialen</h2>
                    </div>
                    <div class="col-12 col-md-5 text-center">
                        <a class="d-inline-flex justify-content-center align-items-center" href="">
                            <span class="icon"><img src="<?php echo get_template_directory_uri();?>/assets/btn_play.svg" alt=""></span>
                            <span>Bekijk de film</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="social">
                <ul>
                    <li>
                        <a href="" target="_blank">Instagram</a>
                    </li>
                    <li>
                        <a href="" target="_blank">Facebook</a>
                    </li>
                    <li>
                        <a href="" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </div>
        </div>
        <?php endif; ?>
    </header>