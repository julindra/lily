<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lily</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flat-ui.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/u_main.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/summernote.css">
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.0/css/bootstrap-toggle.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap3-wysihtml5.min.css">
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#lilyNav">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				<a class="navbar-brand" href="<?php echo base_url('dash'); ?>"><img id="logo" class="img-responsive" src="<?php echo base_url(); ?>assets/img/lily.png" alt="lily logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="lilyNav">
				<ul class="nav navbar-nav">
					<li><a href="<?php echo base_url('dash/my'); ?>">MY DIARY</a></li>
					<li><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ME <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li class="active"><a href="<?php echo base_url('home/settings'); ?>">SETTINGS</a></li>
							<li><a href="<?php echo base_url('home/signout'); ?>">SIGN OUT</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1 class="text-center">Settings</h1>
		<div class="row">
			<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
				<?php echo validation_errors(); ?>
				<form id="settingsForm" role="form" action="<?php base_url('home/settings'); ?>" method="post">
					<div class="form-group">
						<input class="form-control" placeholder="Name" type="text" data-validation="required" data-validation-error-msg="Please input Your Name" name="txt_name" value="<?php echo $my_name; ?>">
					</div>
					<div class="form-group">
						<input class="form-control" name="txt_pass_lama" placeholder="Old Password" type="password">
					</div>
					<div class="form-group">
						<input class="form-control" name="txt_pass_confirmation" placeholder="New Password" type="password">
					</div>
					<div class="form-group">
						<input class="form-control" name="txt_pass" placeholder="New Password Confirmation" type="password">
					</div>
					<div class="form-group text-center"> 
						<button type="submit" class="btn btn-lg btn-success">Save</button>
					</div>
				</form>
				<p>Note: Leave the password field if you just want to change your name.</p>
			</div>
		</div>
		<br><br>
	</div>
	<footer class="footer">
		<div class="container" style="padding-top: 10px;">
			<a href="<?php echo base_url('/about'); ?>">ABOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo base_url('/features'); ?>">FEATURES</a>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.0/js/bootstrap-toggle.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap3-wysihtml5.all.min.js"></script>
	<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
	<script>
		$.validate({
			form: '#settingsForm',
			modules : 'security', 
		});
	</script>
</body>
</html>