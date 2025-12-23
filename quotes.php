<?php
include("config.php");
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

    .gallery table tr td{
    	padding:30px;
    	text-align: center;
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
		<center>
			<h1>NAMA/POSISI PEMAIN & KATA-KATA SEMANGAT </h1>
		</center>
	<div class="container">
		<div class="gallery">
			<table>
				<tr>
					<td><img src="./image3/Kopak.png"></td>
					<td><img src="./image3/Edi.png" width="438px" height="342px"></td>
					<td><img src="./image3/kage.png" width="438px" height="342px"></td>
				</tr>
				<tr>
					<td><p>Mohd Haikal Bin Noor Azri <strong>"LB"</strong></p><p><h3>"Never let your teammate down"</h3></p></td>
					<td><p>Adam Bin Aidy <strong>"RB"</strong></p><p><h3>"pls don't fear mistakes, they are none"</h3></p>
					</td>
					<td><p>Muhammad Faris Bin Zafiran <strong>"RWF"</strong></p><p><h3>"Hardwork is a key you need to success"</h3>
					</p></td>
				</tr>
				<tr>
					<td><img src="./image3/Shah.png" width="438px" height="342px"></td>
					<td><img src="./image3/wan.png" width="438px" height="342px"></td>
					<td><img src="./image3/jimmy.png" width="438px" height="342px"></td>
				</tr>
				<tr>
					<td><p>Shah Adam Bin Hussin <strong>"LWF"</strong></p><p><h3>"Find away,not an excuse"</h3></p></td>
					<td><p>Hazwan Haikal Bin Haizam Irwan <strong>"ST"</strong></p><p><h3>"We live,we love,we lie"</h3></p>
					</td>
					<td><p>Nazmi Aiman Bin Sahrel <strong>"DMF"</strong></p><p><h3>"Jangan Jibey brother"</h3>
					</p></td>
				</tr>
			</table>
			</div>
	</div>
	<footer style="background-color: yellow;font-family: 'Zapf-Chancery', cursive;"><center>Hak Milik KUSVOC FC</center></footer>
</body>
</html>