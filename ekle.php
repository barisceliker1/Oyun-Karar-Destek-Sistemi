<?php
require("new3.php");
$mesaj="<script>alert('Kayıt Başarıyla Eklendi')</script>";
$mesaj2="<script>alert('Lütfen Şifreleri Aynı Giriniz')</script>";
if($baglan){
	if(isset($_POST["email"])&&isset($_POST["sifre1"])&&isset($_POST["sifre2"])){
$email=$_POST["email"];
$sifre=$_POST["sifre1"];
$sifre2=$_POST["sifre2"];
if($sifre==$sifre2){
	$sorgu=mysqli_query($baglan,"INSERT INTO musteri (email,sifre) VALUES ('".$email."','".$sifre."')");
	if ($sorgu){
		echo "Kayıt başarıyla eklendi";
		echo $mesaj;
		}
	else {
		echo "Hata:".$sorgu."<br>".$baglan->error;
		
		}

	}
else {
	echo "Girilen şifreler farklı!";
	echo $mesaj2;
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
?>