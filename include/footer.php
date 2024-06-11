<!-- Footer styles Start -->
<footer>
  <div class="container">
    <div class="row">
      <div class="footer-section">
        <div class="col-sm-4">
          <div class="single-secton">
            <h3>Subscribe Our Newsletter</h3>
            <div class="form">
              <div class="form-group">
                <input placeholder="Enter your Email" id="exampleInputName1" class="form-control first" type="text">
              </div>
              <input class="bttn" value="Subscribe" type="text">
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="single-secton">
            <h3>Follow us on</h3>
            <ul>
              <li class="facebook"><a href="https://www.facebook.com/profile.php?id=61553607326121&mibextid=ZbWKwL"><i
                    class="fa fa-facebook"></i></a></li>
              <li class="twitter"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
              <li class="linkedin"><a href="javascript:void(0)"><i class="fa fa-linkedin"></i></a></li>
              <li class="google"><a href="javascript:void(0)"><i class="fa fa-google"></i></a></li>
              <li class="youtube"><a href="https://www.youtube.com/@saralpahal"><i class="fa fa-youtube-play"></i></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="single-secton">
            <h3>Need Help ?</h3>
            <p><i class="fa fa-phone"></i> CALL US : <span>+91 99186 78409</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="single-section-two"> <img src="images/logo.jpg" alt="">
          <p>
            Public Service Project (PSP) Group is a trust which is registered under the government of india. This trust
            was registered under the act 1882 by the rule of Indian gov. The president of this Trust is Nirmal Patel who
            is the most legendary leader in Uttar Pradesh who created this trust from Allahabad District which is
            stabilized in the uttar pradesh state. This trust is registered in 2021 by the india law. The trust has no
            members which handle different types of activity.
          </p>
        </div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="single-section-two white">
          <h3>Company</h3>
          <ul>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="document.php">Documents</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="recruitment.php">Recruitment</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-3 col-md-2">
        <div class="single-section-two white">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">How It Works</a></li>
            <li><a href="#">Terms & Condition</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">FAQ</a></li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="single-section-two">
          <h3>Recent Post</h3>
          <?php
          $url = $URL . "gallery/read_galley.php";
          $data = array();
          //print_r($data);
          $postdata = json_encode($data);
          $client = curl_init($url);
          curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
          $response = curl_exec($client);
          // print_r($response);
          $result = json_decode($response);
          // print_r($result);
          ?>
          <div class="row">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Testimonials Indicators -->
              <ol class="carousel-indicators">
                <?php
                $counter = 0;
                foreach ($result as $key => $value) {
                  foreach ($value as $key1 => $value1) {
                    $image = $GALLERY_IMG_PATH . "gallery_img" . $value1->id . ".png";
                    ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $counter++; ?>"
                      class="<?php echo $counter === 1 ? "active" : ""; ?>"></li>
                  <?php }
                } ?>
              </ol>
              <!-- Testimonials slides -->
              <div class="carousel-inner" role="listbox">

                <?php
                $counter = 0;
                foreach ($result as $key => $value) {
                  foreach ($value as $key1 => $value1) {
                    $image = $GALLERY_IMG_PATH . "gallery_img" . $value1->id . ".png";
                    $counter++;
                    ?>
                    <div class="item <?php echo $counter === 1 ? "active" : ""; ?>">
                      <div class="col-md-8 col-sm-12 col-md-offset-2 col-sm-offset-0 col-xs-offset-0">
                        <div class="testimonials-main">
                          <div class="testimonials-inner">
                            <!-- <i class="fa fa-quote-left"></i> -->
                            <p><img src="<?php echo $image; ?>" width="200px"></p>
                            <div class="testimonials-img-main"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }
                } ?>

              </div>
            </div>
          </div>
          <!-- <div class="form">
            <div class="form-group">
              <input placeholder="Enter your Name" id="exampleInputName2" class="form-control first" type="text">
            </div>
            <div class="form-group">
              <input placeholder="Enter your Email" id="exampleInputEmail" class="form-control first" type="text">
            </div>
            <div class="form-group">
              <input placeholder="Enter your Message" id="exampleInputMessage" class="form-control first message"
                type="text">
              <input class="bttn" value="Subscribe" type="text">
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer styles End -->
<!-- Copyright styles End -->
<div class="copyright-wrapper">
  <div class="container">
    <p>&copy; Copyright
      <script type="text/javascript">
        var d = new Date();
        document.write(d.getFullYear());
      </script>
      PSP Gorup | All Rights Reserved.
    </p>
  </div>
</div>
<!-- Copyright styles End -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/jquery/jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery/plugins.js"></script>
<script src="assets/jquery/jquery.animateNumber.min.js"></script>
<script src="assets/jquery/jquery.magnific-popup.min.js"></script>
<script src="assets/owl-carousel/js/owl.carousel.js"></script>
<script src="assets/wow/wow.min.js"></script>
<script src="js/custom.js"></script>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-83282272-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag() { dataLayer.push(arguments) };
  gtag('js', new Date());

  gtag('config', 'UA-83282272-3');
</script>
</body>

</html>