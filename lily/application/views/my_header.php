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
					<li class="active"><a href="<?php echo base_url('dash/my'); ?>">MY DIARY</a></li>
					<li><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ME <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo base_url('home/settings'); ?>">SETTINGS</a></li>
							<li><a href="<?php echo base_url('home/signout'); ?>">SIGN OUT</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
