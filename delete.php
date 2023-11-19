<?php

include_once "init.php";
$id = $_GET["id"];
$query_delete = "DELETE FROM mahasiswa WHERE id=$id";
mysqli_query($koneksi, $query_delete);
header("Location:pertemuan2.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
    
</body>
</html>