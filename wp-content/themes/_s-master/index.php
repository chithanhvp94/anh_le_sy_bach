<?php global $redux_theme;?>
<?php
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <section class="t_m_s1">
                <div class="container">
                    <div class="theme-container text-center">
                        <h1 class="title-secondary-wide"><?=$redux_theme['text-title-s1'];?></h1>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-secondary-wide">
                            <?=$redux_theme['text-editer-s1'];?>
                        </div>
                        <a href="<?=$redux_theme['text-linkbutton-s1'];?>" class="button-outline"><?=$redux_theme['text-titlebutton-s1'];?></a>
                    </div>
                </div>
            </section>
            <section class="t_m_s2">
                <div class="t_home_page_videos2">
                    <img src="<?=$redux_theme['media_pri_s2']['url'];?>" alt="">
                </div>
                <div class="container">
                    <div class="ts21"><?=$redux_theme['text-title-s2'];?></div>
                    <div class="ts22">
                        <div class="ts22tite"><?=$redux_theme['text-clickvideo-s2'];?></div>
                        <div class="ts22video"></div>
                    </div>
                    <div class="ts23"><?=$redux_theme['text-title1-s2'];?></div>
                </div>
            </section>
            <section class="t_m_s3">
                <div class="container">
                    <div class="t_s3_slider t_slider_type_1 owl-carousel owl-theme">
                        <?php
                        $ttt_slider = $redux_theme['opt-slides-s3'];
                        foreach($ttt_slider as $t_items){?>
                            <div class="t_item">
                                
                                <div class="t_img">
                                    <a href="<?php echo $t_items['url']?>">
                                        <img src="<?php echo $t_items['image']?>">
                                    </a>
                                </div>
                                <div class="t_title">
                                    <?php echo $t_items['title']?>
                                </div>
                                <div class="t_description">
                                    <?php echo $t_items['description']?>
                                </div>
                                <div class="t_buttonlink">
                                    <a href="<?php echo $t_items['url']?>">Chi tiết</a>
                                </div>
                            </div>
                        <?php } //end foreach
                        ?>
                    </div>
                </div>
            </section>
            <section class="t_m_s4">
                <div class="main">
                    <div class="ts41"><?=$redux_theme['text-title-s4'];?></div>
                    <div class="list-shop-template">
                        <ul>
                            <?php
                        $ttt_slider = $redux_theme['opt-slides-s4'];
                        foreach($ttt_slider as $t_items){?>
                            <li><a href="<?php echo $t_items['url']?>"><?php echo $t_items['title']?></a></li>
                            <?php } //end foreach
                        ?>
                        </ul>
                    </div>
                    <?php if($redux_theme['opt-required-s4a']){?>
                    <div class="t_content_sections4 t_content_sections41">
                        <?php echo $redux_theme['opt-editor-s4a'];?>
                    </div>
                    <?php }?>
                    <?php if($redux_theme['opt-required-s4b']){?>
                    <div class="t_content_sections4 t_content_sections42">
                        <?php echo $redux_theme['opt-editor-s4b'];?>
                    </div>
                    <?php }?>
                    <?php if($redux_theme['opt-required-s4c']){?>
                    <div class="t_content_sections4 t_content_sections43">
                        <?php echo $redux_theme['opt-editor-s4b'];?>
                    </div>
                    <?php }?>
                    <?php if($redux_theme['opt-slides-s4b'] != '' || $redux_theme['opt-slides-s4b'] != null){?>
                    <div class="t_list_sanpham t_slider_type_1 owl-carousel owl-theme">
                        <?php
                        $ttt_slider = $redux_theme['opt-slides-s4b'];
                        foreach($ttt_slider as $t_items){?>
                            <div class="t_item">
                                
                                <div class="t_img">
                                    <a href="<?php echo $t_items['url']?>">
                                        <img src="<?php echo $t_items['image']?>">
                                    </a>
                                </div>
                                <div class="t_title">
                                    <?php echo $t_items['title']?>
                                </div>
                                <div class="t_description">
                                    <?php echo $t_items['description']?>
                                </div>
                                <div class="t_buttonlink">
                                    <a href="<?php echo $t_items['url']?>">Chi tiết</a>
                                </div>
                            </div>
                        <?php } //end foreach
                        ?>
                    </div>
                    <?php }?>
                    <div class="t_text_footer_s4">
                        <?php echo $redux_theme['text-bottom-s4'];?>
                    </div>
                </div>
            </section>
            <section class="t_m_s5">
                <div class="main">
                    <div class="t_m_s5a"><?php echo $redux_theme['text-title-s5'];?></div>
                    <?php if($redux_theme['opt-slides-s5'] != '' || $redux_theme['opt-slides-s5'] != null){?>
                    <div class="t_list_danhmuc t_slider_type_2 owl-carousel owl-theme">
                        <?php
                        $ttt_slider = $redux_theme['opt-slides-s5'];
                        foreach($ttt_slider as $t_items){?>
                            <div class="t_item">
                                
                                <div class="t_img">
                                    <a href="<?php echo $t_items['url']?>">
                                        <img src="<?php echo $t_items['image']?>">
                                    </a>
                                </div>
                                <div class="t_title">
                                    <?php echo $t_items['title']?>
                                </div>
                                <div class="t_description">
                                    <?php echo $t_items['description']?>
                                </div>
                            </div>
                        <?php } //end foreach
                        ?>
                    </div>
                    <?php } //end if
                        ?>
                </div>
            </section>
            <section class="t_m_s6">
                <div class="main">
                    <div class="t_s6_title"><?=$redux_theme['text-title-s6'];?></div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="t_img">
                                <?php if($redux_theme['opt-required-s6linkpost']){?>
                                    <a href="<?=$redux_theme['opt-text-s6linkpost'];?>">
                                <?php }?>
                                <img src="<?=$redux_theme['opt-media-s6']['url'];?>" alt="">
                                <?php if($redux_theme['opt-required-s6linkpost']){?>
                                    </a>
                                <?php }?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="t_section_s6">
                                <div class="position-ratio-get-inspired-with-our-hair">
                                    <div class="t_section_s61">
                                        <?php if($redux_theme['opt-required-s6link']){?>
                                            <a href="<?=$redux_theme['opt-text-s6link'];?>">
                                        <?php }?>
                                        <?=$redux_theme['text-cat-s6'];?>
                                        <?php if($redux_theme['opt-required-s6link']){?>
                                            </a>
                                        <?php }?>
                                    </div>
                                    <div class="t_section_s62">
                                        <?php if($redux_theme['opt-required-s6linkpost']){?>
                                            <a href="<?=$redux_theme['opt-text-s6linkpost'];?>">
                                        <?php }?>
                                        <?=$redux_theme['text-titlepost-s6'];?>
                                        <?php if($redux_theme['opt-required-s6linkpost']){?>
                                            </a>
                                        <?php }?>
                                    </div>
                                    <div class="t_section_s63">
                                        <?=$redux_theme['opt-editor-s6'];?>
                                    </div>
                                    <div class="t_section_s64">
                                        <?php if($redux_theme['opt-required-s6linkpost']){?>
                                            <a href="<?=$redux_theme['opt-text-s6linkpost'];?>">
                                        <?php }?>
                                        <span class="t_xemthem">Xem thêm</span>
                                        <?php if($redux_theme['opt-required-s6linkpost']){?>
                                            </a>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
