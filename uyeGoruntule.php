<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8"/>
<title>Yönetim Bilişim Sistemleri</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<meta charset="utf-8">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>

<style type="text/css">
body{
background-color:#ffffff;
}form{
position: relative;
top:200px;
left:400px;
}
#admin img{
position: relative;
width:50px;
height:50px;
top:-305px;
left:1290px;


}
.container{
	position: relative;
	top:100px;
	width:800px;
	
}

#ekle a{
position: relative;
top:50px;
left:-180px;
width:250px;
height:100px;
}
#sil a{
position: relative;
top:-100px;
left:200px;
width:250px;
height:100px;
}
#guncelleme a{
position: relative;
top:-50px;
left:-180px;
width:250px;
height:100px;
}
#table{
position: relative;
width:200px;
top:300px;
left:300px;

}


 div#header a{
 position: relative;
 top:-82px;
 left:490px;
 }
div#header{
position:fixed;
top:0px;
left:0px;
width:100%;
height:10%;

background-color:#0e0909;
padding:8px;
}
div#yan{
position:fixed;
top:0px;
left:0px;
height:100%;
width:15%;
background-color:#222;
padding:8px;
}


@font-face {
    font-family: "open";
    font-style: normal;
    font-weight: 300;
    src: local("Open Sans Light"), local("OpenSans-Light"), url(https://themes.googleusercontent.com/static/fonts/opensans/v6/DXI1ORHCpsQm3Vp6mXoaTZ1r3JsPcQLi8jytr04NNhU.woff) format('woff');
}

*, *:before, *:after {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

html, body {
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
}

a {
position: relative;
left:0px;
top:70px;
    display: block;
    margin: auto;
    margin-top: 50px;
    text-decoration: none;
    color: inherit;
}

@keyframes linear {
    
    from {
        background-position: 0 0;
    }
    to {
        background-position: 200px 0;
    }
    
}

@keyframes donence {
    
    from {
        background-position: 0 0;
    }
    to {
        background-position: 0 60px;
    }
    
}

@keyframes yuklen {
    
    from {
        background-position: 0 0;
    }
    to {
        background-position: 0 85px;
    }
    
}

@keyframes yilan {
    
    0%, 100% {
        background-position: 20px -30px;
    }
    25% {
        background-position: 150px 5px;
    }
    50% {
        background-position: 20px 40px;
    }
    75% {
        background-position: -100px 5px;
    }
    
}

.cerc {
    width: 150px;
	height:50px;
    padding: 20px;
    text-align: center;
    position: relative;
    background: #fff;
    color: #333;
    font: 12px open, tahoma;
	font-weight: bold;
}
.cerc:before {
    content: '';
    display: block;
    height: 100%;
    width: 100%;
    border-radius: 3px;
    transform: scale( 1.02, 1.08 );
    position: absolute;
    background: #f00;
    background: linear-gradient( 90deg, #fafafa, #fafafa, #1D8EF7, #fafafa, #fafafa );
    background-position: 55px 0;
    top: 0;
    animation: linear 1s infinite linear;
    left: 0;
    z-index: -1;
}

.cerc.donence:before {
    background: radial-gradient( #fafafa, #fafafa, #F2A61A, #fafafa, #fafafa );
    animation: donence 1s infinite linear;
}

.cerc.yuklen:before {
    background: repeating-linear-gradient( -45deg, #fafafa, #fafafa 30px, #5FC914 30px, #5FC914 60px ) fixed;
    animation: yuklen 1s infinite linear;
}

.cerc.yilan:before {
    background: radial-gradient( #EA238D, #EA238D, #EA238D, #EA238D, #fafafa, #fafafa ) no-repeat;
    background-size: 150px 50px;
    animation: yilan 2s infinite linear;
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>



</head>
<body>
<div class="container">
<table>
<table class="table table-dark">
  <thead>
    <tr>
	<h1>Üye Görüntüleme Ekranı</h1>
      <th scope="col">#</th>
      <th scope="col">Email</th>
      <th scope="col">Şifre</th>
    </tr>
  </thead>
  <tbody>
    
<?php
require("bag.php");
	$sorgula1=mysqli_query($baglan,"select * from musteri");
	$i=1;
	while($s=mysqli_fetch_array($sorgula1)){
	
	echo "<tr>
      <th scope='row'>".$i."</th>
      <td>".$s["0"]."</td>
      <td>".$s["1"]."</td>
    </tr>";
	$i++;
	}
?>
</tbody></table></div></body>
<div id="yan">
<a href="adminpanel.html" class="cerc yilan">Popüler Türler</a>
<a href="konsolsatislari.html" class="cerc yilan">Yıllık Konsol Satısları</a>
<a href="denemee.html" class="cerc yilan">Market Hacimleri</a>

</div>


<div id="header">
<img src="sitelogo.jpg"/>
<a href="Panel.html" class="cerc yilan">Admin Paneli</a>



</div>
<div id="admin">
<img src="admin.jpg" alt="Admin">
</div>


</body>

</html>
