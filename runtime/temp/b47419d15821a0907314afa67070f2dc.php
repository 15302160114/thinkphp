<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\xampp\htdocs\think5\public/../application/user\view\article\detail.html";i:1528081445;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/think5/public/static/css/bootstrap.min.css">
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
	<center><table class="table table-striped table-bordered">
		<tr>
			<td>id:<?php echo $article['id']; ?></td>
		</tr>

		<tr>
			<td>title:<?php echo $article['title']; ?></td>
		</tr>

		<tr>
			<td>content:<?php echo html_entity_decode($article['content']); ?></td>
		</tr>

		<tr>
			<td>status:<?php echo $article['status']; ?></td>
		</tr>

		<tr>
			<td>创建时间：<?php echo $article['create_time']; ?></td>
		</tr>
	</table></center>
</body>
</html>