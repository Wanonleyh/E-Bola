<?php
include('config.php');
$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM tambahahli WHERE id=$id");

header("location:pendaftaran.php");


?>