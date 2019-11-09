<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ladystars_theme
 */

get_header();
?>
    <div class="fw-page-builder-content">
        <section class="fw-main-row ">
            <div class="full-width">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding slider">

                            <div class="col-xs-12 col-sm-12 col-md-12 menu-template">
                                <div class="container padding10">
                                    <?php
                                    $args= array(
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
                                        'items_wrap' => '<ul id="menu-desktop">%3$s</ul>',
                                        'item_spacing' => 'preserve',
                                        'depth' => 0,
                                        'theme_location' => 'menu-1' );

                                    wp_nav_menu($args);
                                    ?>
                                </div>
                            </div>

                            <div id="layerslider_1" class="ls-wp-container fitvidsignore" style="width:1280px;height:720px;margin:0 auto;margin-bottom: 0px;">
                                <div class="ls-slide" data-ls="duration:5000;transition2d:all;transition3d:all;kenburnsscale:1.2;"><img width="2048" height="1150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/slider1.jpg" class="ls-bg" alt="">
                                    <h1 style="top:269px;left:198px;text-align:initial;font-weight:700;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;color:#ffffff;font-size:70px;" class="ls-l" data-ls="offsetxin:left;">Cho mái tóc dài và dày hơn</h1>
                                    <p style="top:379px;left:491px;text-align:initial;font-weight:400;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;color:#ffffff;font-size:18px;padding-top:15px;padding-right:25px;padding-bottom:15px;padding-left:25px;background:#eb355c;" class="ls-l" data-ls="offsetyin:-100lh;">TÓC GIẢ BẰNG TÓC THẬT</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="fw-main-row ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding homepage-featured-content">
                            <div class="container padding10">

                                <div class="theme-container text-center">
                                    <h1 class="title-secondary-wide">LADYSTARS</h1>
                                    <div class="col-xs-12 col-sm-12 col-md-12 text-secondary-wide">
                                        <p>LADYSTARS là thương hiệu tóc giả cao cấp tóc giả làm bằng tóc thật số 1 Việt Nam. Sản phẩm được làm bằng tóc thật 100% tóc thật với chất lượng cao nhất đảm bảo chất lượng hoàn mỹ</p>
                                    </div>

                                    <a href="https://ladystars.vn/toc-that-nguyen-dau/" class="button-outline">Learn more</a>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <p></p>
                        <div id="layerslider_2" class="ls-wp-container fitvidsignore" style="width:1280px;height:550px;margin:0 auto;margin-bottom: 0px;">
                            <div class="ls-slide" data-ls="kenburnsscale:1.2;"><img width="1920" height="852" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/homepage-video_2048x2048.jpg" class="ls-bg" alt="">
                                <p style="top:148px;left:456px;text-align:initial;font-weight:400;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;font-size:66px;" class="ls-l">Trước &amp; Sau</p>
                                <a style="" class="ls-l" href="https://www.youtube.com/watch?v=-QUAmquh3Hc" target="_self" data-fancybox="">
                                    <div style="&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Your Website Title&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt; &lt;!-- Load Facebook SDK for JavaScript --&gt;
