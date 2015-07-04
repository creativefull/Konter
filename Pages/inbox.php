<div class="row-fluid">
<div class="page-header position-relative">
	<h1>
		Pesan
		<small>
			<i class="icon-double-angle-right"></i>
			Kotak Masuk
		</small>
	</h1>
</div><!--/.page-header-->
<!-- Data Tabel -->

							<div class="row-fluid">
								<div class="table-header">
									Kotak Masuk
								</div>

								<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Dari</th>
											<th>Pesan</th>
											<th>Tanggal</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
<?php
$query = mysql_query("SELECT inbox2 . *
FROM inbox2
order by inbox2.id_sms Desc") or die (mysql_error());
while ($data = mysql_fetch_array($query))
{
?>
										<tr>
											<td><?php echo $data['dari']; ?></td>
											<td><?php echo $data['pesan']; ?></td>
											<td><?php echo $data['tanggal']; ?></td>
											<td>
												<a href="?page=inbox&act=open&id=<?php echo $data['id_sms']; ?>">
													<button class="btn <?php if ($data['status'] == "Belum Dibaca") { ?>btn-info <?php } else { ?> btn-warning<?php } ?> btn-mini">
														<i class="<?php if ($data['status'] == "Belum Dibaca") { ?>icon-envelope <?php } else { ?>icon-folder-open<?php } ?> bigger-110 icon-only"></i>
													</button>
												</a>
												<a href="?page=inbox&act=delete&id=<?php echo $data['id_sms']; ?>">
													<button class="btn btn-danger btn-mini">
														<i class="icon-trash bigger-110 icon-only"></i>
													</button>
												</a>
											</td>
										</tr>
<?php
}
?>									</tbody>
									</table>
									</div>
								</div>
</div>
