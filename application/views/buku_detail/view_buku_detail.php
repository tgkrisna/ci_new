<!DOCTYPE html>
<html>
<head>
	<title>View Buku Detail</title>
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
        <h3 align="center"><span class="glyphicon glyphicon-briefcase"></span><b> Data Detail Buku</b></h3>
</head>
<body>
<div class="form-group pull-right">
<a href="<?php echo base_url(); ?>index.php/welcome/form_buku_detail" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Tambah Detail Buku</a>
</div>
<div class="panel panel-default" >
<div class="panel-heading">Tabel Buku</div>
<table class="table table-hover table-bordered">
    <tr align="center">
		<td>Judul Buku</td>
		<td>Kode Buku</td>
		<td>Kondisi</td>
		<td>Action</td>
	</tr>
	<?php  
	foreach ($buku_detail as  $value) {
		$id=$value->id;
		$judul=$value->judul;
		$kode=$value->kode_buku;
		$kondisi=$value->kondisi;
	?>
	<tr>
		<td align="center"><?php echo "$judul"; ?></td>
		<td align="center"><?php echo "$kode"; ?></td>
		<td align="center"><?php echo "$kondisi"; ?></td>
		<td align="center">
			<a href="<?php echo base_url() ?>index.php/welcome/form_edit_buku_detail?id_buku_detail=<?php echo $id ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="<?php echo base_url() ?>index.php/welcome/delete_buku_detail?id_buku_detail=<?php echo $id ?>" onClick = "return confirm ('Yakin mau Hapus <?php echo $judul; ?> ini?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>