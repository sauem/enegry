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
        <h5 class="widget-title">Sản phẩm</h5>
        <ul class="list-unstyled">
            <li class="media">
                <a class="media-image" href="blog-single-right.html">
                    <img src="<?= ASSET ?>/images/blog/recent03.jpg" alt="">
                </a>
                <div class="media-body">
                    <h4>
                        <a href="blog-single-right.html">Why Most People Get Goal SettingWrong</a>
                    </h4>
                    <p class="item-meta">
                        <i class="ico ico-clock"></i>
                        02 Jan 19
                    </p>
                </div>
            </li>
            <li class="media">
                <a class="media-image" href="blog-single-right.html">
                    <img src="<?= ASSET ?>/images/blog/recent01.jpg" alt="">
                </a>
                <div class="media-body">
                    <h4>
                        <a href="blog-single-right.html">Tools of Trading: Modern Marketing</a>
                    </h4>
                    <p class="item-meta">
                        <i class="ico ico-clock"></i>
                        06 Jan 19
                    </p>
                </div>
            </li>
            <li class="media">
                <a class="media-image" href="blog-single-right.html">
                    <img src="<?= ASSET ?>/images/blog/recent02.jpg" alt="">
                </a>
                <div class="media-body">
                    <h4>
                        <a href="blog-single-right.html">Reach a New Audience with Paid Social</a>
                    </h4>
                    <p class="item-meta">
                        <i class="ico ico-clock"></i>
                        09 Jan 19
                    </p>
                </div>
            </li>


        </ul>
    </div>
</aside>
