<!DOCTYPE html>
<html>
<head>
	<title>Insert Penerbit</title>
	<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form method="POST" action="<?php echo base_url();?>index.php/welcome/edited_user">
	<input type="text" name="username" placeholder="username" value="<?php echo $user['username']; ?>">
	<input type="password" name="password" placeholder="Password" value="<?php echo $user['password']; ?>" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);"> 
	<input type="text" name="nama" placeholder="Nama" value="<?php echo $user['nama']; ?>"> 
	<input type="text" name="alamat" placeholder="Alamat" value="<?php echo $user['alamat']; ?>">
	<input type="text" name="telepon" placeholder="Telepon" value="<?php echo $user['telepon']; ?>" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
	<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
	<input type="submit" name="submit" value="Save" onClick = "return confirm ('Data yang dimasukkan sudah benar?')">
</div>
</div>
</form>
</body>
<div class='whysign'>
    <h1>Remember !!!</h1>
    <p>Before you leaving this editor, remember to Save it and Don't make same mistake :)</p>
     <h5>Go Back ?<a href="<?php echo base_url(); ?>index.php/welcome/view_user">Back</a> </h5>
</div>
</html>