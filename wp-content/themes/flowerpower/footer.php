<?php
/**
 * Contains footer
 */
?>
    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content">
     <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6">
            <div class="footer-info">
            <h3>Florera</h3>
            <p>
                S:t knuts Torg 8<br>
                211 57 Malmö<br><br>
                <strong>Phone:</strong> 040-979963<br>
                <strong>Email:</strong> info@example.com<br>
            </p>
            </div>
        </div>

        <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Kund Service</h4>
            <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Returer</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Villkor</a></li> 
        </ul>
        </div>   -->

         <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Företaget</h4>
            <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Om Oss</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Frågor & Svar</a></li>
            </ul>
        </div>  -->

        <nav class="footer-navigation">
      <?php
        /* Add footer links */
        wp_nav_menu( array(
          'theme_location' => 'footer',
          'menu_id'        => 'footer-menu',
          'depth'          => 1,
        ) );
      ?>
        </nav><!-- .footer-navigation -->

        <div class="social-media-links">
            <h4>Social Media</h4>

            <?php
        /* Add social media links */
        $facebook_url = 'https://www.facebook.com/yourusername';
        $twitter_url = 'https://twitter.com/yourusername';
        $instagram_url = 'https://www.instagram.com/yourusername';
      ?>
      <a href="<?php echo esc_url( $facebook_url ); ?>" target="_blank">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="<?php echo esc_url( $twitter_url ); ?>" target="_blank">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="<?php echo esc_url( $instagram_url ); ?>" target="_blank">
        <i class="bi bi-facebook"></i>
      </a>
    </div><!-- .social-media-links -->


            <!-- <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div> -->
            <!-- <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
            </form> -->
        </div>
        </div>
    </div>
    </div>

    <div class="footer-legal text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div class="copyright">
            &copy; Copyright <strong><span>2023 Florera</span></strong>. All Rights Reserved
        </div>
        <!-- <div class="credits"> -->
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> -->
        </div>

      

    </div>
    </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <?php wp_footer(); ?>
</body>
</html>