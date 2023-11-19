<?php

include_once "init.php";

if(isset($_POST["submit"])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jk = $_POST['jk'];
    $id =$_POST['id'];

    $query_update = "UPDATE mahasiswa SET nama='$nama',nim='$nim', jenisKelamin='$jk' WHERE id = $id";
    mysqli_query($koneksi, $query_update);
    header("Location: pertemuan2.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          margin: 0;
          padding: 0;
        }
        
        form input,
        form select {
            margin-right: 40px;
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }
        .posisi {
            display: flex;
            justify-content: center;
        }
        form{
          margin-top: 10%;
            margin-bottom: 50px;
            max-width: 400px;
            background-color: white;
            padding-right: 60px;
            padding-left: 60px;
            padding-bottom: 40px;
            border: 1px solid black;
            border-radius: 10px;
            box-shadow: 0 0 10px;
        }
      .Title{
      text-align:center;
    }
    .underText {
            background-color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding-bottom: 32px;
            text-align: center;
        }
    .tombol{
      background-color: white;
    }
    .tombol:hover{
      color:white;
      background-color:#666666;
    }
    </style>
</head>
<body>
  <div class='posisi'>
<form action="" method="post">
    <h3 class='Title'>Change Data</h3>
    <input class='id' type="text" name="id" placeholder="Masukan Id Yang Ingin di Ubah..." required><br>
    <input class='nama' type="text" name="nama" placeholder="Masukan Nama Baru.." required><br>
    <input class='nim' type="text" name="nim" placeholder="Masukan NIM Baru.." required><br>
    <select name="jk">
        <option value="l">Pria</option>
        <option value="p">Perempuan</option>
    </select>
    <input class='tombol' type="submit" name="submit" value="Ubah"><br>
</form>
  </div>
     <div class='underText'>© 2023 webC . Powered by PhpMyAdmin  </div>
</body>
</html>