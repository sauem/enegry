<?php
?>
<section class="page_slider page_slider2 ds">
    <div class="flexslider" data-nav="false">
        <ul class="slides">
            <?php
            query_posts([
                'post_type' => 'slider',
            ]);
            if (have_posts()) :while (have_posts()) : the_post();
                ?>
                <li class="cover-image">
                    <span class="flexslider-overlay"></span>
                    <img src="<?= resize_image(get_the_post_thumbnail_url(get_the_ID(),'full'),[1900, 633])?>" alt="<?= get_the_title()?>">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro_layers_wrapper">
                                    <div class="intro_layers">
                                        <div class="intro_layer" data-animation="fadeInDown">
                                            <div class="d-inline-block">
                                                <h3 class="intro_featured_word2">
                                                   <?= get_the_title()?>
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="intro_layer" data-animation="fadeInDown">
                                            <div class="d-inline-block">
                                                <p><?=get_the_excerpt()?> </p>
                                            </div>
                                        </div>
                                        <div class="intro_layer slider-buttons" data-animation="fadeInDown">
                                            <a href="<?= get_post_meta(get_the_ID(),"href",TRUE)?>" class="btn-link with-icon light-link">Xem chi tiết</a>
                                        </div>
                                    </div> <!-- eof .intro_layers -->
                                </div> <!-- eof .intro_layers_wrapper -->
                            </div> <!-- eof .col-* -->
                        </div><!-- eof .row -->
                    </div><!-- eof .container -->
                </li>
            <?php endwhile; endif;
            wp_reset_query(); ?>

        </ul>
    </div> <!-- eof flexslider -->
</section>
