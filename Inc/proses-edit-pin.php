<?php
$pinLama = mysql_real_escape_string(@$_POST['pinlama']);
$pinBaru = mysql_real_escape_string(@$_POST['pinbaru']);

$query = mysql_query("Select * from pin where id_pin = '1'") or die (mysql_error());
$data = mysql_fetch_array($query);
if ($pinLama != $data['pin'])
{
	?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Pin lama tidak benar
</div>
<?php
}
else if ($pinLama == "")
{
	?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Pin lama masih kosong
</div>
<?php
}
else
{
	mysql_query("Update pin set pin.pin = '$pinBaru', flag='Diedit' Where id_pin = '1'") or die (mysql_error());
	?>
<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-ok green"></i>
								Pin Berhasil Diganti
</div>
	<?php
}
?>