<div class="page-header position-relative">
	<h1>
		Pengaturan
		<small>
			<i class="icon-double-angle-right"></i>
			Center
			<i class="icon-double-angle-right"></i>
			Tambah Center
		</small>
	</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="widget-box span6">
			<div class="widget-header header-color-red">
											<h5 class="bigger lighter">
												<i class="icon-cog"></i>
												Tambah Center
											</h5>
			</div>
			<div class="widget-body">
<div class="widget-main">
<?php
if (@$_POST['submit'])
{
	include 'inc/proses-tambah-center.php';
}
?>
<form class="form-horizontal" action="" method="POST">
<div class="control-group">
				<label class="control-label" for="nama">Nama</label>

				<div class="controls">
					<input type="text" id="nama" name="nama" placeholder="Shodiqul Muzaki" value="<?php echo @$_POST['nama']; ?>">
				</div>
</div>
<div class="control-group">
				<label class="control-label" for="nomor">Nomor Center</label>

				<div class="controls">
					<input type="text" id="nomor" name="nomor" placeholder="087xxxxxxxxxxxx" value="<?php echo @$_POST['nomor']; ?>">
				</div>
</div>
<div class="control-group">
				<div class="controls">
					<input type="submit" value="Simpan" class="btn btn-mini btn-success" name="submit">
					<a href="javascript:history.go(-1)"><input type="button" value="Kembali" class="btn btn-mini btn-danger" name="kembali"></a>
				</div>
</div>
</form>

</div>
</div>
</div>
</div>