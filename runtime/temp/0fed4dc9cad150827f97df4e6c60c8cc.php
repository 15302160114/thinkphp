<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"C:\xampp\htdocs\thinkphp\public/../application/user\view\user\index.html";i:1530578647;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home : user</title>
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
<script src="/thinkphp/public/static/js/simpleCart.min.js"> </script>
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
                
            <div class="cart box_1">
                <a href="checkout.html">
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
            <li class="active grid"><a class="color1" href="index.html">Home</a></li>
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
                <li class="grid"><a class="color3" href="shopping.html">Shopping Cart</a></li>
                <li class="grid"><a class="color4" href="order.html">Your Order</a></li>
                <li class="grid"><a class="color5" href="settings.html">Settings</a></li>
            
         </ul> 
    </div>
</div>
</div>
<div class="arriv">
    <div class="container">
        <div class="arriv-top">
            <?php if(is_array($commodity) || $commodity instanceof \think\Collection || $commodity instanceof \think\Paginator): $i = 0; $__LIST__ = $commodity;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="col-md-6 arriv-left">
                <img src="/thinkphp/public/uploads/<?php echo $vo['logo']; ?>" class="img-responsive" width='100%' style="margin:20px 0" alt="">
                <div class="arriv-info">
                    <h3>NEW ARRIVALS</h3>
                    <p><?php echo $vo['description']; ?></p>
                    <div class="crt-btn">
                        <a href="details.html">TAKE A LOOK</a>
                    </div>
                </div>
            </div>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            
            <div class="clearfix"> </div>
        </div>
        <div class="arriv-bottm">
            <div class="col-md-8 arriv-left1">
                <img src="/thinkphp/public/static/images/3.jpg" class="img-responsive" alt="">
                <div class="arriv-info1">
                    <h3>SWEATER</h3>
                    <p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right1">
                <img src="/thinkphp/public/static/images/4.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.html"><h3>Trekking Shoes<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="arriv-las">
            <div class="col-md-4 arriv-left2">
                <img src="/thinkphp/public/static/images/5.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.html"><h3>Casual Glasses<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="col-md-4 arriv-middle">
                <img src="/thinkphp/public/static/images/6.jpg" class="img-responsive" alt="">
                <div class="arriv-info3">
                    <h3>FRESH LOOK T-SHIRT</h3>
                    <div class="crt-btn">
                        <a href="details.html">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 arriv-right2">
                <img src="/thinkphp/public/static/images/7.jpg" class="img-responsive" alt="">
                <div class="arriv-info2">
                    <a href="details.html"><h3>Elegant Watches<i class="ars"></i></h3></a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<div class="special">
    <div class="container">
        <h3>Special Offers</h3>
        <div class="specia-top">
            <ul class="grid_2">
        <li>
                <a href="details.html"><img src="/thinkphp/public/static/images/8.jpg" class="img-responsive" alt=""></a>
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <h5>Lorem ipsum dolor</h5>
                    <div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>
                    <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                </div>
        </li>
        <li>
                <a href="details.html"><img src="/thinkphp/public/static/images/9.jpg" class="img-responsive" alt=""></a>
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <h5>Consectetur adipis</h5>
                    <div class="item_add"><span class="item_price"><h6>ONLY $60.00</h6></span></div>
                    <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
            </div>
        </li>
        <li>
                <a href="details.html"><img src="/thinkphp/public/static/images/10.jpg" class="img-responsive" alt=""></a>
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <h5>Commodo consequat</h5>
                    <div class="item_add"><span class="item_price"><h6>ONLY $14.00</h6></span></div>
                    <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
            </div>
        </li>
        <li>
                <a href="details.html"><img src="/thinkphp/public/static/images/11.jpg" class="img-responsive" alt=""></a>
                <div class="special-info grid_1 simpleCart_shelfItem">
                    <h5>Voluptate velit</h5>
                    <div class="item_add"><span class="item_price"><h6>ONLY $37.00</h6></span></div>
                    <div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
                </div>
        </li>
        <div class="clearfix"> </div>
    </ul>
        </div>
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