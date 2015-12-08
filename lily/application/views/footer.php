<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.8/jquery.form-validator.min.js"></script>
	<script>
	$.validate({
		form: '#signupForm',
		modules : 'security', 
		onSuccess : function($form) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('home/signup'); ?>",
				data: $('#signupForm').serialize(),
				dataType: "html",
				success: function(msg){
					if(msg == 200) {
						$('#signupModalFooter').html('<p style="color:blue;">Success. You can login with your account now.</p>');
						document.getElementById("signupForm").reset();
					} else {
						$('#signupModalFooter').html(msg);
					}
				}
			});	
			return false;
		}
	});

	$.validate({
		form: '#signinForm',
		modules : 'security', 
		onSuccess : function($form) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('home/signin'); ?>",
				data: $('#signinForm').serialize(),
				dataType: "html",
				success: function(msg){
					if(msg == 200) {
						window.location.href = "<?php echo base_url(); ?>dash/";
					} else if(msg == 404) {
						$('#signinModalFooter').html("Invalid username or password");
					} else {
						$('#signinModalFooter').html(msg);
					}
				}
			});	
			return false;
		}
	});

	$.validate({
		form: '#forgotForm',
		onSuccess : function($form) {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('home/forgot'); ?>",
				data: $('#forgotForm').serialize(),
				dataType: "html",
				success: function(msg){
					if(msg == 200) {
						$('#forgotModalFooter').html("<p style='color: blue;'>Success. Check your email</p>");
						$('#forgotForm input[name=txt_email]').val('');
					} else if(msg == 404) {
						$('#forgotModalFooter').html("Email not found");
					} else {
						$('#forgotModalFooter').html(msg);
					}
				}
			});	
			return false;
		}
	});
	</script>
</body>
</html>