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
					<li><a href="<?php echo base_url('/features'); ?>">FEATURES</a></li>
					<li class="active"><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container" style="background-color: white;">
		<h1 class="text-center">Explore</h1>
		<br>
		<?php
		$count = 0;
		$total = count($query);
		foreach($query as $diary) {
			if($count == 0 || $count % 4 == 0) {
		?>
			<div class="row">
		<?php
			}
		?>			
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 each-diary text-center">
					<div class="thumbnail">
						<h1>
						<?php
						if($diary->feel == "Happy") { echo "&#128522;"; }
							else if($diary->feel == "Excited") { echo "&#128515;"; }
							else if($diary->feel == "Proud") { echo "&#128521;"; }
							else if($diary->feel == "Sad") { echo "&#128557;"; }
							else if($diary->feel == "Angry") { echo "&#128545;"; }
							else if($diary->feel == "Afraid") { echo "&#128542;"; }
							else if($diary->feel == "Lonely") { echo "&#128528;"; }
							else if($diary->feel == "Sick") { echo "&#128567;"; }
							else if($diary->feel == "Confused") { echo "&#128533;"; }
							else if($diary->feel == "Bored") { echo "&#128576;"; }
							else if($diary->feel == "Scared") { echo "&#128560;"; }
							else if($diary->feel == "Disapointed") { echo "&#128549;"; }
						?>
						</h1>
						<div class="caption">
							<a href="<?php echo base_url('d/'. $diary->id); ?>"><p style="margin: 0;"><?php echo substr($diary->title, 0, 50); ?></p></a>
							<p><?php echo $diary->name; ?><br><?php echo date('d M Y', strtotime($diary->date)); ?></p>
						</div>
					</div>
				</div>
		<?php
			if(($count+1) % 4 == 0 || $count+1 == $total) {
		?>
			</div>
		<?php
			}
			$count += 1;
		}
		?>
		<br>
		<div class="text-center">
			<?php echo $paging; ?>
		</div>
		<br><br>
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