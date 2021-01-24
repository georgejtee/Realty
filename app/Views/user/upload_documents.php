
<div class="container">
	<form action="<?php echo base_url('User/upload');?>"  method="post" class="dropzone">
	  <div class="fallback">
	    <input name="file" type="file" multiple />
	  </div>
	</form>
</div>

<script type="text/javascript">
	
	$("div#myId").dropzone({ url: "/file/post" });
</script>