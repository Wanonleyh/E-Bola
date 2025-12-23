<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistem E-Bola</title>
	<link rel="stylesheet" type="text/css" href="css/lightboxmin.css">
	<script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
</head>
<style>
	html{
		scroll-behavior: smooth;
	}

	*{
		margin: 0 0 0 0;
		padding: 0;
	}

	body{
		background-color: #AFE1AF;
		margin: 0;

	}

    ul{
    	list-style: none;
    	padding: 0;
    	margin: 0;
    }
    li{
    	display: inline;
    	margin-right: 20px;
    }

    a{
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

    .logo{
    	flex: 2;
    }

    .logo img{
    	max-height: 100px;
    }

    ul li a:hover{
    	color: red;
    }

    .content{
    	width: 100%;
    	min-height: 100vh;
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	padding: 50px 8%; 
    }
    .gallery{
    	margin: 10px 50px;
    }
    .gallery img:hover{
     filter: grayscale(0);
     transform: scale(1.1);
    }
    
 
    </style>
<body>	
	<header>
	 <!-- <nav> --> 
	 	<div class="logo">
	<img src="./image/kusvocFC.png" width="150px" height="90px">
	<img src="./image/kvks.png" width="200px" height="50px">
		</div>
	<div>
	 	<ul>
        <li><a href="index.php">UTAMA</a></li>
        <li><a href="info.php">INFO</a></li>
        <li><a href="quotes.php">PEMAIN & QUOTES</a></li>
        <li><a href="pendaftaran.php">PENDAFTARAN</a></li>
        <li><a href="login.php">USER</a></li>
    	</ul>
     </div>
	 <!-- </nav> -->
	</header>
	<div id="content">
			<h1>PENCAPAIAN & PERLAWANAN PERSAHABATAN DENGAN KUSVOC FC </h1>
			<br><br>
			<center>
			<div class="gallery">
			  <a href="./image2/MSSD2022 - Copy.jpeg" data-lightbox="mygallery"><img src="./image2/MSSD2022.jpeg" width="500px"></a>
         <p>
			<h2>KUSVOC FC MSSD 2022</h2>
		   </p>
			
			<br><br>	
			   <a href="./image2/friendly1 - Copy.jpeg" data-lightbox="mygallery"><img src="./image2/friendly1.jpeg" width="500px"></a>
         <p>
			<h2>PERLAWANAN PERSAHABATAN KALI PERTAMA</h2>
			<p><h3>(Kolej Vokasional Kuala Selangor(2) vs(1) SMK Sultan Sulaiman Shah)</h3></p>
		   </p>
			<br><br>
				<a href="./image2/friendly2 - Copy.jpeg" data-lightbox="mygallery"><img src="./image2/friendly2.jpeg" width="500px"></a>
         <p>
			<h2>PERLAWANAN PERSAHABATAN KALI KEDUA</h2>
			<p><h3>(Kolej Vokasional Kuala Selangor(0) vs(3) KOMTAS TEAM B)</h3></p>
		   </p>
			<br><br>
			   <a href="./image2/MSSD2023 - Copy.jpeg" data-lightbox="mygallery"><img src="./image2/MSSD2023.jpeg" width="500px"></a>
         <p>
			<h2>KUSVOC FC MSSD 2023</h2>
		   </p>
			</div>
			<br><br>
				<a href="./image2/friendlyVoktek - Copy.jpeg" data-lightbox="mygallery"><img src="./image2/friendlyVoktek.jpeg" width="500px"></a>
         <p>
			<h2>PERLAWANAN PERSAHABATAN SEBELUM PERSEDIAAN VOKTEK</h2>
			<p><h3>(Kolej Vokasional Kuala Selangor(3) vs(0) KOMTAS TEAM A)</h3></p>
		   </p>
			<br><br>
			  <a href="./image2/Voktek2023 - Copy.jpeg" data-lightbox="mygallery"><img src="./image2/Voktek2023.jpeg" width="500px"></a>
         <p> 
			<h2>KUSVOC FC VOKTEK 2023</h2>
			<p><h3>Tidak ada rezeki untuk membanggakan kvks :(</h3></p>
		   </p>
			</div>
		</center>
		   </div>
	</div>
	<footer style="background-color: yellow;font-family: 'Zapf-Chancery', cursive;"><center>Hak Milik KUSVOC FC</center></footer>
</body>
</html>