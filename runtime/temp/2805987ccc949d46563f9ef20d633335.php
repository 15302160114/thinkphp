<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"C:\xampp\htdocs\thinkphp\public/../application/user\view\user\shopping.html";i:1530676465;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Card : user</title>
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
<script src="/thinkphp/public/static/js/menu_jquery.js"></script>
<script src="/thinkphp/public/static/js/simpleCart.min.js"> </script>
</head>
<script type="text/javascript">

		$(document).ready(function() {
					$(".megamenu").megamenu();
					adddel();
					totl();
					to();
				});
				//合计
			function totl() {
				var sum = 0;
				$(".totle").each(function() {
					sum += parseFloat($(this).text());
					$("#susum").text(sum);
				});
			}
			function to() {
				var myArray=new array();

				$(".input").each(function() {
					var i=0;
					myArray[i]=parseFloat($(this).val());
					i++;
					alert(myArray[i]);
				});

				//alert(myArray);
				// for(var j =0;j<myArray.length;j++){
				// 	$("input#jia").attr("value",myArray[j]);
				// }
				
			}
			
			function adddel(){
				//小计和加减
					//加
					$(".add").each(function() {
							$(this).click(function() {
								var $multi = 0;
								var vall = $(this).prev().val();
								vall++;
								$(this).prev().val(vall);
								$multi = parseFloat(vall) * parseFloat($(this).parent().prev().text());
								$(this).parent().next().text(Math.round($multi));
								totl();
								to();
							});

						});
						//减
					$(".reduc").each(function() {
							$(this).click(function() {
								var $multi1 = 0;
								var vall1 = $(this).next().val();
								vall1--;
								if(vall1 <= 0) {
									vall1 = 1;
								}
								$(this).next().val(vall1);
								$multi1 = parseFloat(vall1) * parseFloat($(this).parent().prev().text());
								$(this).parent().next().text(Math.round($multi1));
								totl();
								to();
							});

						});
			}

</script>
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
                
            <div class="cart box_1">
                <a href="shopping.html">
                    <h3> <span class="simpleCart_total">$0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="/thinkphp/public/static/images/bag.png" alt=""></h3>
                </a>    

                <div class="clearfix"> </div>
            </div>
            
            <div class="create_btn">
                <a href="<?php echo url('user/logout'); ?>">sign out</a>
            </div>

            <div class="create" style="border:1px solid #000;text-align:right;display:inline-block;margin-left:30px;padding:8px 12px;">
                <a href="#">欢迎你 , <?php if($user): ?><?php echo $user->username; endif; ?></a>
            </div>
            <div class="clearfix"></div>
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
            <li class="grid"><a class="color1" href="index.html">Home</a></li>
            <li class="grid"><a class="color2" href="#">Classification</a>
                <div class="megapanel">
                    <div class="row">
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>   
                            </div>                          
                        </div>
                        <div class="col1">
                            <div class="h_nav">
                                <h4>品牌</h4>
                                <ul>
                                    <?php if(is_array($categorys) || $categorys instanceof \think\Collection || $categorys instanceof \think\Paginator): $i = 0; $__LIST__ = $categorys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <li><a href="category.html?id=<?php echo $vo['id']; ?>"><?php echo $vo['categoryname']; ?></a></li>
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
                <li class="active grid"><a class="color3" href="shopping.html">Shopping Cart</a></li>
                <li class="grid"><a class="color4" href="order.html">Your Order</a></li>
                <li class="grid"><a class="color5" href="settings.html">Settings</a></li>
            
         </ul> 
    </div>
</div>
</div>
<div class="container">
	<div class="check">	 
			 <div class="col-md-3 cart-total">
			 <a class="continue" href="index.html">Continue to basket</a>

			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price foot_tol"><span id="susum">0</span></li>
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <form class="form-horizontal" method="post" name="form1" action="<?php echo url('user/order_add'); ?>">
			 	<input type="text" id="jia" name="jia" value="">
			 	<a class="order" href="<?php echo url('user/order_add'); ?>">Place Order</a>
			 </form>
			 
			 <div class="total-item">
				 <h3>OPTIONS</h3>
				 <h4>COUPONS</h4>
				 <a class="cpns" href="#">Apply Coupons</a>
				 <p><a href="#">Log In</a> to use accounts - linked coupons</p>
			 </div>
			</div>
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag</h1>

			 <?php if(is_array($orders) || $orders instanceof \think\Collection || $orders instanceof \think\Paginator): $i = 0; $__LIST__ = $orders;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				<script>$(document).ready(function(c) {
					$('.<?php echo $vo['id']; ?>').on('click', function(c){
						$('.<?php echo $vo['count']; ?>_<?php echo $vo['sum']; ?>').fadeOut('slow', function(c){
							$('.<?php echo $vo['count']; ?>_<?php echo $vo['sum']; ?>').remove();
						});
						});	  
					});
			   </script>
			  
			 
			 <div class="cart-header <?php echo $vo['count']; ?>_<?php echo $vo['sum']; ?>">
				 <a href="<?php echo url('user/delete',['id'=>$vo['id']]); ?>"><div class="close1 <?php echo $vo['id']; ?>"> </div></a>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="/thinkphp/public/uploads/<?php echo $vo['logo']; ?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"><?php echo $vo['spname']; ?></a><span><?php echo $vo['description']; ?></span></h3>
						<ul class="qty">
							<li>
								<div class="pices" style="display:none;"> <?php echo $vo['count']; ?> </div>
								<div class="num">数量：
									<span class="reduc">&nbsp;-&nbsp;</span>
									<input type="text" class="input" value="1" style="width:50px;" />
									<span class="add">&nbsp;+</span>
								</div>
								<div class="totle" style="display:none;"><?php echo $vo['count']; ?></div></li>
						</ul>
						
						
							 <div class="delivery">
							 <p>Service Charges : <?php echo $vo['count']; ?></p>

							 <span>Delivered in <?php echo date('Y-m-d H:i:s',$vo['create_time']); ?></span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <?php endforeach; endif; else: echo "" ;endif; ?>
		 </div>
		 
		
			<div class="clearfix"> </div>
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