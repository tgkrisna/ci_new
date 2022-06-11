<?php  
if (isset($_GET['login'])) {
	echo "<script type='text/javascript'>alert('Username dan Password Salah !')</script>";
}
?>
<html>
<head>
	<title>Login</title>
		 <link href="<?php echo base_url(); ?>assets/style1.css" rel="stylesheet">
</head>
<body>
<center><img src="<?php echo base_url(); ?>assets/daun.png"></center>
<div id='container'>
      <div class='signup'>
<pre>
<form action="<?php echo base_url() ?>index.php/welcome/login" method="POST">
	<input type="text" name="username" placeholder="Username"></input>
	<input type="password" name="password" placeholder="Password" style="display: block;margin: 0 auto; width: 80%; border: 0; border-bottom: 1px solid rgba(0,0,0,.2); height: 45px; line-height: 45px; margin-bottom: 10px; font-size: 1em; color: rgba(0,0,0,.4);"></input>
	<center><input type="submit" name="login" value="Login"> </input></center>
</form>
</pre>
</div>
</div>
<div class='whysign'>
    <h1>Why Sign Up to Bataco</h1>
    <p>Bataco is simple start up for someone who is inserting data to database, that move for book stationary. Sign Up is required for easy conctact to you</p>
  </div>
</body>
</html>