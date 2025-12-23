<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem E-Bola</title>
</head>
<style>
	html{
		scroll-behavior: smooth;
	}
	*{
		margin: 0 0 0 0;
	}
	body{
		background-color: #AFE1AF;
		margin: 0;

	}
    .link ul{
    	list-style: none;
    	padding: 0;
    	margin: 0;
    }
    .link ul li{
    	display: inline;
    	margin-right: 20px;
    }

    .link ul li a{
    	text-decoration: none;
    	color: black;
    }
    header{
    	display: flex;
    	align-items: center;
    	padding: 0px;
    	background-color: white ;
    	margin: 0;
    }
    p{
    	font-size: 20px;
    }
    .logo{
    	flex: 2;
    }
    .logo img{
    	max-height: 100px;
    }
    .content{
    	padding-right: 1px;
    	padding-left: 1px;
    }
    ul li a:hover{
    	color: red;
    }
    </style>
<body>
	<header>
     <div class="logo">
	<img src="./image/kusvocFC.png" width="150px" height="90px">
	<img src="./image/kvks.png" width="200px" height="50px">
	
		</div>
	<div class="link">
	 	<ul>
        <li><a href="index.php">UTAMA</a></li>
        <li><a href="info.php">INFO</a></li>
        <li><a href="quotes.php">PEMAIN & QUOTES</a></li>
        <li><a href="pendaftaran.php">PENDAFTARAN</a></li>
        <li><a href="login.php">USER</a></li>
    	</ul>
     </div>
	</header>
	   <div id="content">
	   <marquee>
<img src="./image/1.jpg" width="200px" height="100px">
<img src="./image/2.jpg" width="200px" height="100px">
<img src="./image/background.jpg" width="200px" height="100px">
<img src="./image/3.jpg" width="200px" height="100px">
      </marquee>
		<p><strong>APAKAH ITU BOLA SEPAK?</strong></p><br>
		    <p>Sukan berpasukan yang dimainkan oleh dua pasukan yang mana setiap pasukan terdiri daripada 11 orang pemain yang menggunakan kaki mereka untuk mengawal bola di sekeliling padang yang berbentuk segi empat tepat, di atas rumput atau rumput buatan.</p><br>

		<p><strong>CARA BERMAINNYA?</strong></p><br>
		    <p>Bola sepak dimainkan dengan menggunakan kedua-dua belah kaki, tetapi para pemain dibenarkan menggunakan semua bahagian badannya kecuali tangan. Penjaga gol yang bertugas mengelakkan bola daripada merentasi garisan gol pula dibenarkan menggunakan tangannya untuk menangkap bola di dalam kawasan penalti.</p><br>

		<p><strong>DIMANAKAH TEMPAT KITA UNTUK BERMAIN BOLA?</strong></p><br>
		    <p>Permukaan buatan mestilah berwarna hijau. Pengukuran piawai padang. Bukan semua padang adalah saiz yang sama, walaupun saiz pilihan untuk banyak stadium pasukan profesional adalah 105 kali 68 meter (115 yd × 74 yd) dengan keluasan kawasan 7,140 meter
		    </p><br>
		    

		<p><strong>APAKAH POSISI PEMAIN YANG PERLU ADA SETIAP PASUKAN?</strong></p><br>
            <p>Ada pelbagai jenis posisi setiap pemain iaitu:</p><br>
           <p>1)Keeper</p><br>
           <p>2)Back sayap kanan</p><br>
           <p>3)Back sayap kiri</p><br>
		   <p>4)Defend kanan</p><br>
		   <p>5)Defend Kiri</p><br>
		   <p>6)Midfield tengah kanan</p><br>
		   <p>7)Midfield tengah kiri</p><br>
		   <p>8)Wing Midfield kanan</p><br>
		   <p>9)Wing Midfield Kiri</p><br>
		   <p>10)Striker kanan</p><br>
		   <p>11)Striker Kiri</p><br>
	</div>
	<footer style="background-color: yellow;font-family: 'Zapf-Chancery', cursive;"><center>Hak Milik KUSVOC FC</center></footer>
</body>
</html>