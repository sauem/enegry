<?php
get_header();
?>
<?= get_template_part("part/page-banner") ?>

<section class="ls s-pt-60 s-pb-70 s-pt-lg-100 s-pb-lg-90 s-pt-xl-145 s-pb-xl-140 c-gutter-60">
    <div class="container">
        <div class="row">
            <main class="col-lg-8">
                <div class="product">

                    <div class="images" data-columns="5">
                        <figure>
                            <div data-thumb="<?= ASSET?>/images/shop/01.jpg">
                                <a href="<?= ASSET?>/images/shop/01.jpg">
                                    <img src="<?= ASSET?>/images/shop/01.jpg" alt="" data-caption="" data-src="<?= ASSET?>/images/shop/01.jpg" data-large_image="<?= ASSET?>/images/shop/01.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="<?= ASSET?>/images/shop/02.jpg">
                                <a href="<?= ASSET?>/images/shop/02.jpg">
                                    <img src="<?= ASSET?>/images/shop/02.jpg" alt="" data-caption="" data-src="<?= ASSET?>/images/shop/02.jpg" data-large_image="<?= ASSET?>/images/shop/02.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="<?= ASSET?>/images/shop/03.jpg">
                                <a href="<?= ASSET?>/images/shop/03.jpg">
                                    <img src="<?= ASSET?>/images/shop/03.jpg" alt="" data-caption="" data-src="<?= ASSET?>/images/shop/03.jpg" data-large_image="<?= ASSET?>/images/shop/03.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="<?= ASSET?>/images/shop/04.jpg">
                                <a href="<?= ASSET?>/images/shop/04.jpg">
                                    <img src="<?= ASSET?>/images/shop/04.jpg" alt="" data-caption="" data-src="<?= ASSET?>/images/shop/04.jpg" data-large_image="<?= ASSET?>/images/shop/04.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>
                            <div data-thumb="<?= ASSET?>/images/shop/05.jpg">
                                <a href="<?= ASSET?>/images/shop/05.jpg">
                                    <img src="<?= ASSET?>/images/shop/05.jpg" alt="" data-caption="" data-src="<?= ASSET?>/images/shop/05.jpg" data-large_image="<?= ASSET?>/images/shop/05.jpg" data-large_image_width="1000" data-large_image_height="1000">
                                </a>
                            </div>


                        </figure>
                    </div>

                    <div class="summary entry-summary">

                        <h6 class="product_title single_title">Lorem ipsum dolor sit amet, consectetur</h6>
                        <div class="woocommerce-product-rating">
                            <div class="star-rating">
                                <span style="width:72.6%">Rated <strong class="rating">4.33</strong> out of 5 based on <span class="rating">3</span> customer ratings</span>
                            </div>
                        </div>
                        <div>
                            <ul class="list-styled">
                                <li>Mauris eu lobortis arcu, sed dapibus era</li>
                                <li>Aenean ut ultrices felis</li>
                                <li>Nam vel scelerisque erat, non fringilla</li>
                                <li>Praesent rhoncus, magna sed mollis</li>
                            </ul>
                        </div>

                        <form>
                            <div class="single_variation_wrap">
                                <div class="d-flex align-items-center">
                                    <div class="quantity single">
                                        <input type="button" value="+" class="plus">
                                        <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        <input type="number" class="input-text qty text" step="1" min="1" max="1000" name="quantity" value="1" title="Qty" size="4">
                                        <input type="button" value="-" class="minus">
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </div>
                                    <span class="price">
													<del>
														<span>
															<span>$ </span>34
														</span>
													</del>
													<span>$ </span>55
												</span>
                                </div>
                                <button type="submit" class="single_add_to_cart_button btn btn-small btn-maincolor with-icon alt"><span>Add to cart</span></button>

                            </div>
                        </form>

                    </div>
                    <!-- .summary -->


                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Description</a>
                            </li>
                            <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                <a href="#tab-reviews">Reviews</a>
                            </li>
                        </ul>

                        <div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h6>Labore et dolore</h6>
                            <p>At vero eos et accusam et justo duo dolores etea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.</p>
                            <p>Ermod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimat. Etiam ut bibendum leo, quis pulvinar orci. Phasellus nec eros purus. Sed consequat facilisis ligula. Nulla tristique erat mauris, et tristique nibh lacinia..</p>
                        </div>
                        <div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
                            <div id="reviews">
                                <div id="comments">
                                    <ol class="commentlist">
                                        <li class="comment even thread-even depth-1" id="li-comment-34">

                                            <div id="comment-34" class="comment_container">

                                                <img alt="" src="<?= ASSET?>/images/team/comment01.jpg">
                                                <div class="comment-text">

                                                    <div class="star-rating">
																	<span style="width:80%">Rated <strong
                                                                            class="rating">4</strong> out of 5</span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong>James
                                                            Koster</strong> <span>–</span>
                                                        <time datetime="2019-06-07T11:43:13+00:00">June 7, 2019</time>
                                                    </p>

                                                    <div class="description">
                                                        <p>Nice T-shirt, I got one in black. Goes with
                                                            anything!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                        <li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-35">

                                            <div id="comment-35" class="comment_container">

                                                <img alt="" src="<?= ASSET?>/images/team/comment02.jpg">
                                                <div class="comment-text">

                                                    <div class="star-rating">
																	<span style="width:80%">Rated <strong
                                                                            class="rating">4</strong> out of 5</span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong>Cobus
                                                            Bester</strong> <span>–</span>
                                                        <time datetime="2019-06-07T11:55:15+00:00">June 7, 2019</time>
                                                    </p>

                                                    <div class="description">
                                                        <p>Very comfortable shirt, and I love the graphic!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                        <li class="comment even thread-even depth-1" id="li-comment-36">

                                            <div id="comment-36" class="comment_container">

                                                <img alt="" src="<?= ASSET?>/images/team/comment03.jpg">
                                                <div class="comment-text">

                                                    <div class="star-rating">
																	<span style="width:100%">Rated <strong
                                                                            class="rating">5</strong> out of 5</span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong>Stuart</strong>
                                                        <span>–</span>
                                                        <time datetime="2019-06-07T13:02:14+00:00">June 7, 2019</time>
                                                    </p>

                                                    <div class="description">
                                                        <p>Great T-shirt quality, Great Design and Great
                                                            Service.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>


                                </div>


                                <div id="review_form_wrapper">
                                    <div id="review_form">
                                        <div id="respond" class="comment-respond">
														<span id="reply-title" class="comment-reply-title">Add a Review <small>
																<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>
															</small>
														</span>
                                            <form action="http://webdesign-finder.com/" method="post" id="commentform" class="comment-form" novalidate="">
                                                <p class="comment-notes">
                                                    <span id="email-notes">Your email address will not be published.</span>
                                                    Required fields are marked <span class="required">*</span>
                                                </p>
                                                <div class="comment-form-rating">
                                                    <label>Your rating</label>
                                                    <p class="stars">
																	<span>
																		<a class="star-1" href="#">1</a>
																		<a class="star-2" href="#">2</a>
																		<a class="star-3" href="#">3</a>
																		<a class="star-4" href="#">4</a>
																		<a class="star-5" href="#">5</a>
																	</span>
                                                    </p>
                                                </div>
                                                <p class="comment-form-comment">

                                                    <textarea aria-required="true" rows="6" cols="45" name="comment" id="comment" class="form-control" placeholder="Your review "></textarea>
                                                </p>
                                                <p class="comment-form-author">
                                                    <input class="form-control" id="author" name="author" type="text" value="" size="30" aria-required="true" required="" placeholder="Full Name">
                                                </p>
                                                <p class="comment-form-email">
                                                    <input class="form-control" id="email" name="email" type="email" value="" size="30" aria-required="true" required="" placeholder="e-mail address">
                                                </p>
                                                <p class="form-submit">
                                                    <button type="submit" id="submit" name="submit" class="btn btn-small btn-maincolor with-icon mt-30"><span>Leave a Comment</span></button>
                                                </p>
                                            </form>
                                        </div>
                                        <!-- #respond -->
                                    </div>
                                </div>
                                <div class="clear">
                                </div>
                            </div>
                        </div>

                    </div>


                    <section class="up-sells upsells products">
                        <h4 class="special-heading">Our Top Sellers</h4>
                        <div class="divider-40 d-none d-lg-block"></div>
                        <ul class="products">
                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/01.jpg" alt="">
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
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/02.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Donec interdum sem nisi</a>
                                        </h2>
                                        <span class="price">
														<span>$</span>45.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/03.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Nulla fermentum augue</a>
                                        </h2>
                                        <span class="price">
														<span>$</span>50.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/04.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Ut sagittis nulla nec magna</a>
                                        </h2>
                                        <span class="price">
														<del>
															<span>
																<span>$</span>35.00
															</span>
														</del>
														<span>$</span>25.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/05.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Orci varius penatibus</a>
                                        </h2>
                                        <span class="price">
														<span>$</span>60.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/06.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Curabitur nunc ex tristique vel</a>
                                        </h2>
                                        <span class="price">
														<del>
															<span>
																<span>$</span>40.00
															</span>
														</del>
														<span>$</span>45.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/07.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Nullam bium augue neque</a>
                                        </h2>
                                        <span class="price">
														<span>$</span>39.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/08.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Donec auctor commodo</a>
                                        </h2>
                                        <span class="price">
														<span>$</span>45.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="product vertical-item content-padding">
                                <div class="product-inner box-shadow">
                                    <div class="item-media">
                                        <img src="<?= ASSET?>/images/shop/09.jpg" alt="">
                                        <div class="media-links">
                                            <a class="abs-link" title="" href="shop-product-right.html"></a>
                                        </div>
                                    </div>
                                    <div class="item-content">
                                        <h2>
                                            <a href="shop-product-right.html">Donec veslum, tortor</a>
                                        </h2>
                                        <span class="price">
														<del>
															<span>
																<span>$</span>60.00
															</span>
														</del>
														<span>$</span>40.00
													</span>
                                        <div class="shop-btn">
                                            <a href="shop-product-right.html" class="add-to-card btn btn-small btn-maincolor with-icon">Add to cart</a>
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
<?php get_footer();?>
