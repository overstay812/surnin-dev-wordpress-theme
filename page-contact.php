<?php
/* Template Name: contact */
?>

<?php get_header()?>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right tm-contact-main">
                    <!-- Content -->
                    <section class="tm-content tm-contact">
                        <h2 class="mb-4 tm-content-title">Contact Me</h2>
                        <p class="mb-85"> If you have any questions, or you want to leave a feedback text me please, and I will answer you during the nair work day.</p>
                        <form id="contact-form" action="" method="POST">
                            <div class="form-group mb-4">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="" />
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
                            </div>
                            <div class="form-group mb-5">
                                <textarea rows="6" name="message" class="form-control" placeholder="Message..."
                                    required=""></textarea>
                            </div>
                            <div class="text-right mb-5">
                                <button type="submit" class="btn btn-big btn-primary">Send It</button>
                            </div>
                        </form>
                        <div class="button-wrapper">
                        <ul class="sci">
                                <li><div><a href="https://www.facebook.com/konstantin.surnin.9"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook.png" alt=""></a></div></li>
                                <li><div><a href="https://twitter.com/7S13xmk862PQGdu"><img src="<?php echo get_template_directory_uri() ?>/assets/img/twitter.png" alt=""></a></div></li>
                                <li><div><a href="https://www.instagram.com/konstantin_ishere/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram.png" alt=""></a></div></li>
                            </ul>
                        </div>
                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
                <ul class="tm-bg-controls-wrapper">
                    <li class="tm-bg-control active" data-id="0"></li>
                    <li class="tm-bg-control" data-id="1"></li>
                    <li class="tm-bg-control" data-id="2"></li>
                </ul>
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Copyright 2020
                        | <a rel="nofollow" target="_parent" href="https://www.facebook.com/konstantin.surnin.9"
                            class="tm-text-link">Konstantin_Surnin</a></p>
                </footer>
            </div>
        </div>

        <div class="tm-bg">
            <!-- Diagonal background design -->
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

</body>

</html>