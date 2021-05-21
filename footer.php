    <?php wp_footer();?>
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-4 text-start">
                    <a href="mailto:info@eco-cabins.com">info@eco-cabins.com</a>
                </div>
                <div class="col-12 col-lg-4 text-center">
                    <a class="footer-brand" href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/logo.svg" alt="<?php echo get_bloginfo( 'name' );?>">
                    </a>
                </div>
                <div class="col-12 col-lg-4 text-end">
                    <ul>
                        <li>
                            <a href="#">Cookies</a>
                        </li>
                        <li>
                            <a href="#">Privacybeleid</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>