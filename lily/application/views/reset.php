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
					<li><a href="<?php echo base_url('/features'); ?>">FEATURES</a></li>
					<li><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container text-center">
		<h4>Forgot Your Password?</h4>
		<a href="<?php echo base_url(); ?>"><button type="button" style="margin-top: 10px; margin-right: 10px;" class="btn btn-lg btn-primary">CANCEL</button></a>
		<button type="button" style="margin-top: 10px;" class="btn btn-lg btn-info" data-toggle="modal" data-target="#resetModal">RESET PASSWORD</button>
		<div id="resetModal" class="modal fade" role="dialog" tabindex='-1'>
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">RESET PASSWORD</h4>
					</div>
					<div class="modal-body">
						<form id="resetForm" role="form">
							<div class="form-group">
								<input type="password" name="txt_pass_confirmation" class="form-control" placeholder="New Password" data-validation="length" data-validation-length="min8">
							</div>
							<div class="form-group">
								<input type="password" name="txt_pass" class="form-control" placeholder="New Password Confirmation" data-validation="required confirmation">
							</div>
							<input type="hidden" name="restok" value="<?php echo $restok; ?>">
							<input type="hidden" name="resem" value="<?php echo $resem; ?>">
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Sign Up</button>
							</div>
						</form>
					</div>
					<div id="resetModalFooter" class="modal-footer" style="color: red;">
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script>
	$.validate({
		form: '#resetForm',
		modules : 'security', 
		onSuccess : function($form) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('home/resetpass'); ?>",
				data: $('#resetForm').serialize(),
				dataType: "html",
				success: function(msg){
					if(msg == 200) {
						$('#resetModalFooter').html('<p style="color: blue;">Your password has been successfully changed</p><a href="<?php echo base_url(); ?>">LOGIN</a>');
					} else {
						$('#resetModalFooter').html(msg);
					}
				}
			});	
			return false;
		}
	});
	</script>
</body>
</html>