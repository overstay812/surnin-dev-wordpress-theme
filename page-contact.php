<?php
/* Template Name: contact */
?>

<?php get_header() ?>

<div class="tm-row">
    <div class="tm-col-left"></div>
    <main class="tm-col-right tm-contact-main">
        <!-- Content -->
        <section class="tm-content tm-contact">
            <h2 class="mb-4 tm-content-title"><?php the_field('title')?></h2>
            <p class="mb-85"><?php the_field('description_1')?></p>
            <!-- <form id="contact-form" action="" method="POST">
                <div class="form-group mb-4">
                    <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                </div>
                <div class="form-group mb-4">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div class="form-group mb-5">
                    <textarea rows="6" name="message" class="form-control" placeholder="Message..." required=""></textarea>
                </div>
                <div class="text-right mb-5">
                    <button type="submit" class="btn btn-big btn-primary">Send It</button>
                </div>
            </form> -->
            <?php echo do_shortcode('[contact-form-7 id="107" title="Контактная форма 1"]'); ?>
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

<?php get_footer() ?>