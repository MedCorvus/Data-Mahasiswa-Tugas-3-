<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebC</title>
    <style>
        html{
            height:100%;
            background: linear-gradient(135deg, #A3A3A3, #2B2B2B);
        }
        body {  
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            padding: 10px;
            position: relative;
        }

        .connection-status {
            animation: blink 3s infinite;
            border-radius: 100px;
            max-width: 100px;
            height: 40px;
            background-color: #26d701;
            padding: 10px;
            display: flex;
            align-items: center;
        }
        @keyframes blink {
            0%, 50%, 100% {
                opacity: 0;
            }
            40% {
                opacity: 2;
            }
        }

        .success,
        .error {
            text-align: center;
            margin: 0;
        }

        .success {
            color: white;
            
        }


        .error {
            color: red;
        }

        .menu {
            margin-right:80px;
            background-color: gray;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }
        .dropdown {
    
          position: relative;
          display: inline-block;
        }
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f1f1f1;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

          .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
        }
        .menu:hover{background-color:light}
        .dropdown-content a:hover {background-color: #ddd;}

        .dropdown:hover .dropdown-content {display: block;}

        .dropdown:hover .dropbtn {background-color: #3e8e41;}
        
        .home,
        .insert,
        .update {
            text-decoration: none;
            color: black;
            padding: 10px;
            border-radius: 5px;
            background-color: #fff;
        }

        .data-mahasiswa {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
            font-size: 24px;
        }

    </style>
</head>

<body>
    <div class="navbar">
        <div class="connection-status">
            <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $database = "db_kelas_c";

            $koneksi = mysqli_connect($hostname, $username, $password, $database);

            if ($koneksi) {
                echo "<p class='success'>Koneksi Berhasil</p>";
            } else {
                echo "<p class='error'>Koneksi Gagal</p>";
            }
            ?>
        </div>

        <div class="dropdown">
            <button class="menu">Menu</button>
            <div class="dropdown-content">
                <a href='pertemuan2.php' class='home'>Home</a>
                <a href='insert.php' class='insert'>Insert</a>
                <a href='update.php' class='update'>Update</a>
            </div>
        </div>

        <div class="data-mahasiswa">DATA MAHASISWA</div>
    </div>

</body>

</html>
