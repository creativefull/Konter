<?php
$id = mysql_real_escape_string(@$_GET['id']);
$query = mysql_query("Select * from center_agent where id_center = '$id'") or die (mysql_error());
$hasil = mysql_num_rows($query);
if ($hasil == 0)
{
	?>
	<script>
	alert('Nomor Tidak Ada Di Database');
	</script>
	<?php
}
else
{
	mysql_query("Update center_agent set flag = 'Dihapus' where id_center = ' $id'") or die (mysql_error())
?>
<script>
alert("Nomor Agent berhasil dihapus");
window.location.href='index.php?page=setting';
</script>
<?php
}
?>