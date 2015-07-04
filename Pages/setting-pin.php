	<script src="ace/assets/js/jquery.maskedinput.min.js"></script>
	<div class="row-fluid">
	<?php
	if (@$_POST['ganti'])
	{
		include 'inc/proses-edit-pin.php';
	}
	?>
	<form action="" method="post">
														<label for="form-field-mask-4">
															Ganti Pin ?
														</label>

														<div>
															<input class="input-medium input-mask-eyescript1" type="text" id="pinlama" name="pinlama" placeholder="Pin Lama">
														</div>
														<div>
															<input class="input-medium input-mask-eyescript2" type="text" id="pinbaru" name="pinbaru" placeholder="Pin Baru">
														</div>
														<div>
														<input type="submit" name="ganti" value="Ganti" class="btn btn-mini btn-success">
														</div>
														</form>
	</div>

													<script>
													$('.input-mask-eyescript1').mask('9999');
													$('.input-mask-eyescript2').mask('9999');
													</script>