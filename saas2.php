<?php
header('Content-Type:application/json');
$baglanti=mysqli_connect("localhost","root","","dene");

$sorgu=mysqli_query($baglanti,"SELECT Yer,Hacim FROM market");
$data=array();



foreach($sorgu as $row){
$data[]=$row;

}





mysqli_close($baglanti);
echo json_encode($data);


?>