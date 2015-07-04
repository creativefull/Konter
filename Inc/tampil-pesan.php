<?php
include 'koneksi.php';
$query = mysql_query("Select * from inbox2 where status = 'Belum Dibaca' order by id_sms Desc") or die (mysql_error());
$hasil = mysql_num_rows($query);
if ($hasil > 0)
{
?>
								<li class="nav-header">
									<i class="icon-envelope-alt"></i>
									<span id="jumlah"><?php echo $hasil; ?></span> Messages
								</li>
<?php	while ($data = mysql_fetch_array($query))
	{
?>

								<li>
									<a href="#">
										<img src="ace/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue"><?php echo $data['dari']; ?></span> >>
												<?php if (strlen($data['pesan']) >= 30) { echo nl2br(substr($data['pesan'], 0,30) . "..."); }
												else
												{
													echo nl2br($data['pesan']);
												}
												?>
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span><?php echo $data['tanggal']; ?></span>
											</span>
										</span>
									</a>
								</li>
<?php
}
if ($hasil > 1)
{
	?>
<li>
									<a href="index.php?page=inbox">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
									<?php
}
else
{
	?>
	<li></li>
	<?php
}
}
?>