<!doctype html>
<html class="no-js" lang="">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="<?php echo base_url('assets/template/back/images/favicon.ico') ?>" type="image/x-icon" />
<link rel="icon" href="<?php echo base_url('assets/template/back/images/favicon.ico') ?>" type="image/x-icon" />
<title>:: TUTOR SHORT - Admin ::</title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

<!-- CSS Files -->
<link href="<?php echo base_url('assets/template/back/css/main.css') ?>" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body class="signup-page">
<div class="wrapper">
  <div class="header header-filter" style="background-image: url('<?php echo base_url('assets/template/back/images/login-bg.jpg') ?>'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
          <div class="card card-signup">
            <?php echo form_open('/Admin/Authen'); ?>
              <div class="header header-primary text-center">
                <h4>Sign in</h4>
                <!-- <div class="social-line"> <a href="#" class="btn btn-just-icon"><i class="fa fa-facebook-square"></i></a> <a href="#" class="btn btn-just-icon"><i class="fa fa-twitter"></i></a> <a href="#" class="btn btn-just-icon"><i class="fa fa-google-plus"></i></a> </div> -->
              </div>
              <h3 class="mt-0">TUTOR SHORT</h3>
              <p class="help-block">Or Be Classical</p>
              <div class="content">
                <div class="form-group">
                  <input name="admin_username" type="text" class="form-control underline-input" placeholder="USERNAME" />
                </div>
                <div class="form-group">
                  <input name="admin_password" type="password" placeholder="PASSWORD" class="form-control underline-input" />
                </div>
                <!-- <div class="checkbox">
                  <label>
                    <input type="checkbox" name="optionsCheckboxes" unchecked="" />
                    Remember me</label>
                </div> -->
              </div>
              <div class="footer text-center">
              	<!-- <a href="./index.html" class="btn btn-primary btn-raised">Login<div class="ripple-container"></div></a> -->
                <button type="submit" class="btn btn-primary btn-raised" class="ripple-container">Login</button>
              </div>
              <!-- <a href="./forgotpass.html" class="btn btn-primary btn-wd btn-lg">Forgot Password?</a> -->
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <footer class="footer">
      <div class="container">
        <div class="col-lg-12 text-center"> <a href="./signup.html" class="text-uppercase text-white">Create an account</a>
          <div class="copyright"> &copy; 2016, made with <i class="fa fa-heart heart"></i> by <a href="www.thememakker.com" target="_blank">Theme Makker</a> </div>
        </div>
      </div>
    </footer> -->
  </div>
</div>
</body>

<!--  Vendor JavaScripts -->
<script src="<?php echo base_url('assets/template/back/bundles/libscripts.bundle.js') ?>"></script>

<!--  Custom JavaScripts  -->
<script src="<?php echo base_url('assets/template/back/js/main.js') ?>"></script>
<!--/ custom javascripts -->
</html>
