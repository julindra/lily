<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>	<footer class="footer">
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
	<script>
		$(document).ready(function() {
			$('#diarytext').wysihtml5();
		});
	</script>
</body>
</html>