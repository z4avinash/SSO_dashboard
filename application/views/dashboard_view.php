<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<h1>This is the Dashboard</h1>
	<h2>Welocome <?php echo $data['full_name'] ?></h2>
	<br><br><br>
	<a href="<?php echo base_url('logout') ?>"><button>Logout</button></a>
</body>
</html>