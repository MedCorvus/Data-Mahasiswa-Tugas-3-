<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: darkgrey;
            color: white;
            margin: 0;
            padding: 20px;
        }

        .mahasiswa-item {
            background: linear-gradient(135deg, #A3A3A3, #2B2B2B);
            border: 1px solid white;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .delete-link {
            background-color: white;
            color: red;
            text-decoration: none;
            font-weight: bold;
            margin-left: 10px;
        }

        .delete-link:hover {
            color: white;
            border: 1px solid black;
            background-color: red;
            text-decoration: underline;
        }

        .underText {
            background-color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            padding-bottom: 32px;
            text-align: center;
        }

        .search-container {
            margin-bottom: 20px;
            text-align: center;
        }

        input[type=text] {
            padding: 8px;
            width: 200px;
        }

        input[type=submit] {
            padding: 8px;
            background-color: white;
            color: black;
            border: 1px solid black;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="search-container">
        <form action="" method="GET">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search">
            <input type="submit" value="Search">
        </form>
    </div>

    <?php
    include_once "init.php";

    // Check if the search parameter is set
    if (isset($_GET['search'])) {
        $searchTerm = mysqli_real_escape_string($koneksi, $_GET['search']);
        $query = "SELECT * FROM mahasiswa WHERE 
                   id LIKE '%$searchTerm%' OR 
                   nama LIKE '%$searchTerm%' OR 
                   nim LIKE '%$searchTerm%' OR 
                   jenisKelamin LIKE '%$searchTerm%'";
    } else {
        $query = "SELECT * FROM mahasiswa";
    }

    $result = mysqli_query($koneksi, $query);

    while ($data = mysqli_fetch_assoc($result)) {
        echo "<div class='mahasiswa-item'>";
        echo "Id: " . $data["id"] . "<br>";
        echo "Nama: " . $data["nama"] . "<br>";
        echo "NIM: " . $data["nim"] . "<br>";
        echo "Jenis Kelamin: " . ($data["jenisKelamin"] == 'l' ? "Pria" : "Wanita") . "<br>";
        echo '<a href="delete.php?id=' . $data['id'] . '" class="delete-link">DELETE</a><hr>';
        echo "</div>";
    }
    ?>
    <div class='underText'>© 2023 webC . Powered by PhpMyAdmin  </div>
</body>

</html>
