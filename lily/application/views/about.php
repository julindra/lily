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
					<li class="active"><a href="<?php echo base_url('/about'); ?>">ABOUT</a></li>
					<li><a href="<?php echo base_url('/features'); ?>">FEATURES</a></li>
					<li><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<h1 class="text-center">About</h1>
		<div class="row">
			<div class="col-md-6">
                <img src="<?php echo base_url(); ?>assets/img/team.jpg" class="img-responsive" style="width:400px;height:400px;">
            </div>
            <div class="col-md-6">
                <div class="about-text">
                    <div class="section-title">
                        <h4>Meet the team</h4>
                        <hr>
                        <div class="clearfix"></div>
                    </div>
                   	<p class="intro">We're studied in Surya University majoring in Human Computer Interaction.</p>
                    <ul class="about-list">
						<li>
                            <strong>Renhard Julindra </strong> - <em>Co Founder / Director</em>
                        </li>
                        <li>
                            <strong>Bryan Abdullah Farras</strong> - <em>Co Founder / Support Manager</em>
                        </li>
                        <li>
                            <strong>Aprilianto Chayadi</strong> - <em>Co Founder / Support Manager</em>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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