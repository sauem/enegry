<?php
?>
<div class="header_absolute ds cover-background s-overlay">
<section class="page_title ds s-pt-115 s-pb-65 s-pb-lg-85 s-pt-lg-145 bg-auto page_title s-parallax s-overlay">
    <div class="container">
        <div class="row">

            <div class="col-md-12 text-center text-lg-left">
                <h1 class="color-main"><?= is_single() ? get_the_title() : single_term_title()?></h1>
                <ol class="breadcrumb links-light">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Pages</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <span class="bg-maincolor">Blog Right Sidebar</span>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</section>
</div>