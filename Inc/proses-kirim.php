<?php
$noTujuan = mysql_real_escape_string($_POST['tujuan']);
$jumlah = mysql_real_escape_string($_POST['jumlah']);
$server = mysql_real_escape_string($_POST['server']);
$pin = mysql_real_escape_string($_POST['pin']);

$queryPin = mysql_query("Select * from pin where pin.pin = '$pin'") or die (mysql_error());
$hasilPin = mysql_num_rows($queryPin);

if ($noTujuan == "" && $pin == "")
{
	?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Nomor Dan PIN Belum DiMasukkan
</div>
	<?php
}
else if ($noTujuan == "")
{
	?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Nomor Tujuan Belum Dimasukkan
</div>
	<?php
}
else if($pin == "")
{
?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								PIN Belum Dimasukkan
</div>
<?php	
}
else if($hasilPin == 0)
{
?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								PIN Anda Salah
</div>
<?php	
}
else
{
$pesan = $jumlah.".".$noTujuan.".".$pin;

$query = "INSERT INTO outbox (DestinationNumber, TextDecoded, CreatorID) VALUES ('$server', '$pesan', 'Gammu')";
$hasil = mysql_query($query);

if ($hasil)
{
?>
<div class="alert alert-block alert-success">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-ok green"></i>
								Topup ke nomor <?php echo $noTujuan; ?> Berhasil
							</div>
<?php
}
else
{
?>
<div class="alert alert-block alert-danger">
								<button type="button" class="close" data-dismiss="alert">
									<i class="icon-remove"></i>
								</button>

								<i class="icon-warning-sign red"></i>
								Pengiriman Gagal
							</div>
<?php
}
}
?>