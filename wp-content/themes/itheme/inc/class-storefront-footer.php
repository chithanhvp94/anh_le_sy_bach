<?php
class storefront_footer{
    public function __construct(){

        add_action('footer_template',array($this,'grid_uniform_email_form'));
        add_action('footer_template',array($this,'menu_footer_template'));
    }
    public function grid_uniform_email_form(){
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center nopadding title-footer" >
            <?=__('Sign up for promotions and weekly hair tips','akasa'); ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding grid-uniform-email-form" >
            <form class="es_shortcode_form" data-es_form_id="es_shortcode_form" >
			<?php // es_subbox($namefield = "NO", $desc = ""); ?>
				<div class="es_textbox col-xs-8 col-sm-8 col-md-8" >
			
                    <input onkeypress="if(event.keyCode==13) es_submit_pages(event, '<?=home_url(); ?>')" maxlength="225" id="es_txt_email_pg" class="es_textbox_class" name="es_txt_email_pg" type="text" placeholder="Nhập địa chỉ email của bạn"  />
                </div>
                <div class="es_button col-xs-4 col-sm-4 col-md-4" >
                 <input onclick="return es_submit_pages(event, '<?=home_url(); ?>')" id="es_txt_button_pg" type="button" name="es_txt_button_pg" class="es_textbox_button es_submit_button btnsubmit" value="Đăng ký" />
                
				</div>
				
				<div class="es_msg" id="es_shortcode_msg"><span id="es_msg_pg"></span></div>
			<input type="hidden" id="es_txt_name_pg" name="es_txt_name_pg" value="">
			<input type="hidden" id="es_txt_group_pg" name="es_txt_group_pg" value="">
			
            </form>
        </div>

<?php
    }

    public function menu_footer_template(){
        global $redux_theme;
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-footer" >

            <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-menu-footer" >



                <?php
                foreach ($redux_theme['opt-menu-footer'] as $key=>$value):
                ?>
                <div class="col-xs-12 col-sm-6 col-md-3 items-footer" >

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding header-items-footer" >
                        <?php
                        $menu_object = wp_get_nav_menu_object( $value);
                       echo $menu_object->name;
                        ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-list-items-footer" >
                       <?php
                       wp_nav_menu(array(
                           'menu' =>(int) $value,
                           'container' => '',
                           'container_class' => '',
                           'container_id' => '',
                           'menu_class' => '',
                           'menu_id' => '',
                           'echo' => true,
                           'fallback_cb' => 'wp_page_menu',
                           'before' => '',
                           'after' => '',
                           'link_before' => '',
                           'link_after' => '',
                           'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                           'item_spacing' => 'preserve',
                           'depth' => 0,
                           'walker' => '',
                           'theme_location' => '' ));
                       ?>
                    </div>
                </div>
                    <?php
                    endforeach;
                    $this->copyright_template();
                    ?>



            </div>
        </div>
<?php
    }

    public function copyright_template(){
        global $redux_theme;
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 copyright" >

           <?=wpautop($redux_theme['opt-copyright']); ?>

        </div>
<?php
    }
}
