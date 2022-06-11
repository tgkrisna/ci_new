<!DOCTYPE html>
<html>
<head>
	<title>Insert Pengarang</title>
		<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form method="POST" action="<?php echo base_url();?>/index.php/welcome/inserted_penerbit">
	<input type="text" name="nama" placeholder="Nama">
	<input type="text" name="alamat" placeholder="Alamat">
	<input type="number" name="telepon" placeholder="Telepon" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
	<input type="submit" name="submit" value="Submit">
</div>
	</div>
</form>
<div class='whysign'>
<h1>Registering Your Publisher Now !</h1>
    <p>Bataco is simple start up for someone who is inserting data to database, that move for book stationary. Publisher is needed for database that need the Publisher's of the Book that you had input</p>
     <h5>See Database ?<a href="<?php echo base_url(); ?>index.php/welcome/view_penerbit">Database</a> </h5>
     <h5>Input The Author Now ?<a href="<?php echo base_url(); ?>index.php/welcome/insert_pengarang">Author</a> </h5>
      <h5>Input More Books ?<a href="<?php echo base_url(); ?>index.php/welcome/input_buku">Books</a> </h5>
</div>
</body>
</html>