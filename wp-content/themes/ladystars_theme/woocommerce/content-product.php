<?php
global $product;
$atp = $product->get_gallery_image_ids();
$atp_first=$atp;
$atp[] = get_post_thumbnail_id(get_the_ID());
?>
<div class="col-xs-6 col-sm-4 col-md-3 item-product-loop">
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding thumbnail-product">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
            <div class="before-image-hover"><?php if($atp_first){
                    $imgsrc=wp_get_attachment_image_src($atp_first[0],'medium');?>
                    <img src="<?=$imgsrc[0]; ?>">
                <?php } ?></div>
        </a>
        <span data-fancybox="modal" data-src="#modal-quick-view-product<?=get_the_ID(); ?>" class="quick-view-product">Xem nhanh</span>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-product-loop"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center price-product-loop"><?=$product->get_price_html();?></div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center learn-more"><a href="<?php the_permalink(); ?>" class="btn-learn-more">Xem thêm</a></div>
</div>

<div id="modal-quick-view-product<?=get_the_ID();?>" class="modal-shop-product hidden-template">
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal" >
        <div class="row" >
            <div class="col-xs-12 col-sm-6 col-md-6 left" >
                <div id="modal-quick-carousel-example-generic<?=get_the_ID(); ?>" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <?php $test=0;
                        foreach ($atp as $k=>$v):?>
                            <li data-target="#modal-quick-carousel-example-generic<?=get_the_ID(); ?>" data-slide-to="<?=$test; ?>" class="<?php echo $test==0?'active':''; ?>"></li>
                            <?php $test++;
                        endforeach;?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php
                        $test=0;
                        foreach ($atp as $k=>$v):
                            ?>
                            <div class="item <?php echo $test==0?'active':''; ?>">
                                <img src="<?php $imgz=wp_get_attachment_image_src($v,'full');
                                print_r($imgz[0]);
                                ?>" alt="<?php the_title(); ?>">
                            </div>
                            <?php
                            $test++;
                        endforeach;
                        ?>
                    </div>
                    <a class="left carousel-control" href="#modal-quick-carousel-example-generic<?=get_the_ID(); ?>" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#modal-quick-carousel-example-generic<?=get_the_ID(); ?>" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 right" >
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box" >
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box" >
                        <?php echo $product->get_price_html(); ?>
                    </div>
                    <span class="title-box-template"><?php the_title(); ?></span>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                    <?php
                    if( $product->is_type( 'simple' ) ):
                        if ($product->is_in_stock() && $product->get_regular_price()):
                            ?>
                            <a href="javascript:void(0)" data-id="<?=get_the_ID(); ?>" class="link-btn-add-to-cart btnaddtocart" ><?=__('Add to cart','akasa'); ?></a>
                        <?php
                        else:
                            ?>
                            <a href="javascript:void(0)" class="btnaddtocart" ><?=__('Contact','akasa'); ?></a>
                        <?php
                        endif;
                    endif;
                    ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description" ><?=get_excerpt_by_id(50)?></div>
            </div>
        </div>
    </div>
</div>
