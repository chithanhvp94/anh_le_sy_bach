<?php


function box_show_add_tocart_template($id=null){
    if(isset($id)):
        $pr=new WC_Product($id);
    $title=get_the_title($id);
        $img=wp_get_attachment_image_src(get_post_thumbnail_id($id),'medium');
        $excerpt=wp_trim_words(strip_shortcodes(strip_tags(get_the_excerpt($id))),20);
        $cart_contents_count=WC()->cart->cart_contents_count;
        $get_cart_total=WC()->cart->get_cart_total();
        $woocommerce_cart_page_id=get_the_permalink(get_option('woocommerce_cart_page_id'));
        $wc_cart_totals_subtotal_html=number_format(WC()->cart->subtotal,0,'.','.').get_woocommerce_currency_symbol();
        $text[]=__('Product Add','akasa');
        $text[]=__('Your Cart','akasa');
        $text[]=__('Product','akasa');
        $text[]=__('Sub Price','akasa');
        $text[]=__('Total Product','akasa');
        $text[]=__('Total Product cart','akasa');
        $text[]=__('Continue','akasa');
        $text[]=__('Shop cart','akasa');
        $html = <<<HTML
        <div class="bg-box-show-add-tocart-templatte"></div>
        <div class="content-box-show-add-tocart-template" >

            <div class="boxinfc-add-tocart" >

                <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-content-template-add-tocart" >


                    <div class="col-xs-12 col-sm-12 col-md-6 left" >
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-success" >
                            <span class="glyphicon glyphicon-ok"></span> {$text[0]}
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding" >
                            <div class="row10">
                                <div class="col-xs-12 col-sm-5 padding10 text-center" >
                                    <img src="{$img[0]}" />
                                </div>

                                <div class="col-xs-12 col-sm-7 padding10 info-image-box-show">
                                    {$excerpt}...
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding name-product-box" >
                                        {$title}
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box-show" >
                                        {$pr->get_price_html()}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-6 right" >


                        <p id="txtcartmini"><strong>{$text[1]}</strong> :( {$cart_contents_count} {$text[2]}) <span class="iconedit"></span>
                        </p>

                        <p class="summary-main-table-mtm"> {$text[3]}: <span class="subprice">
                           {$wc_cart_totals_subtotal_html}</span></p>


                        <div class="col-xs-12 col-sm-12 nopadding" id="totalpriceajax">
                            <div class="col-xs-12 col-sm-6 nopadding">
                                <strong>{$text[4]}</strong> ({$text[5]})
                            </div>
                            <div class="col-xs-12 col-sm-6 nopadding total-price-template">
                                {$get_cart_total}
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 nopadding text-center" >
                            <a href="javascript:;" class="event-close-box">{$text[6]}</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-dm-6 nopadding text-center" >
                            <a href="{$woocommerce_cart_page_id}" class="link-to-cart">{$text[7]}</a>
                        </div>



                    </div>


                </div>

            </div>

        </div>
     
HTML;
        return $html;
    endif;
}
