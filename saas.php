<?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","projee");
$sorgu=mysqli_query($baglanti,"SELECT OyunTuru,OyunSayisi FROM oyunlar");

$data=array();



foreach($sorgu as $row){
$data[]=$row;

}





mysqli_close($baglanti);
echo json_encode($data);


?>