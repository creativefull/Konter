<div class="row-fluid">
					<div class="page-header position-relative">
						<h1>
							Dahboard
							<small>
								<i class="icon-double-angle-right"></i>
								Overview
							</small>
						</h1>
					</div><!--/.page-header-->


	<div class="row-fluid">
		<div class="widget-box span6">
			<div class="widget-header header-color-blue">
											<h5 class="bigger lighter">
												<i class="icon-table"></i>
												Isi Pulsa Sekarang
											</h5>
			</div>

			<div class="widget-body" style="padding:1em">
			<?php
			if (@$_POST['submit'])
			{
				include 'inc/proses-kirim.php';
			}
			?>
				<form class="form-horizontal" action="" method="POST">
					<div class="control-group">
									<label class="control-label" for="nomor">Nomor Tujuan</label>

									<div class="controls">
										<input type="text" id="nomor" name="tujuan" placeholder="087xxxxxxxxxxxx" value="<?php echo @$_POST['tujuan']; ?>">
									</div>
					</div>
					<div class="control-group">
					<?php if (@$_POST['submit'])
					{
						?>
					<script>
					$(function() {
					$("#total").val('<?php echo @$_POST['jumlah']; ?>');
					$("#server").val('<?php echo @$_POST['server']; ?>');
					});
					</script>
					<?php
					}
					?>
									<label class="control-label" for="total">Jumlah</label>

									<div class="controls">
										<select id="total" name="jumlah">
											<option value="5">5000</option>
											<option value="10">10000</option>
											<option value="20">20000</option>
											<option value="50">50000</option>
											<option value="100">100000</option>
										</select>
									</div>
					</div>
					<div class="control-group">
									<label class="control-label" for="server">Center</label>

									<div class="controls">
										<select id="server" name="server">
										<?php
										$query = mysql_query("Select * from center_agent order by id_center Asc") or die (mysql_error());
										while ($data = mysql_fetch_array($query))
										{
										?>
											<option value="<?php echo $data['nomor']; ?>"><?php echo $data['nama']; ?></option>
										<?php
										}
										?>
										</select>
									</div>
					</div>
					<div class="control-group">
									<label class="control-label" for="pin">Pin Anda</label>

									<div class="controls">
										<input type="password" id="pin" name="pin">
									</div>
					</div>
					<div class="control-group">
									<div class="controls">
									<input type="submit" name="submit" value="Kirim" class="btn btn-large btn-info">
									</div>
					</div>
				</form>
			</div>
		</div>

		<div class="widget-box span6">
			<div class="widget-header header-color-blue">
											<h5 class="bigger lighter">
												<i class="icon-table"></i>
												Transaksi Terakhir
											</h5>
			</div>

			<div class="widget-body">
			<?php include 'last-transaction.php'; ?>
			</div>
		</div>
	</div>
</div>
