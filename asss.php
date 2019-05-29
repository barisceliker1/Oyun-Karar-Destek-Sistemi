<?php
include("baglama.php");
if($_POST){
	echo "Sayfaya Bağlantı Yapıldı";
if(isset($_POST["inputEmail"]))
{
	$eposta=strip_tags(trim($_POST["inputEmail"]));
}
else{
	echo "Eposta requesti olmadı";	
}
if(isset($_POST["inputPassword"]))
{
	$password=strip_tags(trim($_POST["inputPassword"]));
}
else{
	echo "Şifre requesti olmadı";	
}
if($baglan){
    $sorgu=mysqli_query($baglan,"SELECT email,sifre FROM musteri WHERE email='".$eposta."' and sifre='".$password."'" );
if(isset($sorgu)){if (mysqli_num_rows($sorgu) > 0) {
$row = mysqli_fetch_row($sorgu);
echo $row[0];
echo "Hoşgeldiniz";
}else{echo "Sonuç yok";
}

echo "Kullanıcı Adı ve Şifre Başarılı";
}else{
echo "Kullanıcı Adı veya Şifre Yanlış";
}

}else{
die("Veritabanına Bağlanılmadı");
}
	echo "Kullanıcı Adınız :  " .$eposta."Şifreniz 
	:".$password;
}
else{
echo "Sayfaya Bağlantı Yapılamadı";
}