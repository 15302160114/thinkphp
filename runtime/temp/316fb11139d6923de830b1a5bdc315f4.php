<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\xampp\htdocs\thinkphp\public/../application/user\view\login\register.html";i:1530588850;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<link href="/thinkphp/public/static/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="/thinkphp/public/static/js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="/thinkphp/public/static/css/index.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.useso.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="/thinkphp/public/static/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/thinkphp/public/static/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="/thinkphp/public/static/js/menu_jquery.js"></script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call us : 032 2352 782</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div class="logo">
			<a href="index.html"><img src="/thinkphp/public/static/images/logo.png" class="img-responsive" alt=""/> </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" class="form-horizontal" method="post" name="form1" action="<?php echo url('@user/login/check'); ?>">
                                        <fieldset id="body">
                                            <fieldset>
                                                  <label for="email">Your Username</label>
                                                  <input type="text" name="username" id="email">
                                            </fieldset>
                                            <fieldset>
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password">
                                             </fieldset>
                                             <fieldset>
                                                <label for="password">验证码</label>
                                                <input type="text" class="form-control" name="captcha">
                                                <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
                                             </fieldset>
                                            <input type="submit" id="login" onclick="myFunction()" value="Sign in">
                                            <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                        </fieldset>
                                    <span><a href="#">Forgot your password?</a></span>
                                </form>
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="">REGISTER</a>
				</div>
			
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
			<ul class="megamenu skyblue">
            <li class="active grid"><a class="color1" href="<?php echo url('@index/index/index'); ?>">Home</a></li>
            <li class="grid"><a class="color2" href="#">Classification</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="<?php echo url('@index/index/category',['id'=>$vo['id']]); ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="<?php echo url('@index/index/category',['id'=>$vo['id']]); ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="<?php echo url('@index/index/category',['id'=>$vo['id']]); ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="<?php echo url('@index/index/category',['id'=>$vo['id']]); ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="<?php echo url('@index/index/category',['id'=>$vo['id']]); ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href=<?php echo url('@index/index/category',['id'=>$vo['id']]); ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col2"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                        <div class="col1"></div>
                    </div>
                    </div>
                </li>
                
            
         </ul> 
	</div>
</div>
</div>
<!-- content -->
<div class="container">
<div class="main">
	<!-- start registration -->
	<div class="registration">
		<div class="registration_left">
		<h2>new user? <span> create an account </span></h2>
		<!-- [if IE] 
		    < link rel='stylesheet' type='text/css' href='ie.css'/>  
		 [endif] -->  
		  
		<!-- [if lt IE 7]>  
		    < link rel='stylesheet' type='text/css' href='ie6.css'/>  
		<! [endif] -->  
		<script>
			(function() {
		
			// Create input element for testing
			var inputs = document.createElement('input');
			
			// Create the supports object
			var supports = {};
			
			supports.autofocus   = 'autofocus' in inputs;
			supports.required    = 'required' in inputs;
			supports.placeholder = 'placeholder' in inputs;
		
			// Fallback for autofocus attribute
			if(!supports.autofocus) {
				
			}
			
			// Fallback for required attribute
			if(!supports.required) {
				
			}
		
			// Fallback for placeholder attribute
			if(!supports.placeholder) {
				
			}
			
			// Change text inside send button on submit
			var send = document.getElementById('register-submit');
			if(send) {
				send.onclick = function () {
					this.innerHTML = '...Sending';
				}
			}
		
		})();
		</script>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form"  class="form-horizontal" method="post" name="form1" action="<?php echo url('login/save'); ?>" onsubmit="return Form_Submit()">
				<div>
					<label>
						<input placeholder="username" name="username" type="text" tabindex="1" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Phone Number" type="text" name="tel" tabindex="2" required autofocus>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Your Email" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="Your Address" type="text" name="address" tabindex="3" required>
					</label>
				</div>
				<!-- <div class="sky-form">
					<div class="sky_form1">
						<ul>
							<li><label class="radio left"><input type="radio" name="radio" checked=""><i></i>Male</label></li>
							<li><label class="radio"><input type="radio" name="radio"><i></i>Female</label></li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div> -->
				<div>
					<label>
						<input placeholder="password" name="password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<label>
                    	<input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
                    </label>
                </div>

                <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
				<div>
					<input type="submit" onclick="myFunction()" value="create an account" id="register-submit">
				</div>
				<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to shoppe.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
				</div>
			</form>
			<!-- /Form -->
		</div>
	</div>
	<div class="registration_left">
		<h2>existing user</h2>
		 <div class="registration_form">
		 <!-- Form -->
			<form id="registration_form" class="form-horizontal" method="post" name="form1" action="<?php echo url('login/check'); ?>">
				<div>
					<label>
						<input placeholder="username" type="text" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required>
					</label>
				</div>
				<div>
					<label>
                    	<input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
                    </label>
                </div>
                <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>	
				<div>
					<input type="submit" onclick="myFunction()" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			<!-- /Form -->
			</div>
	</div>
	<div class="clearfix"></div>
	</div>
	<!-- end registration -->
</div>
</div>
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="register.html">Register</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="buy.html">Payment</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.smallseashell.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
	</div>
</div>
</body>
</html>