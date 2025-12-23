<?php
 include('config.php');

?>
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
        padding: 0;
        font-family: montserrat;
        height: 100vh;
        overflow: hidden;

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
    form{
        width: 500px;
        border: 2px solid #ccc;
        padding: 30px;
        background: skyblue;
        border-radius: 15px;
    }
    h2{
        text-align: center;
        margin-bottom: 40px;
    }
    input{
        display: block;
        border: 2px solid #ccc;
        width: 95%;
        padding: 10px;
        margin: 10px auto;
        border-radius: 5px;
    }
    label{
        font-size: 18px;
        padding: 10px;
    }
    button{
        float: right;
        background: yellow;
        padding: 5px;
        border-radius: 5px;
        margin-right: 5px;
        border: none;
    }
    button:hover{
        opacity: .7;
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
    <h1><center>"User perlu masukkan data username dan password yang telah diberi oleh Admin"</center></h1>
    <br><br>
    <center>
    <form action="login_backEnd.php" method="POST">
        <h2>Log in</h2>
    <label>User Name:</label>
    <input type="text" name="user_name" placeholder="User Name" required>

     <label>Password:</label>
    <input type="password" name="user_password" placeholder="Password" required>

    <button type="submit">SUBMIT</button>
    </form>
</center>
    <footer style="background-color: yellow;font-family: 'Zapf-Chancery', cursive;cursive;position: absolute;bottom: 0;width: 100%;"><center>Hak Milik KUSVOC FC</footer>

</body>

</html>