<?php
?>
<section id="services" class="ls s-pt-50 s-pb-55 s-pt-lg-90 s-pb-lg-95 s-pt-xl-140 s-pb-xl-145">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <h4 class="special-heading">
                    Dịch vụ của chúng tôi
                </h4>
                <p class="special-heading">
                    Mang đến sự tận tâm, ưu đãi tốt, nhanh chất lượng
                </p>
                <div class="divider-40 divider-lg-53"></div>
            </div>
            <div class="col-sm-12">
                <div class="owl-carousel owl-shadow-items" data-margin="60" data-responsive-lg="3"
                     data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-loop="false"
                     data-autoplay="false">
                    <?php
                    query_posts([
                        'post_type' => 'service',
                        'posts_per_page' => 12,
                        'order' => 'DESC',
                        'orderby' => 'date'
                    ]);
                    if (have_posts()) : while (have_posts()) : the_post();

                        ?>
                        <div class="service-item vertical-item content-padding padding-small box-shadow">
                            <div class="item-media">
                                <img src="<?= resize_image(get_the_post_thumbnail_url(get_the_ID(),'full'),[350,250])?>" alt="">
                                <div class="media-links">
                                    <a class="abs-link" title="" href="<?= get_the_permalink()?>"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="mb-20 mb-lg-30">
                                    <a href="<?= get_the_permalink()?>"><?= get_the_title()?></a>
                                </h6>
                                <p class="mb-20 mb-lg-33 text-2"><?= get_the_excerpt() ?>
                                <a class="btn-link with-icon" href="service-single.html">Chi tiết dịch vụ</a>
                            </div>
                        </div>
                    <?php endwhile;endif;
                    wp_reset_query(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

