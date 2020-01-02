<div class="col-xs-12 col-sm-4 col-md-4 right-most-popular">
    <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2 nopadding">
        <form action="<?=home_url(); ?>" method="get" class="form-search-sidebar-post" autocomplete="off">
            <input type="text" name="s" placeholder="Search" class="search-post-input">
            <button type="submit" value="submit"><i class="fa fa-search"></i></button>
        </form>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-sidebar">LATEST POSTS</div>
        <?php
        $wp=new WP_Query("showposts=4");
        if($wp->have_posts()):
            while ($wp->have_posts()):
                $wp->the_post();
                ?>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-latest-posts">
                    <div class="left"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></div>
                    <div class="right">
                        <div class="title-taxonomy"><?php the_category(' '); ?></div>
                        <a href="<?php the_permalink(); ?>" class="link-post"><?php the_title(); ?></a>
                    </div>
                </div>
            <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
    </div>
</div>