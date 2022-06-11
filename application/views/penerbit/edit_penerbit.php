<!DOCTYPE html>
<html>
<head>
	<title>Edit Penerbit</title>
	<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form method="POST" action="<?php echo base_url();?>index.php/welcome/edited_penerbit">
	<input type="text" name="nama" placeholder="Nama" value="<?php echo $penerbit['nama_penerbit']; ?>">
	<input type="text" name="alamat" placeholder="Alamat" value="<?php echo $penerbit['alamat']; ?>">
	<input type="text" name="telepon" placeholder="Telepon" value="<?php echo $penerbit['telepon']; ?>" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
	<input type="hidden" name="id_penerbit" value="<?php echo $penerbit['id_penerbit']; ?>">
	<input type="submit" name="submit" value="Save" onClick = "return confirm ('Data yang dimasukkan sudah benar?')">
</div>
</div>
</form>
<div class='whysign'>
    <h1>Remember !!!</h1>
    <p>Before you leaving this editor, remember to Save it and Don't make same mistake :)</p>
     <h5>Go Back ?<a href="<?php echo base_url(); ?>index.php/welcome/view_penerbit">Back</a> </h5>
</div>
</body>
</html>