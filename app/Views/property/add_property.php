<style type="text/css">
	

</style>
<div class="col-sm-6">
	
	<div class="form-group">
		<label for="investment">Investment Required</label>
		<input type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment">
	</div>

	<div class="form-group">
		<label for="investment">Investment Period</label>
		<select class="form-control" id="exampleFormControlSelect1">
			<option>6 months</option>
			<option>12 months</option>
			<option>18 months</option>
			<option>24 months</option>
		</select>
	</div>

	<div class="form-group">
		<label for="investment">Investment Required</label>
		<input type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment">
	</div>

	

	<div class="form-group">
		<label for="investment">Short Description</label>
		<textarea type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="short description 300 words"></textarea> 
	</div>
	<div class="form-group">
		<label for="investment">Investment Return Percentage</label>
		<input type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment Return Percentage">
	</div>

</div>

<div class="col-sm-6">
	
	<div class="form-group">
		<label for="investment">Location</label>
		<input type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Location">
	</div>

	<div class="form-group">
		<label for="investment">Development Time</label>
		<input type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment">
	</div>

	<div class="form-group">
		<label for="investment">Investment Required</label>
		<input type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment">
	</div>

	<div class="form-group">
		<label for="investment">Description</label>
		<textarea type="email" class="form-control" id="investment" aria-describedby="emailHelp" placeholder="Enter Investment"></textarea> 
	</div>

	<div class="form-group">
		<label for="investment">Property Images</label>
		<fieldset class="form-group">
			<a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
			<input type="file" id="pro-image" name="pro-image" style="display: none;" class="form-control" multiple>
		</fieldset>
		<div class="preview-images-zone">

		</div>
	</div>

</div>
<div class="divider">
	
</div>

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