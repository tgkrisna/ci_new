<!DOCTYPE html>
<html>
<head>
	<title>View Buku</title>

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
        <h3 align="center"><span class="glyphicon glyphicon-briefcase"></span><b> Data Buku</b></h3>
</head>
<body>
<div class="form-group pull-right">
<a href="<?php echo base_url(); ?>index.php/welcome/input_buku" class="btn btn-info"><span class="glyphicon glyphicon-plus"></span> Tambah Buku</a>
</div>
<div class="panel panel-default" >
<div class="panel-heading">Tabel Buku</div>
<table class="table table-hover table-bordered">
    <tr align="center" >
		<td>Judul</td>
		<td>Penerbit</td>
		<td>Pengarang</td>
		<td>Jumlah Halaman</td>
		<td>Tahun</td>
		<td>Addedby</td>
		<td>Action</td>
	</tr>
	<?php  
	foreach ($buku as $value) {
		$id_buku=$value->id;
		$judul=$value->judul;
		$nama_pengarang=$value->nama_pengarang;
		$nama_penerbit=$value->nama_penerbit;
		$halaman=$value->jumlah_halaman;
		$tahun_terbit=$value->tahun_terbit;
		$adder=$value->nama;
	?>
	<tr>
		<td align="center"><?php echo "$judul"; ?></td>
		<td align="center"><?php echo "$nama_penerbit"; ?></td>
		<td align="center"><?php echo "$nama_pengarang"; ?></td>
		<td align="center"><?php echo "$halaman"; ?></td>
		<td align="center"><?php echo "$tahun_terbit"; ?></td>
		<td align="center"><?php echo "$adder"; ?></td>
		<td align="center">
			<a href="<?php echo base_url(); ?>/index.php/welcome/form_buku_detail?id_buku=<?php echo $id_buku; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-folder-open"></span></a>
			<a href="<?php echo base_url(); ?>/index.php/welcome/form_edit_buku?id_buku=<?php echo $id_buku; ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="<?php echo base_url(); ?>/index.php/welcome/hapus_buku?id_buku=<?php echo $id_buku; ?>" onClick = "return confirm ('Yakin mau Hapus <?php echo $judul; ?> ini?')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
		</td>
	</tr>
	<?php
	}
	?>
</table>
</body>
</html>
