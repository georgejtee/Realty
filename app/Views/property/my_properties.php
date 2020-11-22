<div class="container"><h3>My Properties</h3>
	<?php $amount = 0 ?>
	<div class="row">
		<div class="table-responsive">
			<table class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
				<thead>
					<tr>
						<th>Property</th>
						<th>Amount Required</th>
						<th>Amount Invested</th>
						<th>Date Created</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($properties as $item):?>
						<?php $amount +=  $item['investmentRequired']; ?>
						<tr>
							<td><?= $item['propertyId'] ?></td>
							<td><?= $item['investmentRequired'] ?></td>
							<td><?= $item['pledgedAmount'] ?></td>
							<td><?= $item['created_at'] ?></td>

							<td class="text-right">
								<a class="btn btn-outline-secondary btn-sm" href="<?= base_url('Property/property/'.$item['propertyId']) ?>"><i class="fas fa-user-check"></i> view Property</a>                        

							</td>
						</tr>
					<?php endforeach;?>
					<tr>
						<td><i>Properties Total</i></td>
						<td class="text-right" ><b><?php echo($amount); ?></b></td>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>