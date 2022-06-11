<!DOCTYPE html>
<html>
<head>
	<title>Form Buku Detail</title>
	<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form action="<?php echo base_url() ?>index.php/welcome/insert_buku_detail" method="POST">
	<select name="buku" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Buku</option>
		<?php  
		foreach ($buku as $value) {
			$judul=$value->judul;
			$id=$value->id;
		?>
		<option value="<?php echo $id ?>"><?php echo "$judul"; ?></option>
		<?php
		}
		?>
	</select>
	<input type="text" name="kode" placeholder="Kode">
	<select name="kondisi" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Kondisi</option>
		<?php  
		foreach ($kondisi as $value) {
			$kondisi=$value->kondisi;
			$id=$value->id;
		?>
		<option value="<?php echo $id ?>"><?php echo "$kondisi"; ?></option>
		<?php
		}
		?>
	</select>
	<input type="submit" name="submit" value="Submit">
	</div>
	</div>
</form>
<div class='whysign'>
  <h1>Insert Your Book Detail</h1>
   <p>Bataco is simple start up for someone who is inserting data to database, that move for book stationary. Book Detail is very important For Collecting the Book</p>
    <h5>See Database ?<a href="<?php echo base_url(); ?>index.php/welcome/view_buku_detail">Database</a> </h5>
     <h5>Go Back ?<a href="<?php echo base_url(); ?>index.php/welcome/input_buku">Book</a> </h5>
</body>
</html>