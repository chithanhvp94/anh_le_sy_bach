
jQuery(document).ready(function () {

    numbereventiconsearch=1;
    jQuery(".btn-event-icon-search .fa").click(function () {
        if(numbereventiconsearch%2==0){
            jQuery(".btn-event-icon-search .box-search-form-sticky").hide();
        }
        else{

            jQuery(".btn-event-icon-search .box-search-form-sticky").show();
        }

        numbereventiconsearch++;
    });



    function menutemplate() {

        jQuery(".menu-template ul li").each(function () {
            if(jQuery(this).find("ul").length>0){
                jQuery(this).find("a").append('<span class="icon-dropdown"></span>');
                jQuery(this).find("ul li a .icon-dropdown").remove();

            }
        });


        jQuery(".scroll-menu-template .menu-sticky ul li").each(function () {
            if(jQuery(this).find("ul").length>0){
                jQuery(this).find("a").append('<span class="icon-dropdown"></span>');
                jQuery(this).find("ul li a .icon-dropdown").remove();

            }
        });

    }

    menutemplate();



        jQuery(".box-div-shop-template .items-box-div-shop-template").hover(function () {
            jQuery(".box-div-shop-template .items-box-div-shop-template").addClass("opacity60");
            jQuery(this).removeClass("opacity60");
        },function () {
            jQuery(".box-div-shop-template .items-box-div-shop-template").removeClass("opacity60");
            }
        );




    jQuery('.shop-the-look').owlCarousel({
        loop:false,
        margin:10,
        dots:false,
        nav:true,
        responsive:{

            0:{
                items:2
            },
            600:{
                items:3
            },
            900:{
                items:4
            },
            1000:{
                items:5
            },
            1200:{
                items:6
            }
        }
    });
    
    
    function heightowlitems() {
        widthshop=jQuery(".shop-the-look .item").width();
        jQuery(".shop-the-look .item").each(function () {
            jQuery(this).css({"height":widthshop+"px"});
        });
    }

    heightowlitems();
    jQuery(window).resize(function () {
        heightowlitems();
    });


    function scrollmenudk() {

        if(jQuery(window).width()>1200){

            jQuery(window).scroll(function () {


                if(jQuery(this).scrollTop()>200){

                    jQuery(".scroll-menu-template").addClass("menu-template-fix");
                }
                else{
                    jQuery(".scroll-menu-template").removeClass("menu-template-fix");
                }

            });
        }
        else{

            jQuery(".scroll-menu-template").removeClass(".menu-template-fix");
        }
    }

    scrollmenudk();
    jQuery(window).resize(function () {

        scrollmenudk();
    });


//    jQuery(window).scroll(function () {
//        scrollmenudk();
//
//        if(jQuery(this).scrollTop()>200){
//            jQuery("#backtotop").addClass("showscroll");
//
//        }
//        else{
//            jQuery("#backtotop").removeClass("showscroll");
//        }
//
//    });
//
//    jQuery("#backtotop").click(function () {
//        jQuery("html,body").animate({scrollTop:0},800);
//    });



    


    jQuery('.current-even-more-reasons-to-love-luxy').owlCarousel({
        loop:false,
        margin:0,
        dots:false,
        nav:true,
        responsive:{

            0:{
                items:1
            },
            500:{
                items:2
            },
            900:{
                items:3
            },
            1000:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });


    

    if(jQuery(window).width()>687){
        jQuery('.owl-post-cat-home').owlCarousel({
            loop:false,
            margin:0,
            dots:false,
            nav:true,
            navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
            responsive:{

                0:{
                    items:1
                },
                480:{
                    items:2
                },
                900:{
                    items:3
                },
                1000:{
                    items:3
                },
                1200:{
                    items:3
                }
            }
        });
        
        jQuery('.box-div-shop-template').owlCarousel({
            loop:false,
            margin:1,
            dots:false,
            nav:true,
            responsive:{

                0:{
                    items:1
                },
                480:{
                    items:2
                },
                900:{
                    items:3
                },
                1000:{
                    items:3
                },
                1200:{
                    items:3
                }
            }
        });
        
        jQuery('.box-template-home').owlCarousel({
            loop:false,
            margin:1,
            dots:false,
            nav:true,
            responsive:{

                0:{
                    items:1
                },
                480:{
                    items:2
                },
                900:{
                    items:3
                },
                1000:{
                    items:3
                },
                1200:{
                    items:3
                }
            }
        });
    }
    if(jQuery(window).width()<992){
        jQuery("#menu-template-mobile").mmenu();
    }

    jQuery(".list-thumbnail-product a").click(function () {

        imageclick=jQuery(this).attr("href");
        jQuery(".woocommerce-product-gallery__image img").attr("src",imageclick);
        jQuery(".woocommerce-product-gallery__image img").attr("data-src",imageclick);
        jQuery(".woocommerce-product-gallery__image img").attr("data-large_image",imageclick);
        jQuery(".woocommerce-product-gallery__image img").attr("src",imageclick);
        jQuery(".woocommerce-product-gallery__image img").attr("src",imageclick);
        jQuery(".woocommerce-product-gallery__image img").attr("src",imageclick);
        jQuery(".woocommerce-product-gallery__image img").attr("src",imageclick);
        return false;
    });

    jQuery("[data-fancybox]").fancybox();



    jQuery('.flickity-owl-template').owlCarousel({
        loop:false,
        margin:0,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{

            0:{
                items:1
            },
            380:{
                items:2
            },
            480:{
                items:3
            },
            680:{
                items:4
            },
            900:{
                items:5
            },
            1000:{
                items:7
            },
            1200:{
                items:8
            }
        }
    });


    jQuery('.top-post-header').owlCarousel({
        loop:false,
        margin:0,
        dots:false,
        nav:true,
        navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        responsive:{

            0:{
                items:1
            },
            380:{
                items:2
            },
            768:{
                items:3
            },
            1200:{
                items:3
            }
        }
    });

    
    
    jQuery("a.link-btn-add-to-cart").click(function () {


        jQuery.ajax({
            type : 'post',
            dataType: 'json',
            url :wc_add_to_cart_params.ajax_url,
            data : {
                action : 'add_to_cart_template',
                productid:jQuery(this).attr('data-id')
            },
            success : function( data ) {

                jQuery(".return-box-ajax-template").addClass('box-show-add-tocart-template');
                jQuery(".return-box-ajax-template").html(data.htmlbox);
                jQuery(".iconedit").click(function () {
                    jQuery(".return-box-ajax-template").removeClass('box-show-add-tocart-template');
                    jQuery(".return-box-ajax-template").empty();
                    return false;
                });
                jQuery("a.event-close-box").click(function () {
                    jQuery(".return-box-ajax-template").removeClass('box-show-add-tocart-template');
                    jQuery(".return-box-ajax-template").empty();
                    return false;
                });


                updateminicartscroll();
                updateminicarttemplate();

                jQuery.fancybox.close();

            }
        });


        return false;
    });

    
    function updateminicartscroll() {
        jQuery.ajax({
            type : 'post',
            url :wc_add_to_cart_params.ajax_url,
            data : {
                action : 'woocommerce_mini_cart_scroll',
                exitfc:1
            },
            success : function( data ) {
                jQuery(".top-cart").html(data);
                jQuery("a#cartToggle").click(function () {
                    jQuery(".box-mini-cart-template-scroll").fadeToggle();
                });
            }
        });
    }


    function updateminicarttemplate() {
        jQuery.ajax({
            type : 'post',
            url :wc_add_to_cart_params.ajax_url,
            data : {
                action : 'mini_cart_template',
                exitfc:1
            },
            success : function( data ) {
                jQuery(".mini-cart-header").html(data);
                jQuery("a#btntogglemini").click(function () {
                    jQuery(".box-mini-cart-template").fadeToggle();
                });
            }
        });
    }

    jQuery(".quick-view-product").click(function () {

        return false;
    });

    jQuery("a#btntogglemini").click(function () {
        jQuery(".box-mini-cart-template").fadeToggle();
    });

    jQuery("a#cartToggle").click(function () {
        jQuery(".box-mini-cart-template-scroll").fadeToggle();
    });

    jQuery(".customer-links-header li a.link-login-template").click(function () {
        jQuery(this).parent().find(".box-login-template").toggle();
        return false;
    });
    jQuery(".customer-links-header li a.link-register-template").click(function () {
        jQuery(this).parent().find(".box-login-template").toggle();
        return false;
    });
});