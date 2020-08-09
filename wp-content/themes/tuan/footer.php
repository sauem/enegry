<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>
<footer class="page_footer page_footer s-borderbottom-container ds s-pt-55 s-pb-0 s-pt-lg-100 s-pb-lg-40 s-pt-xl-150 s-pb-xl-90 c-gutter-50">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-3 animate mr-auto " data-animation="fadeInUp">

                <div class="widget widget_text">
                    <a href="index.html" class="logo">
                        <img src="<?= ASSET?>/images/logo.png" alt="">
                    </a>
                </div>
            </div>

            <div class="col-6 col-lg-2 order-md-3 order-lg-2 animate" data-animation="fadeInUp">
                <div class="widget widget_nav_menu">
                    <h3 class="widget-title">Links</h3>
                    <ul class="menu">
                        <li>
                            <a href="blog-right.html">News</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="contact.html">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-6 col-lg-2 order-md-4 order-lg-3 animate" data-animation="fadeInUp">
                <div class="widget widget_nav_menu">
                    <h3 class="widget-title">Pages</h3>
                    <ul class="menu">
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                        <li>
                            <a href="faq.html">Faq</a>
                        </li>
                        <li>
                            <a href="team.html">Team</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 order-md-2 order-lg-4 animate" data-animation="fadeInUp">
                <div class="widget widget_mailchimp">

                    <form class="signup" action="http://webdesign-finder.com/">

                        <input id="mailchimp_email2" name="email" type="email" class="form-control mailchimp_email2"
                               placeholder="Email Address" autocomplete="off">

                        <button type="submit" class="search-submit">
                            <span class="screen-reader-text">Subscribe</span>
                        </button>
                        <div class="response"></div>
                    </form>

                </div>

                <div class="widget widget_social_buttons">
                    <a href="#" class="fa fa-facebook bg-icon rounded-icon" title="facebook"></a>
                    <a href="#" class="fa fa-paper-plane bg-icon rounded-icon" title="telegram"></a>
                    <a href="#" class="fa fa-instagram bg-icon rounded-icon" title="instagram"></a>
                    <a href="#" class="fa fa-youtube-play bg-icon rounded-icon" title="youtube-play"></a>
                </div>

            </div>


        </div>
    </div>
</footer>
<section class="page_copyright ds s-py-20">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-center text-md-left animate" data-animation="fadeInUp">
                <p>&copy; <span class="copyright_year">2020</span> Fomix Inc.</p>
            </div>
            <div class="col-md-6 text-center text-md-right  animate" data-animation="fadeInUp">
                <div class="widget widget_nav_menu">
                    <a href="contact.html">Terms Condition</a>
                    <a href="contact.html">Privacy</a>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
<?php wp_footer(); ?>
<script src="<?= ASSET ?>/js/compressed.js"></script>
<script src="<?= ASSET ?>/js/main.js"></script>
<script src="<?= ASSET ?>/js/switcher.js"></script>
<script src="<?= ASSET ?>/js/site.js?v=<?= time()?>"></script>

</body>
</html>
