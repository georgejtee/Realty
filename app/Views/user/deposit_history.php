<div class="container">
	<?php $amount = 0 ?>
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-3">
		<h1 class="h2">Deposit History</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<a href="<?php echo(base_url('User/addFunds')); ?>">
				<button type="button" class="btn btn-sm btn-primary"><i class="fas fa-money"></i> Add Funds</button>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="table-responsive">
			<table class="table table-hover" id="dataTables-table" data-order='[[ 0, "asc" ]]'>
				<thead>
					<tr>
						<th>Method</th>
						<th>Amount</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($deposits as $item):?>
						<tr>
							<?php $amount +=  $item['amount']; ?>
							<td>Visa Card</td>
							<td><?= $item['amount'] ?></td>
							<td><?= $item['created_at'] ?></td>
							<td><?= $item['status'] ==1 ? "Accepted" : "Failed" ?></td>
						</tr>
					<?php endforeach;?>
					<tr>
						<td><i>Total Deposit</i></td>
						<td class="text-right" ><b><?php echo($amount); ?></b></td>

					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<br>
	<br>
	<br>
</div>