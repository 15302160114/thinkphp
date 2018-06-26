<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\think5\public/../application/user\view\login\zhuce.html";i:1528679675;}*/ ?>
<!DOCTYPE html>
<html>
	<head>	
		<title>Register-login-form Website Template | Home :: 小贝壳网站模板</title>
		<link href="/think5/public/static/css/login.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Lobster|Pacifico:400,700,300|Roboto:400,100,100italic,300,300italic,400italic,500italic,500'  rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,500,600,700,300' rel='stylesheet' type='text/css'>
		<!--webfonts-->
	</head>
	<body>	
			<!--start-login-form-->
				<div class="main">
			    	<div class="login-head">
					    <h1>Elegant Login  and Register forms</h1>
					</div>
					<div  class="wrap">
						  <div class="Regisration">
						  	<div class="Regisration-head">
						    	<h2><span></span>Register</h2>
						 	 </div>
						  	<form class="form-horizontal" method="post" name="form1" action="<?php echo url('login/save'); ?>" onsubmit="return Form_Submit()">
						  		<input type="text" name="username" value="UserName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" >
						  		<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}" >
								<input type="password" name="password1" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
								
								<div class="form-group">
									  
									  <div class="col-sm-7">
									    <input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
									    <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
									  </div>
								 <div class="Remember-me">
								
												 
								<div class="submit">
									<input type="submit" onclick="myFunction()" value="Sign Me Up >" >
								</div>
									<div class="clear"> </div>
								</div>
											
						  </form>
					</div>
					
			  </div>
	</body>
</html>
