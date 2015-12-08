<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>lily</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/flat-ui.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/main.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
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
				<a class="navbar-brand" href="<?php echo base_url(); ?>"><img id="logo" class="img-responsive" src="<?php echo base_url(); ?>assets/img/lily.png" alt="lily logo"></a>
			</div>
			<div class="collapse navbar-collapse" id="lilyNav">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url('/about'); ?>">ABOUT</a></li>
					<li class="active"><a href="<?php echo base_url('/features'); ?>">FEATURES</a></li>
					<li><a href="<?php echo base_url('base/explore'); ?>">EXPLORE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1 class="text-center">Features</h1>
		<br>
		<div class="row text-center">
			<div class="col-md-4 col-sm-6">
				<div class="center">
					<i class="fa fa-key" style="font-size:48px;"></i>
					<h4>Private</h4>
					<p>You can write your diary just for yourself</p>
				</div>
			</div><!--/.col-md-4-->
			<div class="col-md-4 col-sm-6">
				<div class="center">
					<i class="fa fa-cloud" style="font-size:48px;"></i>
					<h4>Shared Diary</h4>
					<p>Any posts you can be set for the known for the public</p>
				</div>
			</div><!--/.col-md-4-->
			<div class="col-md-4 col-sm-6">
				<div class="center">
					<i class="fa fa-check" style="font-size:48px;"></i>
					<h4>Complete your writing</h4>
					<p>In the diary, you can add images to complement your writing</p>
				</div>
			</div><!--/.col-md-4-->
			<div class="col-md-4 col-sm-6">
				<div class="center">
					<i class="fa fa-mobile-phone" style="font-size:48px;"></i>
					<h4>Write In Your Phone</h4>
					<p>Lily can be accessed easily using the mobile web</p>
				</div>
			</div><!--/.col-md-4-->
			<div class="col-md-4 col-sm-6">
				<div class="center">
					<i class="fa fa-heart" style="font-size:48px;"></i>
					<h4>Smart Feeling</h4>
					<p>Each diary can be categorized according to the feel of the writing or image.</p>
				</div>
			</div><!--/.col-md-4-->
			<div class="col-md-4 col-sm-6">
				<div class="center">
					<i class="fa fa-calendar" style="font-size:48px;"></i>
					<h4>Make your diary offline</h4>
					<p>Diary arranged into a pdf in accordance with the specified time user.</p>
				</div>
			</div><!--/.col-md-4-->
		</div><!--/.row-->
	</div>
	<br><br>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
	<script>
	
	</script>
</body>
</html>