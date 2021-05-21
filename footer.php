    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-4 order-1 order-md-0 text-center text-md-start">
                    <a href="mailto:info@eco-cabins.com">info@eco-cabins.com</a>
                </div>
                <div class="col-12 col-md-4 order-0 order-md-1 text-center">
                    <a class="footer-brand" href="<?php echo site_url();?>">
                        <img src="<?php echo get_template_directory_uri();?>/assets/logo.svg" alt="<?php echo get_bloginfo( 'name' );?>">
                    </a>
                </div>
                <div class="col-12 col-md-4 order-2 order-md-2 text-center text-md-end">
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
    <?php wp_footer();?>
    </body>
</html>