<?php  
if (isset($_GET['delete'])) {
	echo "<script type='text/javascript'>alert('Delete berhasil !')</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>View User</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.css">
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<div class="col-md-10">
    <div class="page-header">
        <h3 align="center"><span class="glyphicon glyphicon-briefcase"></span><b> Data Admin</b></h3>
</head>
<body>
<div class="form-group pull-right">
<a href="<?php echo base_url(); ?>index.php/welcome/insert_user" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Tambah Admin</a>
</div>
<div class="panel panel-default" >
<div class="panel-heading">Tabel Buku</div>
<table class="table table-hover table-bordered">
    <tr align="center">
		<td>Username</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Telepon</td>
		<td>Action</td>
	</tr>
	<?php  
	foreach ($user as $value) {
		$id=$value->id;
		$username=$value->username;
		$nama=$value->nama;
		$alamat=$value->alamat;
		$telepon=$value->telepon;
	?>

	<tr>
		<td align="center"><?php echo "$username"; ?></td>	
		<td align="center"><?php echo "$nama"; ?></td>
		<td align="center"><?php echo "$alamat"; ?></td>
		<td align="center"><?php echo "$telepon"; ?></td>
		<td align="center">
			<a href="<?php echo base_url(); ?>index.php/welcome/edit_user?id=<?php echo $id ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="<?php echo base_url(); ?>index.php/welcome/delete_user?id=<?php echo $id ?>" onClick = "return confirm ('Yakin mau Hapus <?php echo $nama; ?> ini?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
		</td>
	</tr>

	<?php
	}
	?>
</table>
</body>
</html>