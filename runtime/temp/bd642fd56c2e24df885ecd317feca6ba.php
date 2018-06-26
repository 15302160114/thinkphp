<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\xampp\htdocs\think5\public/../application/user\view\article\index.html";i:1528677372;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>notice</title>
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
		<li role="presentation" class="active"><a href="<?php echo url('article/add'); ?>">添加数据</a></li>
	</ul>
	<table class="table table-striped table-bordered">
		
		<tr>
			<th>序号</th>
			<th>ID</th>
			<th>title</th>
			<th>status</th>
			<th>创建时间</th>
			<th>编辑</th>
		</tr>

		<?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $num = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($num % 2 );++$num;?>
		<tr>
			<td><?php echo $num; ?></td>
			<td><?php echo $vo['id']; ?></td>
			<td><?php echo $vo['title']; ?></td>
			<td><?php echo status($vo['status']); ?></td>
			<td><?php echo $vo['create_time']; ?></td>
			<td>
				<a href="<?php echo url('article/delete',['id'=>$vo['id']]); ?>">删除</a>&nbsp;&nbsp;
				<a href="<?php echo url('article/detail',['id'=>$vo['id']]); ?>">详情</a>
				<a href="<?php echo url('article/edit',['id'=>$vo['id']]); ?>">编辑</a>
			</td>
		</tr>
		<?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<?php echo $article->render(); ?>

</body>
</html>