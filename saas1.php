<?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","projee");

$sorgu=mysqli_query($baglanti,"SELECT Platformlar,Satis_Rakamlari FROM satis");
$data=array();



foreach($sorgu as $row){
$data[]=$row;

}





mysqli_close($baglanti);
echo json_encode($data);


?>