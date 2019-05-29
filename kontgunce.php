<?php
require("bag.php");
$mesaj="<script>alert('GÜNCELLEME BAŞARILI')</script>";
if($baglan){
	if(isset($_POST["email"])&&isset($_POST["sifre1"])){
$email=$_POST["email"];
$sifre=$_POST["sifre1"];
	$sorgu=mysqli_query($baglan,"UPDATE musteri SET sifre='".$sifre."' where email='".$email."'");
	if ($sorgu){
		echo "Kayıt başarıyla güncellendi";
		
		 echo $mesaj;
		}
	else {
		echo "Hata:".$sorgu."<br>".$baglan->error;
		}
mysqli_close($baglan);
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