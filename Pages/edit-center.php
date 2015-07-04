<?php
$id = mysql_real_escape_string(@$_GET['id']);
$query = mysql_query("Select * from center_agent where id_center = '$id'") or die (mysql_error());
$data = mysql_fetch_array($query);
?>
<div class="page-header position-relative">
	<h1>
		Pengaturan
		<small>
			<i class="icon-double-angle-right"></i>
			Center
			<i class="icon-double-angle-right"></i>
			Edit Center
		</small>
	</h1>
</div><!--/.page-header-->

<div class="row-fluid">
<div class="widget-box span6">
			<div class="widget-header header-color-orange">
											<h5 class="bigger lighter">
												<i class="icon-cog"></i>
												Edit Center
											</h5>
			</div>
			<div class="widget-body">
<div class="widget-main">
<?php
if (@$_POST['submit'])
{
	include 'inc/proses-edit-center.php';
}
?>
<form class="form-horizontal" action="" method="POST">
<div class="control-group">
				<label class="control-label" for="nama">Nama</label>

				<div class="controls">
					<input type="text" id="nama" name="nama" placeholder="Shodiqul Muzaki" value="<?php echo @$data['nama']; ?>">
				</div>
</div>
<div class="control-group">
				<label class="control-label" for="nomor">Nomor Center</label>

				<div class="controls">
					<input type="text" id="nomor" name="nomor" placeholder="087xxxxxxxxxxxx" value="<?php echo @$data['nomor']; ?>">
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