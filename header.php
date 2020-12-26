<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web development</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />


    <?php wp_head() ?>
</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-terminal fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">web development</h1>
                            <p class="tm-slogon"> live in constant code</p>
                        </div>
                    </div>
                </div>
                <div class="tm-col-right">
                    <nav class="navbar navbar-expand-lg" id="tm-main-nav">
                        <button class="navbar-toggler toggler-example mr-0 ml-auto" type="button" data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fas fa-bars"></i></span>
                        </button>

                          <?php
                            wp_nav_menu([
                                'theme_location'  => '',
                                'menu'            => '',
                                'container'       => 'div',
                                'container_class' => 'collapse navbar-collapse tm-nav',
                                'container_id'    => 'navbar-nav',
                                'menu_class'      => 'navbar-nav text-uppercase',
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => '',
                            ]);

                            ?>
                        
                        <!-- <div class="collapse navbar-collapse tm-nav" id="navbar-nav">

                    
                 

                            <ul class="navbar-nav text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link tm-nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="portfolio.html">portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link tm-nav-link" href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div> -->

                    </nav>
                </div>
            </div>