<?php global $redux_theme;?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <section class="t_f_s3">
            <div class="container">
                <div class="t_dangkykhuyenmai">
                    <div class="t_title_footer">ĐĂNG KÝ KHUYẾN MÃI VÀ LỜI KHUYÊN VỀ TÓC HÀNG TUẦN</div>
                    <div class="grid-uniform-email-form">
                        <form action="#" method="get">
                            <div class="es_textbox col-xs-8 col-sm-8 col-md-8">
                                <input type="text" placeholder="Nhập địa chỉ email của bạn" />
                            </div>
                            <div class="es_button col-xs-4 col-sm-4 col-md-4">
                                <input type="submit" value="Đăng ký">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="t_f_s2">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                </div>
            </div>
        </section>
        <section class="t_f_s1">
            <div class="container">
                <div class="site-info">
                    <?=$redux_theme['opt_basic_footer_editor_banquyen'];?>
                </div><!-- .site-info -->
            </div>
        </section>
	    
	</footer><!-- #colophon -->
</div><!-- #page -->
<script type='text/javascript' src='<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js'></script>
<script type='text/javascript' src='<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js'></script>
<script>
$(document).ready(function(){
    $('.t_s_slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        loop: true,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        //navText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('.t_s3_slider').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        loop: true,
//        autoplay:true,
//        autoplayTimeout:3000,
//        autoplayHoverPause:true,
        //navText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('.t_list_sanpham').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        loop: true,
//        autoplay:true,
//        autoplayTimeout:3000,
//        autoplayHoverPause:true,
        //navText : ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $('.t_list_danhmuc').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        dots:false,
        loop: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
    $(".t_toggle_menu").click(function(){
        $(".t_pri_nav #primary-menu").toggleClass("t_menu_active");
    });
});
</script>
<?php wp_footer(); ?>

</body>
</html>
