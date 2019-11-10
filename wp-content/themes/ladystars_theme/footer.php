<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ladystars_theme
 */

?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding footer">
    <div class="container padding10">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center nopadding title-footer">Sign up for promotions and weekly hair tips </div>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding grid-uniform-email-form">
            <form class="es_shortcode_form" data-es_form_id="es_shortcode_form">
                <div class="es_textbox col-xs-8 col-sm-8 col-md-8">
                    <input maxlength="225" id="es_txt_email_pg" class="es_textbox_class" name="es_txt_email_pg" type="text" placeholder="Nhập địa chỉ email của bạn">
                </div>
                <div class="es_button col-xs-4 col-sm-4 col-md-4">
                    <input id="es_txt_button_pg" type="button" name="es_txt_button_pg" class="es_textbox_button es_submit_button btnsubmit" value="Đăng ký">
                </div>
                <div class="es_msg" id="es_shortcode_msg"><span id="es_msg_pg"></span></div>
            </form>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-footer">
            <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-menu-footer">
                <div class="col-xs-12 col-sm-6 col-md-3 items-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding header-items-footer"><?php
                        $menu_object = get_menu_by_location('menu-footer-info');
                        echo $menu_object->name;
                        ?></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-list-items-footer">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer-info',
                            'menu_id'        => '',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 items-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding header-items-footer"><?php
                        $menu_object = get_menu_by_location('menu-footer-product');
                        echo $menu_object->name;
                        ?></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-list-items-footer">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer-product',
                            'menu_id'        => '',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 items-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding header-items-footer"><?php
                        $menu_object = get_menu_by_location('menu-footer-contact');
                        echo $menu_object->name;
                        ?></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-list-items-footer">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer-contact',
                            'menu_id'        => '',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 items-footer">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding header-items-footer"><?php
                        $menu_object = get_menu_by_location( 'menu-footer-social');
                        echo $menu_object->name;
                        ?></div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-list-items-footer">
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-footer-social',
                            'menu_id'        => '',
                        ) );
                        ?>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 copyright"><p>© Ladystars 2017</p></div>
            </div>
        </div>
    </div>
</div>
<?php wp_footer(); ?>

</body>
</html>
