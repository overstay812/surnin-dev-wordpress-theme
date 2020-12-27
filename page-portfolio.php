<?php
/* Template Name: portfolio */
?>

<?php get_header() ?>

<div class="tm-row">
    <div class="tm-col-left"></div>
    <main class="tm-col-right">
        <section class="tm-content">


            <h2><?php the_field('note')?></h2>

            <div class="button-wrapper">
                <ul class="sci">
                    <li>
                        <div><a href="https://www.facebook.com/konstantin.surnin.9"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png" alt=""></a></div>
                    </li>
                    <li>
                        <div><a href="https://twitter.com/7S13xmk862PQGdu"><img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png" alt=""></a></div>
                    </li>
                    <li>
                        <div><a href="https://www.instagram.com/konstantin_ishere/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.png" alt=""></a></div>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</div>
</div>

<?php get_footer()?>