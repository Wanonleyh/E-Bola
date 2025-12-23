<?php
include("config.php");
$result = mysqli_query($conn, "SELECT * FROM tambahahli ORDER BY id ASC");
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
    .logo{
        flex: 2;
    }
    .logo img{
        max-height: 100px;
    }
       #content img{
        margin-right: 100px;
        margin-left: 70px;
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
    <br><br>
    <center>
        <h1>SENARAI PEMAIN KUSVOC FC</h1>
        <center>
            <br><br>
            <table border=2>
                <tr bgcolor='#CCCCCC'>
                    <td>No. Pemain</td>
                    <td>Nama Pemain</td>
                    <td>Kelas</td>
                    <td>Nombor kad pengenalan</td>
                    <td>Umur</td>
                    <td>Posisi</td>
                    <td>Padam</d>
                </tr>
<?php
     $no=1;
  while ($res =mysqli_fetch_array($result)) {
      echo "
      <tr>
      <td>".$no."</td>
      <td>".$res['nama']."</td>
      <td>".$res['kelas']."</td>
      <td>".$res['no_ic']."</td>
      <td>".$res['umur']."</td>
      <td>".$res['posisi']."</td>
      <td><a href=delete.php?id=".$res['id'].">hapus</td>
          </tr>";



    $no++;
  }
?>
        </center>
        </table>
        <br><a href="add.php">Tambah ahli</a>
    </center>
    <footer style="background-color: yellow;font-family: 'Zapf-Chancery', cursive;position: absolute;bottom: 0;width: 100%;"><center>Hak Milik KUSVOC FC</center></footer>
</body>
</html>