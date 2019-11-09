<div class="col-xs-12 col-sm-12 col-md-12 nopadding header">
    <div class="container padding10">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center box-logo-mobile">
            <a href="<?=home_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/logo-0.png">
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 box-header-mobile text-left">
            <a href="#menu-template-mobile" id="btnmobile"><i class="fa fa-bars"></i></a>
        </div>
        <div class="right-header pull-right">
            <div class="form-search-template-header padding10 pull-right">
                <form action="<?php echo home_url()?>" autocomplete="off">
                    <input type="text" name="s" class="input-search" placeholder="Search">
                    <input type="hidden" name="post_type" value="product">
                    <button type="submit" class="icon-search"></button>
                </form>
            </div>
            <div class="mini-cart-header pull-right">
                <a href="javascript:;" id="btntogglemini"><span class="icon-cart"></span>
                    <span class="text-mini-cart">Cart</span>
                    <span class="cartCount-mini-cart">0</span></a>
                <div class="box-mini-cart-template">
                    <p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
                </div>
            </div>
        </div>
    </div>
</div>
