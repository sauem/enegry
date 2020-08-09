<?php
?>

<section id="blog" class="ls s-pt-50 s-pb-55 s-pt-lg-90 s-pb-lg-95 s-pt-xl-140 s-pb-xl-145">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h4 class="special-heading">Tin tức</h4>
                <p class="special-heading">Cập nhật các công nghệ năng lượng mặt trời mới nhất cho gia đình bạn</p>
                <div class="divider-30 divider-lg-53"></div>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-shadow-items" data-margin="50" data-responsive-lg="3"
                     data-responsive-sm="2" data-responsive-xs="1" data-nav="false" data-loop="true"
                     data-autoplay="true">
                    <?php
                    query_posts([
                        'posts_per_page' => 6,
                    ])
                    ?>
                    <article
                            class="item-extended vertical-item content-padding padding-small box-shadow post type-post status-publish format-standard has-post-thumbnail">
                        <div class="item-media post-thumbnail">
                            <img src="<?= resize_image(get_the_post_thumbnail_url(get_the_ID(), 'full'), [360, 255]) ?>"
                                 alt="">
                            <div class="media-links">
                                <a class="abs-link" title="" href="<?= get_the_permalink() ?>"></a>
                            </div>
                        </div><!-- .post-thumbnail -->
                        <div class="item-content">
                            <div class="entry-meta">
											<span class="post-date">
												<span class="screen-reader-text">Ngày đăng</span>
												<a href="<?= get_the_permalink() ?>" rel="bookmark">
													<i class="fa fa-calendar"></i>
													<time class="entry-date published updated"
                                                          datetime="<?= get_the_date() ?>"><?= get_the_date() ?></time>
												</a>
											</span>
                            </div><!-- .entry-meta -->
                            <h6 class="entry-title">
                                <a href="<?= get_the_permalink() ?>" rel="bookmark">
                                    <?= get_the_title() ?>
                                </a>
                            </h6>
                            <div class="entry-content ">
                                <p class="text-5"><?= get_the_excerpt() ?></p>
                            </div><!-- .entry-content -->

                        </div><!-- .item-content -->
                    </article>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

