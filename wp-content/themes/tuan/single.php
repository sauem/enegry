<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<?= get_template_part("part/page-banner") ?>
<?php
if (have_posts()): while (have_posts()): the_post();
    ?>
    <section class="ls s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-70">
        <div class="container">
            <div class="row">
                <main class="col-lg-7 col-xl-8">

                    <article class="vertical-item content-padding box-shadow post type-post status-publish format-standard has-post-thumbnail">

                        <!-- .post-thumbnail -->
                        <div class="item-media post-thumbnail">
                            <img src="<?= get_the_post_thumbnail_url(get_the_ID(),"full")?>" alt="">
                        </div>


                        <div class="item-content">
                            <div class="entry-meta">

                                <span>
											<span class="screen-reader-text">Posted on</span>
											<a href="blog-single-right.html" rel="bookmark">
												<i class="fa fa-calendar"></i>
												<time class="entry-date published updated" datetime="2019-04-23T15:15:12+00:00">23 Apr 2019</time>
											</a>
										</span>
                                <span class="comments-link">
											<span class="screen-reader-text">Comments</span>
											<i class="fa fa-comment-o"></i>
											35 Comment
										</span>
                            </div>

                            <div class="entry-content">
                                <?= get_the_content()?>
                            </div>
                        </div>
                    </article>
                    <?= get_template_part("item-related-post")?>
                </main>
                <?= get_template_part("part/archive-aside") ?>
            </div>
        </div>
    </section>

<?php
endwhile;endif;
?>
<?php
get_footer();
