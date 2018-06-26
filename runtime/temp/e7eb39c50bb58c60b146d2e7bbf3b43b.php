<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\xampp\htdocs\think5\public/../application/user\view\article\edit.html";i:1528081816;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>学生管理</title>
	<link rel="stylesheet" type="text/css" href="/think5/public/static/css/biaoge.css">
  <link rel="stylesheet" type="text/css" href="/think5/public/static/css/bootstrap.min.css">、
  <style type="text/css">
    body{
      padding: 30px;
    }
    #ul{
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
	<ul id="ul" class="nav nav-pills">
    <li role="presentation" class="active"><a href="<?php echo url('article/index'); ?>">返回</a></li>
  </ul>
<form class="form-horizontal" method="post" name="form1" action="<?php echo url('article/update'); ?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">ID</label>
    <div class="col-sm-7">
      <input type="text" name="id" class="form-control" id="inputEmail3" placeholder="ID" value="<?php echo $article['id']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">title</label>
    <div class="col-sm-7">
      <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?php echo $article['title']; ?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">content</label>
    <div class="col-sm-7">
      <script id="container" name="content" type="text/plain">
       
     </script>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">更新</button>
    </div>
  </div>
</form>
<script type="text/javascript" src="/think5/public/static/ueditor/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/think5/public/static/ueditor/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var ue = UE.getEditor('container');
        ue.ready(function(){
          ue.setContent('<?php echo html_entity_decode($article['content']); ?>');
        })
    </script>
</body>
</html>