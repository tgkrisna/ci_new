<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Buku</title>
	<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form action="<?php echo base_url() ?>index.php/welcome/edit_buku" method="POST">
	<input type="text" name="judul" placeholder="Judul Buku" value="<?php echo $buku['judul'] ?>">
	<select name="penerbit" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Penerbit</option>
		<?php  
		foreach ($penerbit as $value) {
			$nama=$value->nama_penerbit;
			$id=$value->id_penerbit;
		?>
		<option value="<?php echo $id ?>" 
			<?php 
			if ($id==$buku['id_penerbit']) {
				echo "selected=selected''";
			} 
			?>
		> <?php echo "$nama"; ?>	
		</option>
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
		<option value="<?php echo $id ?>"
			<?php  
			if ($id==$buku['id_pengarang']) {
				echo "selected='selected'";
			}
			?>
		>
		<?php echo "$nama"; ?>
			
		</option>
		<?php
		}
		?>
	</select>
	<input type="number" name="halaman" placeholder="Jumlah Halaman" value="<?php echo $buku['jumlah_halaman'] ?>" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
	<input type="number" name="tahun" placeholder="Tahun Terbit" value="<?php echo $buku['tahun_terbit'] ?>" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
	<input type="hidden" name="id_buku" value="<?php echo $buku['id'] ?>">
	<input type="submit" name="submit" value="Save" onClick = "return confirm ('Data yang dimasukkan sudah benar?')">
	</div>
	</div>
</form>
<div class='whysign'>
    <h1>Remember !!!</h1>
    <p>Before you leaving this editor, remember to Save it and Don't make same mistake :)</p>
     <h5>Go Back ?<a href="<?php echo base_url(); ?>index.php/welcome/lihat_buku">Back</a> </h5>
</div>
</body>
</html>