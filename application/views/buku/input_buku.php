
<!DOCTYPE html>
<html>
<head>
	<title>Form Buku</title>
	<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form action="<?php echo base_url() ?>index.php/welcome/tambah_buku" method="POST">
	<input type="text" name="judul" placeholder="Judul Buku"></input>
	<select name="penerbit" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Penerbit</option>
		<?php  
		foreach ($penerbit as $value) {
			$nama=$value->nama_penerbit;
			$id=$value->id_penerbit;
		?>
		<option value="<?php echo $id ?>"><?php echo "$nama"; ?></option>
		<?php
		}
		?>
	</select>
	<select name="pengarang" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Pengarang</option>
		<?php  
		foreach ($pengarang as $value) {
			$nama=$value->nama_pengarang;
			$id=$value->id_pengarang;
		?>
		<option value="<?php echo $id ?>"><?php echo "$nama"; ?></option>
		<?php
		}
		?>
	</select>
	<input type="number" name="halaman" placeholder="Jumlah Halaman" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);"></input>
	<input type="number" name="tahun" placeholder="Tahun Terbit" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);"></input>
	<input type="submit" name="submit" value="Simpan"> </input>
	</div>
	</div>
</form>
<div class='whysign'>
  <h1>Insert Your Book</h1>
   <p>Bataco is simple start up for someone who is inserting data to database, that move for book stationary. Insert All the Books that You want It</p>
 <h5>See Database ?<a href="<?php echo base_url(); ?>index.php/welcome/lihat_buku">Database</a> </h5>
 <h5>Input Author More ?<a href="<?php echo base_url(); ?>index.php/welcome/insert_pengarang">Author</a> </h5>
 <h5>Input Publisher More ?<a href="<?php echo base_url(); ?>index.php/welcome/insert_penerbit">Publisher</a> </h5>
  <h5>Input Admin More ?<a href="<?php echo base_url(); ?>index.php/welcome/insert_user">Admin</a> </h5>
  <h5>Do You Want to Logout ?<a href="<?php echo base_url(); ?>index.php/welcome/logout" onClick = "return confirm ('Yakin ingin Logout?')">Logout</a> </h5>
 </div>

</body>
</html>