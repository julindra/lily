<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="container">
		<p><b>Hi, <?php echo $my_name; ?>!</b></p>
		<h1 class="text-center">Write your Diary</h1>
		<div class="row">
			<?php echo validation_errors(); ?>
			<form role="form" id="diaryForm" action="<?php echo base_url('dash/save'); ?>" method="post">
				<div class="form-group">
					<div class="col-lg-8 col-lg-offset-2">
						<input type="text" class="form-control" name="txt_title" placeholder="Title" value="<?php if(isset($diary)) { echo $diary->title; }?>">
						<br>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-3 col-lg-offset-2 col-md-4 col-sm-4">
						<input class="form-control" name="txt_date" type="text" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date("d F Y"); ?>" readonly style="color: #0000FF;">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-3 col-md-4 col-sm-4">
						<select class="form-control" name="txt_feel">
							<option value="Happy" <?php if(isset($diary)) { if($diary->feel == "Happy") { echo "selected"; } } ?>>Happy</option>
							<option value="Excited" <?php if(isset($diary)) { if($diary->feel == "Excited") { echo "selected"; } } ?>>Excited</option>
							<option value="Proud" <?php if(isset($diary)) { if($diary->feel == "Proud") { echo "selected"; } } ?>>Proud</option>
							<option value="Sad" <?php if(isset($diary)) { if($diary->feel == "Sad") { echo "selected"; } } ?>>Sad</option>
							<option value="Angry" <?php if(isset($diary)) { if($diary->feel == "Angry") { echo "selected"; } } ?>>Angry</option>
							<option value="Afraid" <?php if(isset($diary)) { if($diary->feel == "Afraid") { echo "selected"; } } ?>>Afraid</option>
							<option value="Lonely" <?php if(isset($diary)) { if($diary->feel == "Lonely") { echo "selected"; } } ?>>Lonely</option>
							<option value="Sick" <?php if(isset($diary)) { if($diary->feel == "Sick") { echo "selected"; } } ?>>Sick</option>
							<option value="Confused" <?php if(isset($diary)) { if($diary->feel == "Confused") { echo "selected"; } } ?>>Confused</option>
							<option value="Bored" <?php if(isset($diary)) { if($diary->feel == "Bored") { echo "selected"; } } ?>>Bored</option>
							<option value="Scared" <?php if(isset($diary)) { if($diary->feel == "Scared") { echo "selected"; } } ?>>Scared</option>
							<option value="Disapointed" <?php if(isset($diary)) { if($diary->feel == "Disapointed") { echo "selected"; } } ?>>Disapointed</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-3 col-lg-4 col-sm-4">
						<input type="checkbox" <?php if(isset($diary)) { if($diary->share == "Public") { echo "checked"; } } ?> name="txt_share" value="Public" data-toggle="toggle" data-on="Share to Public" data-off="Private" data-onstyle="success" data-offstyle="danger">
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-12">
						<br><br>
						<textarea class="form-control" id="diarytext" name="diary" style="width: 100%; height: 400px;"><?php if(isset($diary)) { echo $diary->diary; } else { echo "Dear lily,"; } ?></textarea>
						<br>
					</div>
				</div>
				<div class="form-group">
					<div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
						<button type="submit" name="save" value="y" class="btn btn-block btn-info btn-lg">Save</button>
					</div>
				</div>
			</form>
		</div>
		<br><br>
	</div>
