<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding get-inspired-with-our-hair" >

    <div class="box-get-inspired-with-our-hair" >

        <div class="row10" >

            <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-post-cat-home owl-carousel owl-theme" >
                <?php
                $catid=(int) $atts['menuselect'];
                $wp=new WP_Query("showposts=3&cat=".$catid);
                if($wp->have_posts()):
                while ($wp->have_posts()):
                $wp->the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-12 padding10 text-center items-post-cat-home" >
                    <a href="<?php the_permalink(); ?>" ><?php the_post_thumbnail('full'); ?></a>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center" >
                        <a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                        <a href="<?php the_permalink(); ?>" class="button-pill" ><?=__('Hair Extensions','akasa'); ?></a>
                    </div>
                </div>
                <?php
                endwhile;
                endif;
                wp_reset_query();
                wp_reset_postdata();
                ?>

            </div>


        </div>

    </div>


</div>
