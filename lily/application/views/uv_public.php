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
					<li class="active"><a href="<?php echo base_url('dash/explore'); ?>">EXPLORE</a></li>
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
	<div class="container">
		<button type="button" class="btn btn-lg btn-info" onclick="downloadpdf();">Download PDF</button>
		<div id="content">
			<h1 class="text-center"><?php echo $check->title; ?></h1>
			<p class="text-center">By <?php echo $nama; ?></p>
			<p class="text-center"><b><?php echo $check->feel; ?></b> - <?php echo date("d F Y", strtotime($check->date)). " " .$check->time; ?></p>
			<div style="margin: 0 auto; width: 180px;">
				<!-- AddToAny BEGIN -->
				<div class="a2a_kit a2a_kit_size_32 a2a_default_style">
					<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
					<a class="a2a_button_facebook"></a>
					<a class="a2a_button_twitter"></a>
					<a class="a2a_button_google_plus"></a>
					<a class="a2a_button_line"></a>
				</div>
				<!-- AddToAny END -->
			</div>
			<br>
			
			<div id="diary">
			<?php echo $check->diary; ?>
			</div>
			<br><br>
		</div>
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
	<script src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>
	<script>
		function downloadpdf() {
			var pdf = new jsPDF('p', 'pt', 'letter');
        // source can be HTML-formatted string, or a reference
        // to an actual DOM element from which the text will be scraped.
        source = $('#content')[0];

        // we support special element handlers. Register them with jQuery-style 
        // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
        // There is no support for any other type of selectors 
        // (class, of compound) at this time.
        specialElementHandlers = {
            // element with id of "bypass" - jQuery style selector
            '#bypassme': function (element, renderer) {
                // true = "handled elsewhere, bypass text extraction"
                return true
            }
        };
        margins = {
        	top: 80,
        	bottom: 60,
        	left: 40,
        	width: 522
        };
        // all coords and widths are in jsPDF instance's declared units
        // 'inches' in this case
        pdf.fromHTML(
        source, // HTML string or DOM elem ref.
        margins.left, // x coord
        margins.top, { // y coord
            'width': margins.width, // max width of content on PDF
            'elementHandlers': specialElementHandlers
        },

        function (dispose) {
            pdf.save('<?php echo $check->title; ?>.pdf');
        }, margins);
    }
	</script>
</body>
</html>