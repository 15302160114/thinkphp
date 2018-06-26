<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\xampp\htdocs\think5\public/../application/user\view\article\add.html";i:1528677372;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/think5/public/static/css/bootstrap.min.css">
</head>
<body>
<form class="form-horizontal" method="post" name="form1" action="<?php echo url('article/save'); ?>">
  <h3>发表文章</h3>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-7">
      <input type="text" name="id" class="form-control" id="inputEmail3" placeholder="ID">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-7">
      <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="标题">
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-7">
     <!-- <textarea class="form-control" name="content" rows="3"></textarea> -->
     <script id="container" name="content" type="text/plain">
       
     </script>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
<ul id="ul" class="nav nav-pills">
    <li role="presentation" class="active"><a href="<?php echo url('article/index'); ?>">返回</a></li>
  </ul>

  <script type="text/javascript" src="/think5/public/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/think5/public/static/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>
</body>
</html>