
<div class="row col-sm-12 container">

	<?php $investmentUrl =  "Property/invest/" ;?>
	<div class="col-md-4">
		
		<div class="row">
			<img src="<?php base_url('house.jpg'); ?>" class="img-rounded img-responsive">
		</div>

		<div class="row">
			<div class="col-md-4">
				<img src="<?php base_url('house.jpg'); ?>" class="img-rounded img-responsive">
			</div>
			<div class="col-md-4">
				<img src="<?php base_url('xxx.jpg'); ?>" class="img-rounded img-responsive">
			</div>
			<div class="col-md-4">
				<img src="<?php echo($property['imagepath1']); ?>" class="img-rounded img-responsive">
			</div>
			
		</div>
			<form action="<?php base_url('Property/invest'); ?>" method="post">

				<div class="form-group">
					<label>
						investment Amount
					</label>
					<input class="form-control" type="number" name="amount">

				</div>
				<input type="hidden" name="propertId" value="<?php echo($property['propertId']) ?>">


				<div class="form-group">
					<button type="submit" class="btn btn-primary"> Invest</button>
				</div>
			</form>
		
	</div>
	
	<div class="col-md-8">
		
		<?php $percentage = $property['pledgedAmount']/($property['investmentRequired']>0 ? $property['investmentRequired'] : 1)*100; ?>
		<div class="row">


			<div >
				<h2>R <?php echo($property['investmentRequired']); ?> Package Price.</h2>
				<h3>Development Project - <?php echo($property['propertId']); ?></h3>

				<span class="col-md-12 bold">
					<b><?php echo($property['investmentReturnPercentage']); ?> Per Annum Return Paid Monthly</b>
				</span>	
				<span class="col-md-12">
					<b><?php echo($property['developmentTime']); ?> Project</b>
				</span>
				<p class="col-md-12">
					<?php echo($property['shortDescription']); ?>
				</p>
				<p>
					<?php echo($property['description']);?>
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
						<b><?php echo($property['pledgedAmount']/($property['investmentRequired']>0 ? $property['investmentRequired'] : 1)*100); ?> %</b>
						<br>
						Funded
					</div>
					<div class="col-md-4">
						<b>R <?php echo($property['pledgedAmount']); ?></b>
						<br>
						Pledged
					</div>
					<div class="col-md-4">
						<b>R <?php echo($property['investmentRequired'] - $property['pledgedAmount']); ?></b>
						<br>
						Remaining
					</div>
				</div>
				<br>
				<br>

				Investment Table
				<table class="table">
					<th>Amount</th>
					<th>Intrest Percentage</th>
					<th>Profit</th>
					<tbody>
						
						<tr>
							<td>10 000</td>
							<td><?php echo ($property['investmentReturnPercentage']); ?></td>
							<td><?php echo(10000*$property['investmentReturnPercentage']/100) ?></td>
						</tr>
						<tr>
							<td>100 000</td>
							<td><?php echo ($property['investmentReturnPercentage']); ?></td>
							<td><?php echo(100000*$property['investmentReturnPercentage'])/100 ?></td>
						</tr>
						<tr>
							<td>1 000 000</td>
							<td><?php echo ($property['investmentReturnPercentage']); ?></td>
							<td><?php echo(1000000*$property['investmentReturnPercentage']/100) ?></td>
						</tr>
					</tbody>
				</table>

			</div>

		</div >
	</div>
</div>