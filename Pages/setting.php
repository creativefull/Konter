<div class="row-fluid">
<?php
@$page = $_GET['act'];
switch ($page) {
	case 'tambah-center':
		include 'Pages/tambah-center.php';
		break;	
	case 'edit-center':
		include 'Pages/edit-center.php';
		break;	
	case 'delete-center':
		include 'Inc/proses-hapus-center.php';
		break;	
	default:
?>
					<div class="page-header position-relative">
						<h1>
							Pengaturan
							<small>
								<i class="icon-double-angle-right"></i>
								Umum
							</small>
						</h1>
					</div><!--/.page-header-->
<div class="row-fluid">
<div class="widget-box span4">
			<div class="widget-header header-color-green">
											<h5 class="bigger lighter">
												<i class="icon-cog"></i>
												Website
											</h5>
			</div>
			<div class="widget-body">
			<?php include 'setting-website.php'; ?>
			</div>
</div>


<div class="widget-box span4">
			<div class="widget-header header-color-red">
											<h5 class="bigger lighter">
												<i class="icon-cog"></i>
												Pin
											</h5>
			</div>
			<div class="widget-body">
			<div class="widget-main">
			<?php include 'setting-pin.php'; ?>
			</div>
			</div>
</div>

<div class="widget-box span4">
			<div class="widget-header header-color-blue">
											<h5 class="bigger lighter">
												<i class="icon-table"></i>
												Nomor Center
											</h5>
			</div>
			<div class="widget-body">
											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>Nomor</th>
											<th>Nama</th>
											<th>
											<a href="?page=setting&act=tambah-center">
											<button class="btn btn-mini btn-success">
												<i class="icon-hdd bigger-125"></i>
												Tambah
											</button>
											</a>
											</th>
										</tr>
									</thead>
									<tbody>
									<?php 
									$query = mysql_query("Select * from center_agent where flag <> 'Dihapus' order by nama Asc") or die (mysql_error());
									while ($data = mysql_fetch_array($query))
									{
									?>
									<tr>
									<td><?php echo $data['nomor']; ?></td>
									<td><?php echo $data['nama']; ?></td>
									<td>
										<a href="?page=setting&act=edit-center&id=<?php echo $data['id_center']; ?>">
											<button class="btn btn-info btn-mini">
												<i class="icon-edit bigger-110 icon-only"></i>
											</button>
										</a>
										<a onclick="return confirm('Apakah Anda Yakin Ingin Menghapusnya ?')" href="?page=setting&act=delete-center&id=<?php echo $data['id_center']; ?>">
											<button class="btn btn-danger btn-mini">
												<i class="icon-trash bigger-110 icon-only"></i>
											</button>
										</a>
									</td>
									</tr>
									<?php
									}
									?>
									</tbody>
									</table>
			</div>
</div>
</div>

<?php
		break;
}
?>
</div>