<?php
get_header();
global $product;

?>
<?= get_template_part("part/page-banner") ?>

<section class="ls s-pt-60 s-pb-70 s-pt-lg-100 s-pb-lg-90 s-pt-xl-145 s-pb-xl-140 c-gutter-60">
    <div class="container">
        <div class="row">
            <main class="col-lg-8">
                <div class="product">

                    <div class="images" data-columns="5">
                        <figure>
                            <div data-thumb="<?= ASSET ?>/images/shop/01.jpg">
                                <a href="<?= ASSET ?>/images/shop/01.jpg">
                                    <img src="<?= ASSET ?>/images/shop/01.jpg" alt="" data-caption=""
                                         data-src="<?= ASSET ?>/images/shop/01.jpg"
                                         data-large_image="<?= ASSET ?>/images/shop/01.jpg"
                                         data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>

                        </figure>
                    </div>

                    <div class="summary entry-summary">

                        <h6 class="product_title single_title">
                            <?= get_the_title() ?>
                        </h6>
                        <div>
                            <?= get_the_excerpt() ?>
                        </div>

                        <form>
                            <div class="single_variation_wrap">
                                <div class="d-flex align-items-center">
                                    <div class="quantity single">
                                        <input type="button" value="+" class="plus">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        <input type="number" class="input-text qty text" step="1" min="1" max="1000"
                                               name="quantity" value="1" title="Qty" size="4">
                                        <input type="button" value="-" class="minus">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                    <span class="price"><?= $product->get_price_html() ?></span>
                                </div>
                                <button type="submit"
                                        class="single_add_to_cart_button btn btn-small btn-maincolor with-icon alt">
                                    <span>Liên hệ</span></button>

                            </div>
                        </form>

                    </div>
                    <!-- .summary -->


                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab"
                                aria-controls="tab-description">
                                <a href="#tab-description">Giới thiệu</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Quy trình lắp đặt</a>
                            </li>
                        </ul>

                        <div class="panel wc-tab" id="tab-description" role="tabpanel"
                             aria-labelledby="tab-title-description">
                            <?= get_the_content() ?>
                        </div>
                        <div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <p>Nội dung</p>
                        </div>

                    </div>


                    <section class="up-sells upsells products">
                        <h4 class="special-heading">Sản phẩm ưa chuộng</h4>
                        <div class="divider-40 d-none d-lg-block"></div>
                        <ul class="products">
                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET ?>/images/shop/01.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Proin rhoncus tortor dui</a>
                                        </h2>
                                        <span class="price">
														<del>
															<span>
																<span>$</span>35.00
															</span>
														</del>
														<span>$</span>55.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html"
                                               class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </section>
                </div>


            </main>

            <?php get_template_part("part/aside-product"); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
