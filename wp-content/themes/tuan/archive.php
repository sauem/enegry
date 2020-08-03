<?php
get_header(); ?>

<?= get_template_part("part/page-banner") ?>

    <section class="ls s-py-60 s-py-lg-100 s-py-xl-150">
        <div class="container">
            <div class="row c-gutter-70">
                <main class="col-lg-7 col-xl-8">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            get_template_part("part/item-archive");
                        endwhile;
                    endif;

                    ?>
                </main>
                <?= get_template_part("part/archive-aside") ?>
            </div>
        </div>
    </section>
<?php
get_footer();
