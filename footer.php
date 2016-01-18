<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage DBR_Parallax
 * @since DeepBlue Revenue Parallax 0.8
 */
?>

        <section class="footer-container" role="footer">
            <div class="row full-width">
                <div class="footer-section small-12 small-centered text-center show-for-small columns footer-section-connect-icons">
                    <a href="https://twitter.com/DeepBlueRevenue" target="_blank"><img src="/wp-content/uploads/2015/05/twitter.png" class="header-connect-icon" /></a>
                    <a href="https://www.facebook.com/DeepBlueRevenue" target="_blank"><img src="/wp-content/uploads/2015/05/facebook.png" class="header-connect-icon" /></a>
                    <a href="http://www.linkedin.com/company/2810223?trk=prof-0-ovw-curr_pos" target="_blank"><img src="/wp-content/uploads/2015/05/linkedin.png" class="header-connect-icon end" /></a>
                </div>
                <div class="footer-section large-4 small-12 columns footer-section-menu">
                    <label class="footer-section-header-title">DeepBlue Revenue</label>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Clients</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-section large-4 show-for-medium-up columns">
                    <label class="footer-section-header-title">Connect</label>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Email</a></li>
                    </ul>
                </div>
                <div class="footer-section footer-section-signup large-4 show-for-medium-up columns">
                    <span class="footer-section-signup-leadin">Sign Up for the Latest News</span>
                    <form id="footer-email-sign-up">
                        <div class="row">
                            <div class="large-6 columns">
                                <label>
                                    <input type="text" placeholder="First" />
                                </label>
                            </div>
                            <div class="large-6 columns">
                                <label>
                                    <input type="text" placeholder="Last" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-12 columns">
                                <label>
                                    <input type="text" placeholder="Email Address" />
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="large-6 columns">
                                <a href="#" class="button expand tiny">Continue</a>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="footer-section footer-section-copyright large-12 center text-center show-for-medium-up columns">
                    <p>&copy; 2015 | info@deepbluerevenue.com | (805) 570 3631 | DeepBlue Revenue All Rights Reserved</p>
                </div>
                <div class="footer-section footer-section-copyright large-12 center text-left show-for-small columns">
                    <p>(805) 570 3631
                    <br/>info@deepbluerevenue
                    <br/>DeepBlue Revenue All Rights Reserved | &copy; 2015
                    </p>
                </div>
            </div>
        </section>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

		<?php wp_footer(); ?>
    </body>
</html>