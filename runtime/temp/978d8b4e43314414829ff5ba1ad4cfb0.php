<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\xampp\htdocs\thinkphp\public/../application/admin\view\login\index.html";i:1530578647;}*/ ?>
<!DOCTYPE html>
<html>
<head>
<title>sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Credit Login / Register Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="/thinkphp/public/static/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="/thinkphp/public/static/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<link href="/thinkphp/public/static/css/login.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<!-- //web font -->
</head>
<body>
<h1>Credit Login / Register Form</h1>
<div class="main-agileits">
<!--form-stars-here-->
    <div class="form-w3-agile">
      <h2>Credit login form</h2>
      <form class="form-horizontal" method="post" name="form1" action="<?php echo url('login/check'); ?>">
        <div class="form-sub-w3">
          <input type="text" name="username" placeholder="Customer number or username " required="" />
        <div class="icon-w3">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        </div>
        <div class="form-sub-w3">
          <input type="password" name="password" placeholder="Password" required="" />
        <div class="icon-w3">
          <i class="fa fa-unlock-alt" aria-hidden="true"></i>
        </div>
        </div>
        <div class="form-sub-w3">
        <input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
        </div>
          <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
        
        <div class="submit-w3l">
          <input type="submit" onclick="myFunction()" value="Login">
        </div>
      </form>
    </div>
<!--//form-ends-here-->
</div>
<div id="small-dialog1" class="mfp-hide">
          <div class="contact-form1">
                    <div class="contact-w3-agileits">
                    <h3>Register Form</h3>
                      <form class="form-horizontal" method="post" name="form1" action="<?php echo url('login/save'); ?>" onsubmit="return Form_Submit()">
                        <div class="form-sub-w3ls">
                          <input placeholder="User Name" name="username" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-user" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="Email" class="mail" name="email" type="email" required="">
                          <div class="icon-agile">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="Your number" class="phone" name="tel" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="Your Address" class="mail" name="address" type="text" required="">
                          <div class="icon-agile">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                          </div>
                        </div>
                        <div class="form-sub-w3ls">
                          <input placeholder="Password" name="password" type="password" required="">
                          <div class="icon-agile">
                            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                          </div>
                        </div>
                      </div>
                      <div class="form-sub-w3">
                        <input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
                      </div>
                      <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
                      <div class="login-check">
                       <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><p>I Accept Terms & Conditions</p></label>
                      </div>
                    <div class="submit-w3l">
                      <input type="submit" onclick="myFunction()" value="Register">
                    </div>
                    </form>
          </div>  
        </div>
<!-- copyright -->
  <div class="copyright w3-agile">
    
  </div>
  <!-- //copyright --> 
  <script type="text/javascript" src="/thinkphp/public/static/js/jquery-2.1.4.min.js"></script>
  <!-- pop-up-box -->  
    <script src="/thinkphp/public/static/js/jquery.magnific-popup.js" type="text/javascript"></script>
  <!--//pop-up-box -->
  <script>
    $(document).ready(function() {
    $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
      type: 'inline',
      fixedContentPos: false,
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });
                                    
    });
  </script>
</body>
</html>