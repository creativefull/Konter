<table class="table table-striped table-bordered table-hover">
													<thead>
														<tr>
															<th>
																<i class="icon-user"></i>
																Nomor
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
INNER JOIN center_agent ON sentitems.DestinationNumber = center_agent.nomor order by sentitems.ID Desc Limit 0,5") or die (mysql_error());
while ($data = mysql_fetch_array($query))
{
	$exploid_nomor = explode(".", $data['TextDecoded']);
?>
														<tr>
															<td class=""><?php echo $exploid_nomor[1]; ?></td>
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