<?php 
require("new3.php");
if($_POST){


}
$email=($_POST["email"]);
$sifre=($_POST["sifre"]);

if($baglan){
#echo "Veritabanına Bağlandı";
$sorgu=mysqli_query($baglan,"SELECT email,sifre FROM musteri ");
if($sorgu){
while($row = mysqli_fetch_assoc($sorgu)) {
$mail=$row['email'];
$sif=$row['sifre'];
 }
 if($mail==$email&&$sif==$sifre){
	header ("Location:Panel.html");
}
else {
	echo "başarısız";
}


}else{echo "Sonuç yok";}}

mysqli_close($baglan);
#	echo "Kullanıcı Adınız:".$email."Şifreniz:".$password;
?>