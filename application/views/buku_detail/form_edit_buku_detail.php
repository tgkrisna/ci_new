<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Buku Detail</title>
	<link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<form action="<?php echo base_url() ?>index.php/welcome/edit_buku_detail" method="POST">
	<select name="buku" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Buku</option>
		<?php  
		foreach ($buku as $value) {
			$judul=$value->judul;
			$id=$value->id;
		?>
		<option value="<?php echo $id ?>"
			<?php  
			if ($id==$buku_detail['id_buku']) {
				echo "selected=selected";
			}
			?>
		>
			<?php echo "$judul"; ?>
		</option>
		<?php
		}
		?>
	</select>
	<input type="text" name="kode" placeholder="Kode" value="<?php echo $buku_detail['kode_buku'] ?>"><br>
	<select name="kondisi" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);">
		<option>Pilih Kondisi</option>
		<?php  
		foreach ($kondisi as $value) {
			$kondisi=$value->kondisi;
			$id=$value->id;
		?>
		<option value="<?php echo $id ?>"
			<?php  
			if ($id==$buku_detail['id_kondisi']) {
				echo "selected=selected";
			}
			?>
		>

			<?php echo "$kondisi"; ?>
			
		</option>
		<?php
		}
		?>
	</select>
	<input type="hidden" name="id_buku_detail" value="<?php echo $buku_detail['id'] ?>">
	<input type="submit" name="submit" value="Save" onClick = "return confirm ('Data yang dimasukkan sudah benar?')">
</div>
</div>
</form>
<div class='whysign'>
    <h1>Remember !!!</h1>
    <p>Before you leaving this editor, remember to Save it and Don't make same mistake :)</p>
     <h5>Go Back ?<a href="<?php echo base_url(); ?>index.php/welcome/view_buku_detail">Back</a> </h5>
</div>
</body>
</html>