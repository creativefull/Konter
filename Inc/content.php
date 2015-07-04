<?php
@$page = $_GET['page'];
switch ($page) {
	case 'inbox':
		include 'Pages/inbox.php';
		break;
	case 'outbox':
		include 'Pages/outbox.php';
		break;
	case 'sentitem':
		include 'Pages/sent-items.php';
		break;
	case 'setting':
		include 'Pages/setting.php';
		break;
	
	default:
		include 'Pages/home.php';
		break;
}
?>