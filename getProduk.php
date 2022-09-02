<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas Evaluasi Minggu 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> 
</head>
<body>
<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost', 'root', '');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con, "toko");
    // $sql = "SELECT * FROM '" . $q . "'";
$sql = "SELECT * FROM produk";
$result = mysqli_query($con, $sql);
echo "<table class='table table-striped'>";   
    echo "<thead class='thead-dark'>";
    echo "<tr>";
      echo "<th scope='col'>Nama Produk</th>";
      echo "<th scope='col' style='width:500px;'>Deskripsi Produk</th>";
      echo "<th scope='col'>Harga Produk</th>";
      echo "<th scope='col'>Gambar Produk</th>";
    echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['nama_produk'] . "</td>";
        echo "<td>" . $row['deskripsi_produk'] . "</td>";
        echo "<td>" . $row['harga_produk'] . "</td>";
        echo "<td><img src='gambar/$row[gambar_produk]' alt='' style='height: 100px;'></td>";
        echo "</tr>";
    }
  echo "</tbody>";
echo "</table>";
?>
</body>
</html>