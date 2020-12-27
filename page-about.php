<?php get_header() ?>

<?php
/* Template Name: about */
?>
<div class="tm-row">
    <div class="tm-col-left"></div>
    <main class="tm-col-right">
        <section class="tm-content tm-about">
            <h2 class="mb-5 tm-content-title"><?php the_field('title') ?></h2>
            <hr class="mb-4">
            <div class="media my-3 ">
                <i class="fas fa-diagnoses fa-3x p-3 mr-4"></i>
                <div class="media-body">
                    <p><?php the_field('description_1') ?></p>
                </div>
            </div>
            <div class="media my-3 ">
                <i class="fas fa-laptop-code fa-3x p-3 mr-4"></i>
                <div class="media-body">
                    <p><?php the_field('description_2') ?></p>
                </div>
            </div>
            <div class="media my-3">
                <i class="fas fa-project-diagram fa-3x p-3 mr-4"></i>
                <div class="media-body ability-list">
                <?php the_field('skills')?> 
                </div>
            </div>
            <div class="media my-3">
                <i class="far fa-comments fa-3x p-3 mr-4"></i>
                <div class="media-body">
                    <p><?php the_field('description_3')?></p>
                </div>
            </div>
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