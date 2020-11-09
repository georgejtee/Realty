<div class="container"><h3>User Properties</h3>
	<?php $amount = 0 ?>
	<div class="row">
		<div class="table-responsive">
			<table class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
				<thead>
					<tr>
						<th>Property</th>
						<th>Amount</th>
						<th>Date</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($properties as $item):?>
						<?php $amount +=  $item['amount']; ?>
						<tr>
							<td><?= $item['propertyId'] ?></td>
							<td><?= $item['amount'] ?></td>
							<td><?= $item['date'] ?></td>

							<td class="text-right">
								<a class="btn btn-outline-secondary btn-sm" href="<?= base_url('Property/property/'.$item['propertyId']) ?>"><i class="fas fa-user-check"></i> view Property</a>                        

							</td>
						</tr>
					<?php endforeach;?>
					<tr>
						<td><i>Total Investments</i></td>
						<td class="text-right" ><b><?php echo($amount); ?></b></td>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>