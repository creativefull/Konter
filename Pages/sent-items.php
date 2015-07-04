<div class="row-fluid">
<div class="page-header position-relative">
	<h1>
		Pesan
		<small>
			<i class="icon-double-angle-right"></i>
			Terkirim
		</small>
	</h1>
</div><!--/.page-header-->
<!-- Data Tabel -->

							<div class="row-fluid">
								<div class="table-header">
									Pesan Terkirim
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>
																<i class="icon-user"></i>
																Nomor
															</th>
															<th>
																<i class="icon-group"></i>
																Jumlah
															</th>
															<th>
																<i class="icon-group"></i>
																Center
															</th>
															<th class="hidden-480">
																<i class="icon-calendar"></i>
																Tanggal
															</th>
														</tr>
													</thead>

													<tbody>
<?php
$query = mysql_query("SELECT sentitems . * , center_agent.nama
FROM sentitems
INNER JOIN center_agent ON sentitems.DestinationNumber = center_agent.nomor order by sentitems.ID Desc") or die (mysql_error());
while ($data = mysql_fetch_array($query))
{
	$exploid_nomor = explode(".", $data['TextDecoded']);
?>
														<tr>
															<td class=""><?php echo $exploid_nomor[1]; ?></td>

															<td class="hidden-480">
																<span class="label label-success"><?php echo "Rp " . number_format($exploid_nomor[0]."000", 0, '', '.') . ",-"; ?></span>
															</td>
															<td><?php echo $data['nama']; ?></td>

															<td class="hidden-480">
																<span class="label label-warning"><?php echo $data['SendingDateTime']; ?></span>
															</td>
														</tr>
<?php
}
?>
													</tbody>
												</table>
												</div>