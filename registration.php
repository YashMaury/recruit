<?php
include "include/header.php";
?>
<!-- breadcrumb Wrapper Start -->
<div class="breadcrumb-wrapper">
  <div class="container">
    <div class="banner-title">
      <h2>Login / Sign Up</h2>
      <div class="line"> <span></span></div>
    </div>
    <ul class="inner-breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li>Login / Sign Up</li>
    </ul>
  </div>
</div>
<!-- breadcrumb Wrapper End --> 
<!-- Inner page Wrapper Start -->
<div class="inner-page-wrapper registration-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="login-container">
          <div class="loginbox">
            <div class="loginbox-title">Login in using social accounts</div>
            <ul class="social-network social-circle onwhite">
              <li><a href="javascript:void(0)" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="javascript:void(0)" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="javascript:void(0)" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="javascript:void(0)" class="icoLinkedin" title="Linkedin +"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <div class="loginbox-or">
              <div class="or-line"></div>
              <div class="or">OR</div>
            </div>
            <div class="form-group">
              <label>Email: <span class="required">*</span></label>
              <input placeholder="" class="form-control" type="email">
            </div>
            <div class="form-group">
              <label>Password: <span class="required">*</span></label>
              <input placeholder="" class="form-control" type="password">
            </div>
            <div class="loginbox-forgot"> <a href="#">Forgot Password?</a> </div>
            <div class="loginbox-submit">
              <input class="btn btn-default btn-block" value="Login" type="button">
            </div>
            <div class="loginbox-signup"> <a href="javascript:void(0)">Sign Up With Email</a> </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="login-container">
          <div class="loginbox">
            <div class="form-group">
              <label>Username: <span class="required">*</span></label>
              <input placeholder="" class="form-control" type="text">
            </div>
            <div class="form-group">
              <label>Email: <span class="required">*</span></label>
              <input placeholder="" class="form-control" type="email">
            </div>
            <div class="form-group">
              <label>Password: <span class="required">*</span></label>
              <input placeholder="" class="form-control" type="password">
            </div>
            <div class="form-group">
              <label>Confirm Password: <span class="required">*</span></label>
              <input placeholder="" class="form-control" type="password">
            </div>
            <div class="loginbox-forgot">
              <input type="checkbox">
              I accept <a href="#">Term and consitions?</a> </div>
            <div class="loginbox-submit">
              <input class="btn btn-default btn-block" value="Register" type="button">
            </div>
            <div class="loginbox-signup"> Already have account <a href="javascript:void(0)">Sign in</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inner page Wrapper End --> 

<?php
include "include/footer.php";
?>