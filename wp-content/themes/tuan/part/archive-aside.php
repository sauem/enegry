<?php
?>
<aside class="col-lg-5 col-xl-4">

    <div class="widget widget_categories">
        <h5 class="widget-title">Chuyên mục</h5>
        <ul>
            <?= wp_list_categories([
                'current_category' => true,
                'depth' => 2,
                'echo' => 1,
                'title_li' => "",
            ]) ?>
        </ul>

    </div>
    <div class="widget widget_categories">
        <h5 class="widget-title">Dự án</h5>
        <ul>
            <?= wp_list_categories([
                'current_category' => true,
                'depth' => 2,
                'taxonomy' => 'product_cat',
                'echo' => 1,
                'title_li' => "",
            ]) ?>
        </ul>

    </div>
    <div class="widget widget_recent_posts">
        <h5 class="widget-title">Tin mới</h5>
        <ul class="list-unstyled">
            <?php
            query_posts([
                'post_type' => 'post',
                'posts_per_page' => 8,
                'order' => 'DESC',
                'orderby' => 'date'
            ]);
            if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <li class="media">
                    <a class="media-image" href="blog-single-right.html">
                        <img src="<?= resize_image(get_the_post_thumbnail_url(get_the_ID(),'full'),[100,100])?>" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="text-2">
                            <a href="<?= get_the_permalink()?>"><?= get_the_title()?></a>
                        </h4>
                        <p class="item-meta">
                            <i class="ico ico-clock"></i>
                            <?= get_the_date()?>
                        </p>
                    </div>
                </li>
            <?php endwhile;endif;
            wp_reset_query(); ?>

        </ul>
    </div>
</aside>
