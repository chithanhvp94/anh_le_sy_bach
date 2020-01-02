<?php
if ( ! function_exists( 'format_sdt' ) ){
    function format_sdt($sdt){
        return str_replace(array(
            ' ',
            '  ',
            '\r\n',
            '\r',
            '\n',
            '\t',
            '.',
            ''
        ), '', $sdt);
    }
}

function catch_first_image($id, $size = 'full', $icon = false) {
    if (has_post_thumbnail($id)) {
        $size = apply_filters( 'post_thumbnail_size', $size, $id );
        $image_id = get_post_thumbnail_id($id);
        $image_url = wp_get_attachment_image_src($image_id, $size, $icon);
        return $image_url[0];
    }

    global $post;
    preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    if (!$matches [1]) {
        return '';
    }

    return $matches [1] [0];
}

function get_excerpt_by_id($leng){
    global $post;
    $the_post = get_post($post->ID); //Gets post ID
    $the_excerpt = $the_post->post_content;
    $the_excerpt = strip_tags(strip_shortcodes($the_excerpt)); //Strips tags and images
    $words = explode(' ', $the_excerpt, $leng + 1);

    if(count($words) > $leng) :
        array_pop($words);
        array_push($words, '…');
        $the_excerpt = implode(' ', $words);
    endif;

    return str_replace(array(
        '\n',
        '\r',
    ), ' ', $the_excerpt);
}

function get_price_show() {
    global $product;
    if( $product->is_on_sale() ) {
        return $product->get_sale_price();
    }
    return $product->get_regular_price();
}

function related_post_template(){
    ?>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding blog-transforming">
        <div class="row10">
            <div class="col-xs-12 col-sm-12 col-md-12 nopadding related-post-template">
                <div class="col-xs-12 col-sm-12 col-md-12 padding0 post-related" ><?=__('Post Related','akasa'); ?></div>
                <?php
                $all_tags = get_tags();
                $tag_id = array();
                foreach( $all_tags as $tag ) {
                    $tag_id[] = $tag->term_id;
                }
                $args = array(
                    'showposts' => 3,
                    'tag__in' => $tag_id
                );
                $wp=new WP_Query($args);
                if($wp->have_posts()):
                    while ($wp->have_posts()):
                        $wp->the_post();
                        ?>
                        <div class="col-xs-6 col-sm-4 col-md-4 padding10 text-center items-post-cat-home">
                            <a class="img_archive" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center"><a href="<?php the_permalink(); ?>" class="button-pill"><?=__('Hair Extensions','akasa'); ?></a></div>
                        </div>
                    <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <?php
}
