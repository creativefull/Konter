<?php
include 'koneksi.php';
$query = mysql_query("Select * from inbox2 where status = 'Belum Dibaca'") or die (mysql_error());
$hasil = mysql_num_rows($query);
if ($hasil > 0)
{
echo $hasil;
}
?>