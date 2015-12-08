<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><body>
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
					<li><a href="<?php echo base_url('/features'); ?>">FEATURES</a></li>
					<li><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container text-center">
		<h1 id="brand-text">lily</h1>
		<h4>Your daily dairy</h4>
		<button type="button" style="margin-top: 10px; margin-right: 10px;" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#signupModal">CREATE AN ACCOUNT</button>
		<button type="button" style="margin-top: 10px;" class="btn btn-lg btn-info" data-toggle="modal" data-target="#signinModal">SIGN IN</button>
		<div id="signupModal" class="modal fade" role="dialog" tabindex='-1'>
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">SIGN UP</h4>
					</div>
					<div class="modal-body">
						<form id="signupForm" role="form">
							<div class="form-group">
								<input type="text" name="txt_name" class="form-control" placeholder="Your Name" data-validation="required" data-validation-error-msg="Please input Your Name">
							</div>
							<div class="form-group">
								<input type="email" name="txt_email" class="form-control" placeholder="Your Email" data-validation="email">
							</div>
							<div class="form-group">
								<input type="password" name="txt_pass_confirmation" class="form-control" placeholder="Password" data-validation="length" data-validation-length="min8">
							</div>
							<div class="form-group">
								<input type="password" name="txt_pass" class="form-control" placeholder="Password Confirmation" data-validation="required confirmation">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</div>
						</form>
					</div>
					<div id="signupModalFooter" class="modal-footer" style="color: red;">
					
					</div>
				</div>
			</div>
		</div>

		<div id="signinModal" class="modal fade" role="dialog" tabindex='-1'>
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">SIGN IN</h4>
					</div>
					<div class="modal-body">
						<form id="signinForm" role="form">
							<div class="form-group">
								<input type="email" name="txt_email" class="form-control" placeholder="Email" data-validation="email">
							</div>
							<div class="form-group">
								<input type="password" name="txt_pass" class="form-control" placeholder="Password" data-validation="required">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-info">Sign In</button>
							</div>
							<a href="" data-toggle="modal" data-target="#forgotModal">Forgot your password?</a>
						</form>
					</div>
					<div id="signinModalFooter" class="modal-footer" style="color: red;">
					
					</div>
				</div>
			</div>
		</div>

		<div id="forgotModal" class="modal fade" role="dialog" tabindex='-1'>
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">FORGOT PASSWORD</h4>
					</div>
					<div class="modal-body">
						<form id="forgotForm" role="form">
							<div class="form-group">
								<input type="email" name="txt_email" class="form-control" placeholder="Email" data-validation="email">
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-warning">Reset Password</button>
							</div>
						</form>
					</div>
					<div id="forgotModalFooter" class="modal-footer" style="color: red;">
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
