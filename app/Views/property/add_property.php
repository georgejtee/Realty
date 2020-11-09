<div class="container">
	<form action="<?php echo base_url("/Property/addProperty");?>" method="post" enctype="multipart/form-data">

		<div class="row">

			<div class="col-sm-6">

				<div class="form-group">
					<label for="investmentRequired">Investment Required</label>
					<input type="number" class="form-control" id="investmentRequired" name="investmentRequired" aria-describedby="investmentRequired" placeholder="Enter Investment">
				</div>

				<div class="form-group">
					<label>Period</label>
					<select class="form-control" name="">
						<option value="6">6 months</option>
						<option value="12">12 months</option>
						<option value="18">18 months</option>
						<option value="24">24 months</option>
					</select>
				</div>

				<div class="form-group">
					<label for="investment">Investment Required</label>
					<input type="input" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment">
				</div>



				<div class="form-group">
					<label for="shortDescription">Short Description</label>
					<textarea type="text" class="form-control" id="shortDescription" name="shortDescription"aria-describedby="emailHelp" placeholder="short description 300 words"></textarea> 
				</div>

				<div class="form-group">
					<label for="investment">Investment Return Percentage</label>
					<input type="input" class="form-control" id="investmentReturnPercentage" name="" aria-describedby="emailHelp" name="investmentReturnPercentage" placeholder="Enter Investment Return Percentage">
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

				<div class="form-group">
					<label for="investment">Investment Required</label>
					<input type="input" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment">
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea type="text" class="form-control" id="investment" name="description" placeholder="Enter Description"></textarea> 
				</div>

				<div class="form-group">
					<label for="investment">Property Images</label>
					<input type="file" name="photo" class="form-control" multiple="true">
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
<script type="text/javascript">

	$(document).ready(function() {
		document.getElementById('pro-image').addEventListener('change', readImage, false);


		$(document).on('click', '.image-cancel', function() {
			let no = $(this).data('no');
			$(".preview-image.preview-show-"+no).remove();
		});
	});


	var num = 4;
	function readImage() {
		if (window.File && window.FileList && window.FileReader) {
        var files = event.target.files; //FileList object
        var output = $(".preview-images-zone");

        for (let i = 0; i < files.length; i++) {
        	var file = files[i];
        	if (!file.type.match('image')) continue;

        	var picReader = new FileReader();

        	picReader.addEventListener('load', function (event) {
        		var picFile = event.target;
        		var html =  '<div class="preview-image preview-show-' + num + '">' +
        		'<div class="image-cancel" data-no="' + num + '">x</div>' +
        		'<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
        		'<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
        		'</div>';

        		output.append(html);
        		num = num + 1;
        	});

        	picReader.readAsDataURL(file);
        }
        $("#pro-image").val('');
    } else {
    	console.log('Browser not support');
    }
}
</script>