<div class="row-fluid">
<div class="page-header position-relative">
	<h1>
		Pesan
		<small>
			<i class="icon-double-angle-right"></i>
			Kotak Keluar
		</small>
	</h1>
</div><!--/.page-header-->
<!-- Data Tabel -->

							<div class="row-fluid">
								<div class="table-header">
									Kotak Keluar
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Tujuan</th>
											<th>Pesan</th>
											<th>Tanggal</th>
										</tr>
									</thead>
									<tbody>
<?php
$query = mysql_query("SELECT outbox . * , center_agent.nama
FROM outbox
INNER JOIN center_agent ON outbox.DestinationNumber = center_agent.nomor order by outbox.ID Desc") or die (mysql_error());
while ($data = mysql_fetch_array($query))
{
?>
										<tr>
											<td><?php echo $data['nama']; ?></td>
											<td><?php echo $data['TextDecoded']; ?></td>
											<td><?php echo $data['SendingDateTime']; ?></td>
										</tr>
<?php
}
?>									</tbody>
									</table>
									</div>
								</div>
</div>
