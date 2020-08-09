<?php
?>
<section id="about" class="ls s-pt-60 s-pt-lg-100 s-pt-xl-150 c-gutter-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-wrap text-center">
                    <img class="img-fluid" src="<?= staticInfo('info_img',true)?>" alt="">
                </div>
            </div>
            <!-- .col-* -->
            <div class="col-lg-6 animate" data-animation="moveFromRight">
               <?= staticInfo("intro"); ?>
            </div>
            <!-- .col-* -->
        </div>
    </div>
</section>