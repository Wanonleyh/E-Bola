<?php
include('config.php');

if(isset($_POST['Submit'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $no_ic = $_POST['nombor_ic'];
    $umur = $_POST['umur'];
    $posisi = $_POST['posisi'];
   
    $result = mysqli_query($conn, "INSERT INTO tambahahli VALUES ('NULL','$nama','$kelas','$no_ic','$umur','$posisi')");

    echo "<script>alert('Tambah maklumat berjaya');"
    . "window.location='pendaftaran.php'</script>";

}
else
{
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
    <br><br><br><br><br><br><br><br>
        <center><h1>TAMBAH REKOD PEMAIN</h1>
        <form action="add.php" method="post" name="form1">
                <table width="25%" border="0">
                    <tr>
                        <td>Nama pemain:</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                     <tr>
                        <td>Kelas:</td>
                        <td><select name="kelas">
                            <option value="1 SVM KPD">1 SVM KPD</option>
                            <option value="1 SVM KMK">1 SVM KMK</option>
                            <option value="1 SVM HSK">1 SVM HSK</option>
                            <option value="1 SVM HBP">1 SVM HBP</option>
                            <option value="1 SVM BAK">1 SVM BAK</option>
                            <option value="1 SVM BPM">1 SVM BPM</option>
                            <option value="4 OPP">4 OPP</option>
                            <option value="2 SVM KPD">2 SVM KPD</option>
                            <option value="2 SVM KMK">2 SVM KMK</option>
                            <option value="2 SVM HSK">2 SVM HSK</option>
                            <option value="2 SVM HBP">2 SVM HBP</option>
                            <option value="2 SVM BAK">2 SVM BAK</option>
                            <option value="2 SVM BPM">2 SVM BMP</option>
                            <option value="5 OPP">5 OPP</option>
                            <option value="1 DVM KPD">1 DVM KPD</option>
                            <option value="1 DVM KMK">1 DVM KMK</option>
                            <option value="1 DVM HSK">1 DVM HSK</option>
                            <option value="1 DVM HBP">1 DVM HBP</option>
                            <option value="1 DVM BAK">1 DVM BAK</option>
                            <option value="1 DVM BPM">1 DVM BPM</option>
                            <option value="2 SVM KPD">2 DVM KPD</option>
                            <option value="2 SVM KMK">2 DVM KMK</option>
                            <option value="2 SVM HSK">2 DVM HSK</option>
                            <option value="2 SVM HBP">2 DVM HBP</option>
                            <option value="2 SVM BAK">2 DVM BAK</option>
                            <option value="2 SVM BPM">2 DVM BPM</option>
                        </select>
                    </td>
                    </tr>
                    <tr>
                        <td>Nombor Kad Pengenalan</td>
                        <td><input type="text" name="nombor_ic"></td>
                    </tr>
                    <tr>
                        <td>Umur:</td>
                        <td><select name="umur">
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </td>
                    </tr>
                     <tr>
                        <td>posisi:</td>
                        <td><select name="posisi">
                                <option value="Gk">GK</option>
                                <option value="RB">RB</option>
                                <option value="LB">LB</option>
                                <option value="CB">CB</option>
                                <option value="MID">MID</option>
                                <option value="AMF">AMF</option>
                                <option value="DMF">DMF</option>
                                <option value="CMF">CMF</option>
                                <option value="ST">ST</option>
                                <option value="LWF">LWF</option>
                                <option value="RWF">RWF</option>
                            </select>
                        </td>            
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><input type="submit" name="Submit" value="SUBMIT" style="background-color: red;">
                            </center>
                        </td>
                    </tr>
                </table>
            </form>
            <BR><a href="pendaftaran.php">Kembali ke pendaftaran semula</a>
     </center>
    <footer style="background-color: yellow;font-family: 'Zapf-Chancery', cursive;position: absolute;bottom: 0;width: 100%;"><center>Hak Milik KUSVOC FC</center></footer>
<?php
}
?>
</body>
</html>