<?php

// Variable declaration for ACF
// Footer
$footer_icon_repeater = get_fields('footer_icon_repeater');
$footer_logo = get_field('footer_logo');
$footer_copyright_top = get_field('footer_copyright_top');
$footer_copyright_down = get_field('footer_copyright_down');

?>


<footer class="footer padtop40 padbot45">
    <div class="footer_outer">
        <div class="wrapper">
            <div class="footer_inner">
                <div class="up flex align_center space_between relative">
                    <div class="social_icons">
                        <ul class="flex gap10 white">
                            <?php
                            $rows = get_field('footer_icon_repeater');
                            if ($rows) {
                                foreach ($rows as $row) {
                                    $image = $row['social_icon'];
                            ?>
                                    <li><a href="#"><?php echo $image ?></a></li>
                            <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>

                    <div class="footer_logo absolute">
                        <a href="#">
                            <img src="<?php echo $footer_logo ?>" alt="#">
                        </a>
                    </div>
                    <div class="sub_form">
                        <form action="#" class="flex align_center">
                            <input type="text" placeholder="Sign up to our newsletter">
                            <a href="#"><i class="fa-solid fa-chevron-right" style="color: var(--primary);"></i></a>
                        </form>
                    </div>
                </div>
                <div class="line">

                </div>
                <div class="down padtop25">

                    <!-- Footer menu -->
                    <?php
                    $footer_menu = array(
                        'theme_location' => 'footer-menu',
                        'container_class' => 'lists underline',
                        'container'      => 'nav',
                    );
                    wp_nav_menu($footer_menu);
                    ?>

                    <div class="copyright text_center padtop50">
                        <p class="white padbot25"><?php echo $footer_copyright_top ?></p>
                        <p><?php echo $footer_copyright_down ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>