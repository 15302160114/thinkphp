<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\think5\public/../application/user\view\login\index.html";i:1528689116;}*/ ?>
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
      <div id="fanhui">
          <a href="<?php echo url('@index/index/index'); ?>"><h3>首页</h3></a>
      </div>

      <div id="zhuce">
          <a href="<?php echo url('login/zhuce'); ?>"><h3>注册</h3></a>
      </div>
      <!--start-login-form-->
        <div class="main">
            
          <div class="Login">
              <div class="Login-head">
                  <h3>LOGIN</h3>
              </div>

            <form class="form-horizontal" method="post" name="form1" action="<?php echo url('login/check'); ?>">
                <div class="ticker">
                  <h4>Username</h4>
                    <input type="text" value="John Smith" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'John Smith';}" >
                    <div class="clear"> </div>
                  </div>
                  <div>
                  <h4>Password</h4>
                <input type="password" value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" >
                <div class="clear"> </div>
                </div>
                <div>
                <h4>验证码</h4>
                <div class="col-sm-7">
                      <input type="text" placeholder="请输入验证码" class="form-control" name="captcha">
                      <img src="<?php echo captcha_src(); ?>" alt="captcha" onclick="javascript:this.src='<?php echo captcha_src(); ?>?tm='+Math.random();" style="cursor: pointer"/>
                    </div>
                    <div class="clear"> </div>
                </div>
                <!-- <div class="checkbox-grid">
                  <div class="inline-group green">
                  <label class="radio"><input type="radio" name="radio-inline"><i> </i>Remember me</label>
                  <div class="clear"> </div>
                  </div>

                </div> -->

                <div class="guanli">
                    <p><a href="<?php echo url('@admin/login/index'); ?>">管理员登录</a></p>
                </div>
                         
                <div class="submit-button">
                  <input type="submit" onclick="myFunction()" value="LOGIN  >" >
                </div>
                  <div class="clear"> </div>
                </div>
                      
              </form>
          </div>
      </div>
    </div>
  </body>
</html>