&lt;div id=&quot;fb-root&quot;&gt;&lt;/div&gt;
&lt;script&gt;(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = &quot;//connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.6&quot;;
fjs.parentNode.insertBefore(js, fjs);
}(document, &#39;script&#39;, &#39;facebook-jssdk&#39;));&lt;/script&gt; &lt;!-- Your embedded video player code --&gt;
&lt;div class=&quot;fb-video&quot; data-href=&quot;https://www.facebook.com/tocgialadystars/videos/1484813444972504/&quot; data-width=&quot;auto&quot; data-show-text=&quot;false&quot; data-autoplay=&quot;true&quot;&gt;
&lt;div class=&quot;fb-xfbml-parse-ignore&quot;&gt;
&lt;blockquote cite=&quot;https://www.facebook.com/tocgialadystars/videos/1484813444972504/&quot;&gt;
&lt;a href=&quot;https://www.facebook.com/tocgialadystars/videos/1484813444972504/&quot;&gt;How to Share With Just Friends&lt;/a&gt;
&lt;p&gt;How to share with just friends.&lt;/p&gt;
Posted by &lt;a href=&quot;https://www.facebook.com/facebook/&quot;&gt;Facebook&lt;/a&gt; on Friday, December 5, 2014
&lt;/blockquote&gt;
&lt;/div&gt;
&lt;/div&gt; &lt;/body&gt;
&lt;/html&gt;
;top:275px;left:520px;text-align:initial;font-weight:400;font-style:normal;text-decoration:none;wordwrap:false;opacity:1;font-size:24px;" class=" data-fancybox">CLICK XEM VIDEO</div>
                                </a>
                                <div style="top:495px;left:466px;text-align:initial;font-weight:400;font-style:italic;text-decoration:none;wordwrap:false;opacity:1;font-size:16px;" class="ls-l">Trước và sau khi sử dụng tóc giả bằng tóc thật</div>
                            </div>
                        </div>
                        <p></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-template">
                            <div class="box-center">

                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-carousel owl-theme box-template-home">

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center item-box-template">
                                        <a href="https://ladystars.vn/toc-that-nguyen-dau/"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/homepage-thumbnails-1_grande.jpg"> </a>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-item-box-template">
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box">
                                                <h2>Tóc thật nguyên đầu</h2>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-items-box-template">
                                                Đa dạng các mẫu tóc nguyên đầu nam nữ
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                <a href="https://ladystars.vn/toc-that-nguyen-dau/" class="button-outline">Shop Collection</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center item-box-template">
                                        <a href="https://ladystars.vn/toc-kep-that/"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/homepage-thumbnails-2_grande.jpg"> </a>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-item-box-template">
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box">
                                                <h2>Tóc kẹp bằng tóc thật</h2>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-items-box-template">
                                                Những mẫu tóc kẹp thật mới nhất
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                <a href="https://ladystars.vn/toc-kep-that/" class="button-outline">Shop Collection</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12 text-center item-box-template">
                                        <a href="https://ladystars.vn/toc-mai-hoi/"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/homepage-thumbnails-3_grande.jpg"> </a>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-item-box-template">
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box">
                                                <h2>Tóc mái hói</h2>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-items-box-template">
                                                Mẫu tóc mái hói đẹp nhất
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                <a href="https://ladystars.vn/toc-mai-hoi/" class="button-outline">Shop Collection</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="fw-divider-space" style="padding-top: 40px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center title-shop-home">ĐƠN GIẢN LỰA CHỌN MẪU TÓC </h2>
                        <div class="list-shop-template">
                            <ul>
                                <li><a href="https://ladystars.vn/#1">Chọn loại tóc</a> </li>

                                <li><a href="https://ladystars.vn/#">Chọn mẫu tóc</a> </li>

                                <li><a href="https://ladystars.vn/#">Gọi điện hoặc tới shop để được tư vấn</a> </li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="shop-text-secondary-dark">
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding">

                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-shop-text-secondary-dark">
                                    1 . Chọn loại tóc </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-shop-text-secondary-dark text-center">
                                    <p>Tóc giả làm bằng 100%&nbsp; tóc thật LADYSTARS có rất nhiều loại, dưới đây là một số loại phổ&nbsp; biến, bạn có thể vào shop để lựa chọn cho mình mẫu phù hợp</p>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="fw-divider-space" style="padding-top: 30px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="box-center-shop-template-home">

                            <div class="box-center-shop-template-home">
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-carousel owl-theme box-div-shop-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 items-box-div-shop-template">
                                        <a href="https://ladystars.vn/toc-that-nguyen-dau/"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-bang-toc-that-1.jpg"> </a>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-secondary-wide-shop">
                                            <h2>Tóc thật nguyên đầu</h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-secondary-dark-shop">
                                            Tóc thật nguyên bộ đội đầu
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                            <a href="https://ladystars.vn/toc-that-nguyen-dau/" class="button-outline">Select</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 items-box-div-shop-template">
                                        <a href="https://ladystars.vn/toc-kep-that/"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-kep-bang-toc-that-3.jpeg"> </a>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-secondary-wide-shop">
                                            <h2>Tóc kẹp thật         </h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-secondary-dark-shop">
                                            Tóc kẹp thật cho mái tóc dài
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                            <a href="https://ladystars.vn/toc-kep-that/" class="button-outline">Select</a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 items-box-div-shop-template">
                                        <a href="https://ladystars.vn/toc-mai-hoi/"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/mai-hoi-nu-bang-toc-that-7.jpg"> </a>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-secondary-wide-shop">
                                            <h2>Tóc mái hói             </h2>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-secondary-dark-shop">
                                            Tóc mái hói da đầu </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                            <a href="https://ladystars.vn/toc-mai-hoi/" class="button-outline">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-video-template">
                            <div class="box-center-shop">
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-video-template-shop-secondary text-center">

                                    <div class="left">
                                        <a href="https://youtu.be/F_-H9eX1nzk" data-fancybox="">
                                            <span class="fa fa-play"></span>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-kep-bang-toc-that-1.jpg"> </a>
                                    </div>

                                    <div class="right">
                                        <div class="title-right-box-shop-video">
                                            <span> XEM VIDEO</span>
                                        </div>

                                        <div class="text-info-watch-video">
                                            Cách đội tóc giả bằng tóc thật nguyên đầu </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <p style="text-align: center;"><em>Bạn cần tư vấn? Hãy gọi ngay hoặc tới shop để được tư vấn .</em></p>
                        <p style="text-align: center;">Hotline: 0976.356.916</p>
                        <p style="text-align: center;"><strong>Hà Nội</strong>: <em>Số 7 ngách 48 ngõ 117 Thái Hà, Đống Đa</em></p>
                        <p style="text-align: center;"><strong>Hồ Chí Minh</strong>: <em>386/3K Lê Văn Sỹ, Quận 3( gần cầu Lê Văn Sỹ)</em></p>
                        <p>&nbsp;</p>
                    </div>
                </div>

            </div>
        </section>
        <section class="fw-main-row " style="background-color:#f7f0ee;">
            <div class="full-width">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding even-more-reasons-to-love-luxy">

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-event-more-love-luxy">
                                LADYSTARS LÀ LỰA CHỌN SỐ 1 </div>

                            <div class="box-template-event">

                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding current-even-more-reasons-to-love-luxy owl-carousel owl-theme">

                                    <div class="col-xs-12 col-sm-12 col-md-12 padding10 items-event">
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center icon-box-event">
                                            <i class="fa fa-codepen"></i>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-event text-center">
                                            CHẤT LƯỢNG </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-event">
                                            <p>Sản phẩm LADYSTARS được làm bằng công nghệ cao&nbsp; từ 100% tóc thật chất lượng cao</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 padding10 items-event">
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center icon-box-event">
                                            <i class="fa fa-area-chart"></i>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-event text-center">
                                            TƯ VẤN MIỄN PHÍ </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-event">
                                            <p>LADYSTARS tư vấn miễm phí cho mọi người về các vấn đề liên quan đến nhu cầu sản phẩm</p>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12 padding10 items-event">
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center icon-box-event">
                                            <i class="fa fa-car"></i>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-event text-center">
                                            GIAO HÀNG </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-event">
                                            <p>LADYSTARS ship tới tất cả 64 tỉnh thành bằng cách liên hệ đặt hàng</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="fw-main-row ">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="fw-divider-space" style="padding-top: 50px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <p style="text-align: center;">KHÁM PHÁ MỌI THÔNG TIN VỀ TÓC GIẢ BẰNG TÓC THẬT</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding get-inspired-with-our-hair">
                            <div class="container padding10">

                                <div class="box-get-inspired-with-our-hair">

                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-content-get-inspired-with-our-hair">
                                        <div class="col-xs-12 col-sm-6 col-md-6 nopadding left">
                                            <a href="https://ladystars.vn/10-kieu-toc-gia-nu-nguyen-dau-dep-den-ngan-ngo-khien-chi-em-dung-ngoi-khong-yen/">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/Reasons_to_wear_hair_extensions_750x750.jpg"> </a>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 nopadding right" style="background-color: ">

                                            <div class="ratio-get-inspired-with-our-hair">

                                                <div class="position-ratio-get-inspired-with-our-hair">

                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-ratio-get-inspired-with-our-hair">
                                                        <a href="https://ladystars.vn/10-kieu-toc-gia-nu-nguyen-dau-dep-den-ngan-ngo-khien-chi-em-dung-ngoi-khong-yen/"> 10 MẪU TÓC GIẢ ĐẸP CHO BẠN GÁI</a>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box-ratio-get-inspired-with-our-hair">
                                                        <a href="https://ladystars.vn/10-kieu-toc-gia-nu-nguyen-dau-dep-den-ngan-ngo-khien-chi-em-dung-ngoi-khong-yen/"> 10 mẫu tóc giả đẹp cho bạn gái</a>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-ratio-box-content-get-inspired-with-our-hair">
                                                        <p>Tóc giả bằng tóc thật giúp bạn có mái tóc dài và dày hơn. Đây là 10 mẫu tóc giả cho các cô nàng lựa chọn</p>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center readmore-link">
                                                        <a href="https://ladystars.vn/10-kieu-toc-gia-nu-nguyen-dau-dep-den-ngan-ngo-khien-chi-em-dung-ngoi-khong-yen/">Continue reading</a>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding get-inspired-with-our-hair">

                            <div class="box-get-inspired-with-our-hair">

                                <div class="row10">

                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-post-cat-home owl-carousel owl-theme">
                                        <div class="col-xs-12 col-sm-12 col-md-12 padding10 text-center items-post-cat-home">
                                            <a href="https://ladystars.vn/ly-do-nen-su-dung-toc-gia-sieu-da-dau/"><img width="790" height="714" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-sieu-da-dau-1s.jpg" class="attachment-full size-full wp-post-image" alt=""></a>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center">
                                                <a href="https://ladystars.vn/ly-do-nen-su-dung-toc-gia-sieu-da-dau/">5 lý do nên sử dụng tóc giả siêu da đầu</a>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                <a href="https://ladystars.vn/ly-do-nen-su-dung-toc-gia-sieu-da-dau/" class="button-pill">Hair Extensions</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 padding10 text-center items-post-cat-home">
                                            <a href="https://ladystars.vn/toc-gia-sieu-da-dau-la-gi/"><img width="790" height="714" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-sieu-da-dau-1s.jpg" class="attachment-full size-full wp-post-image" alt=""></a>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center">
                                                <a href="https://ladystars.vn/toc-gia-sieu-da-dau-la-gi/">Tóc giả siêu da đầu là gì ?</a>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                <a href="https://ladystars.vn/toc-gia-sieu-da-dau-la-gi/" class="button-pill">Hair Extensions</a>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 padding10 text-center items-post-cat-home">
                                            <a href="https://ladystars.vn/top-5-dia-chi-mua-toc-gia-nam-o-ha-noi/"><img width="790" height="816" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/5-dia-chi-mua-toc-gia-nam-o-ha-noi-1.jpg" class="attachment-full size-full wp-post-image" alt=""></a>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center">
                                                <a href="https://ladystars.vn/top-5-dia-chi-mua-toc-gia-nam-o-ha-noi/">Top 5 địa chỉ mua tóc giả nam ở Hà Nội</a>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                <a href="https://ladystars.vn/top-5-dia-chi-mua-toc-gia-nam-o-ha-noi/" class="button-pill">Hair Extensions</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="col-xs-12 col-sm-12 col-md-12 text-center title-page-featured">
                            Like fanpage theo dõi sản phẩm mới nhất của LADYSTARS</div>

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding content-box-page-featured">
                            <p>
                                <iframe style="border: none; overflow: hidden;" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftocgialadystars&amp;tabs&amp;width=340&amp;height=214&amp;small_header=false&amp;adapt_container_width=false&amp;hide_cover=false&amp;show_facepile=true&amp;appId" width="340" height="214" frameborder="0" scrolling="no"></iframe>
                            </p>
                            <p><img class="wp-image-252 aligncenter" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/press_2048x2048-1024x100.png" alt="" width="553" height="54"></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">

                        <div class="fw-divider-space" style="padding-top: 50px;"></div>
                    </div>
                </div>

            </div>
        </section>
        <section class="fw-main-row " style="background-color:#f9f9f9;">
            <div class="full-width">
                <div class="row">
                    <div class="col-xs-12">

                        <div class="fw-divider-space" style="padding-top: 70px;"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <p style="text-align: center; font-size: 18px;">HÃY XEM THÊM NHỮNG HÌNH ẢNH SẢN PHẨM VỚI</p>
                        <p style="text-align: center; font-size: 26px;">#LADYSTARS</p>
                        <p style="text-align: center;"><em>&nbsp;trên Instagram. We love our fans!</em></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding shop-the-look owl-carousel owl-theme">

                            <div class="item">
                                <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product3502">
                                    <div class="box-shop-the-look" style="background: url(&#39;https://ladystars.vn/wp-content/uploads/2019/01/toc-gia-co-da-dau-bang-toc-that-mai-thua-5s-300x286.jpg&#39;) no-repeat center;background-size: cover;">
                                        <span class="shop-the-look-btn">Shop the look</span>
                                    </div>
                                </a>

                                <div id="modal-quick-view-product3502" class="modal-shop-product hidden-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6 left">

                                                <div id="modal-quick-carousel-example-generic3502" class="carousel slide" data-ride="carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#modal-quick-carousel-example-generic3502" data-slide-to="0" class="active"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-co-da-dau-bang-toc-that-mai-thua-5s.jpg" alt="Tóc giả có da đầu bằng tóc thật mái thưa">
                                                        </div>
                                                    </div>

                                                    <a class="left carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3502" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3502" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 right">

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box">
                                                        <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-co-da-dau-bang-toc-that-mai-thua-5s-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""> </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box">
                                                    </div>
                                                    <span class="title-box-template">Tóc giả có da đầu bằng tóc thật mái thưa</span>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <a href="javascript:;" class="btnaddtocart">Contact</a>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description">
                                                    Mẫu tóc giả có da đầu bằng tóc thật mái thưa mang đến phong cách dịu dàng, nhẹ nhàng cho cô gái. Bạn có thể đồng hành cùng sản phẩm này tới nhiều nơi, sử dụng với nhiều đối tượng khác nhau. Nhất là khi sở hữu trong tay mẫu sản phẩm chính hãng từ […]...
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product3496">
                                    <div class="box-shop-the-look" style="background: url(&#39;https://ladystars.vn/wp-content/uploads/2018/12/toc-gia-nu-bang-toc-that-cub-ngang-vai-2S-300x214.jpg&#39;) no-repeat center;background-size: cover;">
                                        <span class="shop-the-look-btn">Shop the look</span>
                                    </div>
                                </a>

                                <div id="modal-quick-view-product3496" class="modal-shop-product hidden-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6 left">

                                                <div id="modal-quick-carousel-example-generic3496" class="carousel slide" data-ride="carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#modal-quick-carousel-example-generic3496" data-slide-to="0" class="active"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nu-bang-toc-that-cub-ngang-vai-2S.jpg" alt="Tóc giả nữ bằng tóc thật cúp ngang vai dịu dàng">
                                                        </div>
                                                    </div>

                                                    <a class="left carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3496" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3496" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 right">

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box">
                                                        <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nu-bang-toc-that-cub-ngang-vai-2S-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""> </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box">
                                                    </div>
                                                    <span class="title-box-template">Tóc giả nữ bằng tóc thật cúp ngang vai dịu dàng</span>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <a href="javascript:;" class="btnaddtocart">Contact</a>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description">
                                                    Một cô gái dịu dàng sẽ không thể cưỡng lại sức hấp dẫn của mẫu tóc giả nữ bằng tóc thật cúp ngang vai từ LADYSTARS. Kiểu dáng đơn giản, phong cách nhẹ nhàng, lọn tóc mềm mại và mượt mà là những gì bạn sẽ được trải nghiệm từ sản phẩm này. Ứng dụng […]...
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product3486">
                                    <div class="box-shop-the-look" style="background: url(&#39;https://ladystars.vn/wp-content/uploads/2018/12/toc-that-nguyen-dau-tem-xoan-7S-240x300.jpg&#39;) no-repeat center;background-size: cover;">
                                        <span class="shop-the-look-btn">Shop the look</span>
                                    </div>
                                </a>

                                <div id="modal-quick-view-product3486" class="modal-shop-product hidden-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6 left">

                                                <div id="modal-quick-carousel-example-generic3486" class="carousel slide" data-ride="carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#modal-quick-carousel-example-generic3486" data-slide-to="0" class="active"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-that-nguyen-dau-tem-xoan-7S.jpg" alt="Tóc thật nguyên đầu tém xoăn light cực cá tính">
                                                        </div>
                                                    </div>

                                                    <a class="left carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3486" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3486" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 right">

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box">
                                                        <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-that-nguyen-dau-tem-xoan-7S-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""> </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box">
                                                    </div>
                                                    <span class="title-box-template">Tóc thật nguyên đầu tém xoăn light cực cá tính</span>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <a href="javascript:;" class="btnaddtocart">Contact</a>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description">
                                                    Bạn là một cô nàng cá tính và từ phong cách ăn mặc cho tới mái tóc đều muốn thể hiện điều này. Nhưng sự thật là không phải ai cũng sở hữu được một mẫu tóc tự nhiên đẹp để có thể thực hiện tạo kiểu. Giải pháp thông minh cho bạn lúc này […]...
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product3466">
                                    <div class="box-shop-the-look" style="background: url(&#39;https://ladystars.vn/wp-content/uploads/2018/12/toc-gia-nu-bob-nguyen-dau-toc-that-1S-300x281.jpg&#39;) no-repeat center;background-size: cover;">
                                        <span class="shop-the-look-btn">Shop the look</span>
                                    </div>
                                </a>

                                <div id="modal-quick-view-product3466" class="modal-shop-product hidden-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6 left">

                                                <div id="modal-quick-carousel-example-generic3466" class="carousel slide" data-ride="carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#modal-quick-carousel-example-generic3466" data-slide-to="0" class="active"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nu-bob-nguyen-dau-toc-that-1S.jpg" alt="Tóc giả nữ bob bằng tóc thật cá tính">
                                                        </div>
                                                    </div>

                                                    <a class="left carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3466" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3466" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 right">

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box">
                                                        <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nu-bob-nguyen-dau-toc-that-1S-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""> </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box">
                                                    </div>
                                                    <span class="title-box-template">Tóc giả nữ bob bằng tóc thật cá tính</span>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <a href="javascript:;" class="btnaddtocart">Contact</a>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description">
                                                    Bạn là một cô gái cá tính? Bạn muốn thay đổi diện mạo mái tóc để phù hợp với tính cách đó nhưng không hại tới mẫu tóc tự nhiên đang có? Lúc này giải pháp thông minh cho bạn chính là mẫu tóc giả nữ bob bằng tóc thật cá tính từ LADYSTARS. Một […]...
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product3460">
                                    <div class="box-shop-the-look" style="background: url(&#39;https://ladystars.vn/wp-content/uploads/2018/12/toc-gia-nu-bang-toc-that-co-da-dau-2S-300x269.jpg&#39;) no-repeat center;background-size: cover;">
                                        <span class="shop-the-look-btn">Shop the look</span>
                                    </div>
                                </a>

                                <div id="modal-quick-view-product3460" class="modal-shop-product hidden-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6 left">

                                                <div id="modal-quick-carousel-example-generic3460" class="carousel slide" data-ride="carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#modal-quick-carousel-example-generic3460" data-slide-to="0" class="active"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nu-bang-toc-that-co-da-dau-2S.jpg" alt="Tóc giả nữ bằng tóc thật có da đầu siêu tự nhiên">
                                                        </div>
                                                    </div>

                                                    <a class="left carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3460" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3460" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 right">

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box">
                                                        <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nu-bang-toc-that-co-da-dau-2S-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""> </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box">
                                                    </div>
                                                    <span class="title-box-template">Tóc giả nữ bằng tóc thật có da đầu siêu tự nhiên</span>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <a href="javascript:;" class="btnaddtocart">Contact</a>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description">
                                                    Chắc chắn nhiều cô nàng hiện đại đã không xa lạ với sản phẩm tóc giả – phụ kiện làm đẹp tiện dụng. Và với mẫu tóc giả nữ bằng tóc thật có da đầu đến từ LADYSTARS bạn sẽ được trải nghiệm không chỉ là sự khác biệt đến từ tóc thật 100% mà […]...
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="item">
                                <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product3450">
                                    <div class="box-shop-the-look" style="background: url(&#39;https://ladystars.vn/wp-content/uploads/2018/12/toc-gia-nguyen-dau-bang-toc-that-co-da-dau-1S-300x190.jpg&#39;) no-repeat center;background-size: cover;">
                                        <span class="shop-the-look-btn">Shop the look</span>
                                    </div>
                                </a>

                                <div id="modal-quick-view-product3450" class="modal-shop-product hidden-template">
                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal">
                                        <div class="row">

                                            <div class="col-xs-12 col-sm-6 col-md-6 left">

                                                <div id="modal-quick-carousel-example-generic3450" class="carousel slide" data-ride="carousel">

                                                    <ol class="carousel-indicators">
                                                        <li data-target="#modal-quick-carousel-example-generic3450" data-slide-to="0" class="active"></li>
                                                    </ol>

                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner" role="listbox">
                                                        <div class="item active">
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nguyen-dau-bang-toc-that-co-da-dau-1S.jpg" alt="Tóc giả nguyên đầu bằng tóc thật có da đầu hiện đại">
                                                        </div>
                                                    </div>

                                                    <a class="left carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3450" role="button" data-slide="prev">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="https://ladystars.vn/#modal-quick-carousel-example-generic3450" role="button" data-slide="next">
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>

                                            </div>

                                            <div class="col-xs-12 col-sm-6 col-md-6 right">

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box">
                                                        <img width="150" height="150" src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/toc-gia-nguyen-dau-bang-toc-that-co-da-dau-1S-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""> </div>
                                                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box">
                                                    </div>
                                                    <span class="title-box-template">Tóc giả nguyên đầu bằng tóc thật có da đầu hiện đại</span>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                                    <a href="javascript:;" class="btnaddtocart">Contact</a>
                                                </div>

                                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description">
                                                    Bạn nhàm chán với mẫu tóc kiểu xoăn bồng bềnh? Bạn muốn tóc của mình sẽ là kiểu dáng thẳng mượt, đơn giản? Mọi nhu cầu sẽ được giải quyết ngay với kiểu tóc giả nguyên đầu bằng tóc thật có da đầu từ LADYSTARS. Khám phá xem vì sao nó dành được nhiều sự […]...
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
<?php
get_footer();
