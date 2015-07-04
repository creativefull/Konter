<?php
$nomor =  mysql_real_escape_string(@$_POST['nomor']);
$nama = mysql_real_escape_string(@$_POST['nama']);

if ($nomor == "" && $nama == "")
{
?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Nomor Dan Nama Harus Dimasukkan
</div>
<?php	
}
else if ($nomor == "")
{
	?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Nomor Center Tidak Boleh Kosong
</div>
	<?php
}
else if ($nama == "")
{
	?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Nama Center Tidak Boleh Kosong
</div>
	<?php
}
else
{
	$query = mysql_query("Insert into center_agent values('','$nomor','$nama','Ditampilkan')") or die (mysql_error());
	?>
<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-ok green"></i>
								Nomor Center Berhasil Dimasukkan
</div>
<meta http-equiv="refresh" content="2; url=index.php?page=setting">
	<?php
}