<div class="container">
	<form action="<?php echo base_url("/Property/addProperty");?>" method="post" enctype="multipart/form-data">

		<div class="row">

			<div class="col-sm-6">

				<div class="form-group">
					<label for="investmentRequired">Name</label>
					<input type="number" class="form-control" id="investmentRequired" name="investmentRequired" aria-describedby="investmentRequired" placeholder="Enter Investment">
				</div>

				<div class="form-group">
					<label>Property</label>
					<select class="form-control" name="">
						<option value="6">6 months</option>
						<option value="12">12 months</option>
						<option value="18">18 months</option>
						<option value="24">24 months</option>
					</select>
				</div>

			</div>

			<div class="col-sm-6">

				<div class="form-group">
					<label for="location">Location</label>
					<input type="input" class="form-control" id="location" name="location" aria-describedby="emailHelp" placeholder="Enter Location">
				</div>

				<div class="form-group">
					<label for="developmentTime">Development Time</label>
					<input type="input" class="form-control" id="developmentTime" name="developmentTime" aria-describedby="emailHelp" placeholder="Enter Investment">
				</div>		

			</div>
			<div class="divider">

			</div>

		</div>

		<div class="row">
			<div class="col-12 col-sm-4">
				<button type="submit" class="btn btn-primary">Save Property</button>
			</div>
		</div>
	</form>
</div>
<br>
<br>
