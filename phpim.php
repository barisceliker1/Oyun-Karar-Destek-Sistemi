<?php
require("connection.php");
if($_POST){
#	echo "Sayfaya Bağlantı Yapıldı";
if(isset($_POST["eposta"]))
{
	$email=strip_tags(trim($_POST["eposta"]));
}
else{
	echo "Eposta requesti olmadı";	
}
if(isset($_POST["sifre"]))
{
	$password=strip_tags(trim($_POST["sifre"]));
}
else{
	echo "Şifre requesti olmadı";	
}
if($baglan){
    $sorgu=mysqli_query($baglan,"SELECT eposta,sifre FROM admin WHERE eposta='".$email."' and sifre='". $password."'" );
if(isset($sorgu)){
echo "Kullanıcı Adı ve Şifre Başarılı";
}else{
echo "Kullanıcı Adı veya Şifre Yanlış";
}

}else{
die("Veritabanına Bağlanılmadı");
}
	echo "Kullanıcı Adınız :  " .$email."Şifreniz 
	:".$password;
}
else{
echo "Sayfaya Bağlantı Yapılamadı";
}