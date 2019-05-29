<?php
require("connection.php");
if($conn){
	if(isset($_POST["eposta"])&&isset($_POST["sifre1"])&&isset($_POST["sifre2"])){
$email=$_POST["eposta"];
$sifre=$_POST["sifre1"];
$sifre2=$_POST["sifre2"];
if($sifre==$sifre2){
	$sorgu=mysqli_query($conn,"INSERT INTO Admin (email,sifre) VALUES ('".$email."','".$sifre."')");
	if ($sorgu){
		echo "Kayıt başarıyla eklendi";
		}
	else {
		echo "Hata:".$sorgu."<br>".$conn->error;
		}
mysqli_close($conn);
	}
else {
	echo "Girilen şifreler farklı!";
}
}
else{
	echo "Veriler gelmedi!";
} 

}
else {
	die("Bağlantı Yapılamadı");
}
header("Refresh:3; url=uyeEkle.php");
?>