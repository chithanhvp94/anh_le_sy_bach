<?php
class Storefront_filter{
    public function __construct(){
        add_action('storefront_menu',array($this,'storefront_menu'),10,2);
    }

    public function storefront_menu($id=null,$arg=null){
        if(isset($id)){
            global $storefront_template_menu;
            $id=(int) $id;

            if(isset($arg) && is_array($arg)){
                $args=$arg;
                if(!$args['walker']){
                    $args['walker']=$storefront_template_menu;
                }
                if(!$args['menu']){
                    $args['menu']=$id;
                };

            }
            else{
                $args= array(
                    'menu' =>$id,
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
                    'items_wrap' => '<ul id="%1$s" >%3$s</ul>',
                    'item_spacing' => 'preserve',
                    'depth' => 0,
                    'walker' =>$storefront_template_menu,
                    'theme_location' => '' );
            };
            wp_nav_menu($args);
        };
    }
}
new Storefront_filter();