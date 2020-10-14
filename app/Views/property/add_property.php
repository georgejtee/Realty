<style type="text/css">
	.preview-images-zone {
		width: 100%;
		border: 1px solid #ddd;
		min-height: 180px;
		/* display: flex; */
		padding: 5px 5px 0px 5px;
		position: relative;
		overflow:auto;
	}
	.preview-images-zone > .preview-image:first-child {
		height: 185px;
		width: 185px;
		position: relative;
		margin-right: 5px;
	}
	.preview-images-zone > .preview-image {
		height: 90px;
		width: 90px;
		position: relative;
		margin-right: 5px;
		float: left;
		margin-bottom: 5px;
	}
	.preview-images-zone > .preview-image > .image-zone {
		width: 100%;
		height: 100%;
	}
	.preview-images-zone > .preview-image > .image-zone > img {
		width: 100%;
		height: 100%;
	}
	.preview-images-zone > .preview-image > .tools-edit-image {
		position: absolute;
		z-index: 100;
		color: #fff;
		bottom: 0;
		width: 100%;
		text-align: center;
		margin-bottom: 10px;
		display: none;
	}
	.preview-images-zone > .preview-image > .image-cancel {
		font-size: 18px;
		position: absolute;
		top: 0;
		right: 0;
		font-weight: bold;
		margin-right: 10px;
		cursor: pointer;
		display: none;
		z-index: 100;
	}
	.preview-image:hover > .image-zone {
		cursor: move;
		opacity: .5;
	}
	.preview-image:hover > .tools-edit-image,
	.preview-image:hover > .image-cancel {
		display: block;
	}
	.ui-sortable-helper {
		width: 90px !important;
		height: 90px !important;
	}

	.container {
		padding-top: 50px;
	}

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