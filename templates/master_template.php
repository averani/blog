<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="<?=ASSETS_URL?>ico/favicon.png">

	<title><?=PROJECT_NAME?></title>

	<!-- Bootstrap core CSS -->
	<link href="<?=ASSETS_URL?>css/bootstrap-3.0.0.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<style>
		body {
			min-height: 2000px !important;
			padding-top: 70px;
			background: url(<?= ASSETS_URL ?>img/bg.jpg);
		}
	</style>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="<?=ASSETS_URL?>js/html5shiv.js"></script>
	<script src="<?=ASSETS_URL?>js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?=BASE_URL?>"><?=PROJECT_NAME?></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li <?= $controller == "posts" ? 'class="active"' : ''?>><a href="<?=BASE_URL?>">Posts</a></li>
				<li <?= $controller == "tags" ? 'class="active"' : ''?>><a href="<?=BASE_URL?>tags">Tags</a></li>
				<li <?= $controller == "users" ? 'class="active"' : ''?>><a href="<?=BASE_URL?>users">Users</a></li>
				<li <?= $controller == "logout" ? 'class="active"' : ''?>><a href="<?=BASE_URL?>logout">Logout</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>

<div class="container">

	<?php require "views/$this->controller/{$this->controller}_$this->action.php";?>

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=ASSETS_URL?>js/jquery-1.10.2.min.js"></script>
<script src="<?=ASSETS_URL?>js/bootstrap-3.0.0.min.js"></script>
</body>
</html>