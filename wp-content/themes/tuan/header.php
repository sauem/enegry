<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>


    <link rel="stylesheet" href="<?= ASSET ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/animations.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/font-awesome.css">
    <link rel="stylesheet" href="<?= ASSET ?>/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="<?= ASSET ?>/css/shop.css" class="color-switcher-link">
    <link rel="stylesheet" href="<?= ASSET ?>/css/site.css?v=<?= time() ?>">


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="preloader">
    <div class="preloader_image"></div>
</div>

<div class="modal fade modal-search" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="widget widget_search">
                <form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
                    <div class="form-group">
                        <input type="text" value="" name="search" class="form-control" placeholder="Search keyword"
                               id="modal-search-input">
                    </div>
                    <button type="submit" class="btn">Search</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
    <div class="fw-messages-wrap ls p-normal">
        <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
        <!--
    <ul class="list-unstyled">
        <li>Message To User</li>
    </ul>
    -->

    </div>
</div>

<div id="canvas">
    <div id="box_wrapper">
        <?= get_template_part("part/nav") ?>
