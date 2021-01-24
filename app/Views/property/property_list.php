<div class="container"><h3>Available Properties</h3>
	<hr>
	<?php foreach($property as $row):?>
		<?php $percentage = $row['pledgedAmount']/($row['investmentRequired']>0 ? $row['investmentRequired'] : 1)*100; ?>

		<div class="row">
			<div class="col-md-4">
				<img src="<?php echo(base_url('uploads/'.session()->get('id').'/'.$row['imagepath1'])); ?>" class="img img-rounded img-responsive">
			</div>
			<div class="col-md-8">
				<h2>R <?php echo($row['investmentRequired']); ?> Package Price.</h2>
				<h3>Development Project - <?php echo($row['propertyId']); ?></h3>

				<span class="col-md-12 bold">
					<b><?php echo($row['investmentReturnPercentage']); ?> Per Annum Return Paid Monthly</b>
				</span>	
				<span class="col-md-12">
					<b><?php echo($row['developmentTime']); ?> Project</b>
				</span>
				<p class="col-md-12">
					<?php echo($row['shortDescription']); ?>
				</p>


				<div class="progress col-sm-12">
					<div class="progress-bar " role="progressbar" aria-valuenow="<?php echo($percentage); ?>" aria-valuemin="0" aria-valuemax="100" 
						style="width: <?php echo($percentage); ?>%;">
						<?php echo($percentage); ?> %
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-4">
						<b><?php echo($row['pledgedAmount']/($row['investmentRequired']>0 ? $row['investmentRequired'] : 1)*100); ?> %</b>
						<br>
						Funded
					</div>
					<div class="col-md-4">
						<b>R <?php echo($row['pledgedAmount']); ?></b>
						<br>
						Pledged
					</div>
					<div class="col-md-4">
						<b>R <?php echo($row['investmentRequired'] - $row['pledgedAmount']); ?></b>
						<br>
						Remaining
					</div>
				</div>

				
				<?php $url =  "Property/property/".$row['propertyId']?>

				<div class="col-md-12"><button class="btn btn-primary"><a href="<?php echo(base_url($url)) ; ?>">View More details</a></button></div>

			</div>

		</div >
		<hr style="border-bottom: 1px solid #ccc;">
	<?php endforeach;?>
</div>