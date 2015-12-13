<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<div class="container">
		<h1 class="text-center">My Diary</h1>
		<br>
		
		<?php
		if(count($query) > 0) {
			if($query) { 
				$count = 0;
				$total = count($query);
				foreach($query as $diary) {
					if($count == 0 || $count % 4 == 0) {
			?>
				<div class="row">
			<?php
					}
			?>
				<a href="<?php echo base_url('d/'. $diary->id); ?>">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 each-diary text-center">
						<h2><?php echo date('d', strtotime($diary->date)); ?></h2>
						<h4><?php echo date('F', strtotime($diary->date)); ?></h4>
						<h4><?php echo date('Y', strtotime($diary->date)); ?></h4>
					</div>
				</a>
			<?php
					if(($count+1) % 4 == 0 || $count+1 == $total) {
			?>
				</div>
			<?php
					}
					$count += 1;
				} 
			} else {
			?>
			Your diary is empty. Let's make your first diary at <a href="<?php echo base_url('dash'); ?>">here</a>.
		<?php }
		} ?>
		<br>
		<div class="text-center">
			<?php echo $paging; ?>
		</div>
		<br><br>
	</div>
