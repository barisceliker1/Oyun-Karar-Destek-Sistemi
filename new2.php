<?php 
require("new3.php");
if($_POST){
	echo "Sayfaya Bağlantı Yapıldı";

}
$email=strip_tags(trim($_POST["inputEmail"]));
$password=strip_tags(trim($_POST["inputPassword"]));

if($baglan){
#echo "Veritabanına Bağlandı";
$sorgu=mysqli_query($baglan,"SELECT * FROM musteri WHERE eposta='".$email."' AND sifre='".$password."'");
if($sorgu){
echo "Kullanıcı Adı ve Şifre Başarılı";
}else{
echo "Kullanıcı Adı ve Şifre Yanlış";
}
}else{
die("Veritabanına Bağlanılmadı");
}
#	echo "Kullanıcı Adınız:".$email."Şifreniz:".$password;













$metin= "kullanıcı xx hoşgeldiniz kalan bakiyeniz yy ";

$bul=array("xx","yy");
$degistir=array("erhan","90");
echo str_replace($bul,$degistir,$metin);
function yarat($a,$b){
$toplam=strlen($a);
if($toplam>$b)
{
$a=substr($a,0,$b)."...";
}
return $a;
}
$metin="Bugün hava çok güzel";
echo yarat($metin,11);

$metsn="Research productivity in management schools of India during 1968-2015: A
directional benefit-of-doubt model analysis ";
if(explode($metsn,"saa")){
echo "içinde India var";
}
else{echo "yok";}

$pizza  = "dilim1 dilim2 dilim3 dilim4 dilim5 dilim6";
$dilimler = explode(" dilim1", $pizza);
echo $dilimler[0];
$a="canaydinn@deu.edu.tr";
$parcala= explode("@", $a);
echo $parcala[1];
if($parcala[1]=="deu.edu.tr")
{
echo "girmek isteyen hoca";}
elseif($parcala[1]=="ogr.deu.edu.tr")
{
echo "girmek isteyen ogrenci";
}











?>