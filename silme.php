<?php
require("bag.php");
$mesaj="<script>alert('Kayıt Silindi')</script>";
$mesaj2="<script>alert('Böyle Bir kayıt yok')</script>";
if($baglan){
	if(isset($_POST["email"])&&isset($_POST["sifre1"])){
$email=$_POST["email"];
$sifre=$_POST["sifre1"];
	$sorgu=mysqli_query($baglan,"DELETE FROM musteri WHERE sifre='".$sifre."' AND email='".$email."'");
	if ($sorgu){
		echo "Kayıt başarıyla silindi. Panel ekranına yönlendiriliyorusunuz...";
		echo $mesaj;
		}
	else {
		echo $mesaj2;
		echo "Hata:".$sorgu."<br>".$baglan->error;
		}
}
else{
	echo "Veriler gelmedi!";
} 
}
else {
	die("Bağlantı Yapılamadı");
}
header("Refresh:0.1; url=Panel.html");